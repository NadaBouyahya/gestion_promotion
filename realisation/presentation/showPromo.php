<?php
include '../data-access/promotionManager.php';

$promoManager = new PromoManager();


if (isset($_POST['submit'])) {
    $namePromo = new Promotion();
    $namePromo->setName($_POST['name']);
    $promoManager->addPromo($namePromo);
}

if (isset($_GET['id_delete'])){
    $idPromo = new promotion();
    $idPromo->setId($_GET['id_delete']);
    $promoManager->deletePromo($idPromo);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input name="name" type="text">
        <button type="submit" name="submit">Add</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>actions</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $get_data = new PromoManager();
            $data = $get_data->getPromo();
            if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
                    echo "<tr> 
                            <td>" . $row['name'] . "</td>

                            <td> 
                                <a href='showPromo.php?id_delete=" . $row['id'] . "'>delete</a>
                                <a href='editPromo.php?id_edit=" . $row['id'] . "'>Edit</a>
                            </td>
                        </tr>

                        ";
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>