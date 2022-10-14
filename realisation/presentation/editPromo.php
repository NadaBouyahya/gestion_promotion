<?php
include '../data-access/promotionManager.php';
$promoManager = new PromoManager();

if (isset($_POST['submit'])) {
    $newPromo = new Promotion();
    $newPromo->setId($_GET['id_edit']);
    $newPromo->setname($_POST['name']);
    $promoManager->editPromo($newPromo);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div id="editPage">
        <form action="" method="POST">
            <?php
            $get_data = new promoManager();
            $promo = new promotion();
            $promo->setId($_GET['id_edit']);

            $result = $get_data->getPromoById($promo);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<input  id='add_input' name='name' type='text' value='" . $row['name'] . "'>";
                }
            }

            ?>
            <!--  -->
            <button id="submit_btn" type="submit" name="submit">Add</button>
        </form>
    </div>

</body>

</html>