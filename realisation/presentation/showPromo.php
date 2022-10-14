<?php
include '../data-access/promotionManager.php';

$promoManager = new PromoManager();


if (isset($_POST['submit'])) {
    $namePromo = new Promotion();
    $namePromo->setName($_POST['name']);
    $promoManager->addPromo($namePromo);
}

if (isset($_GET['id_delete'])) {
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
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div id="add_search">
        <nav>
            <div class="topnav">
                <input id="search" type="text" placeholder="Search..">
            </div>
        </nav>
        <form action="" method="POST">
           <label for="name">Add promotion :</label> <input id="add_input" name="name" type="text">
            <button id="submit_btn" type="submit" name="submit">Add</button>
        </form>
    </div>

    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Name</th>
                <th>actions</th>
            </tr>
        </thead>

        <tbody id="tbody">
            <?php
            $get_data = new PromoManager();
            $data = $get_data->getPromo();
            if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
                    echo "<tr> 
                            <td>" . $row['name'] . "</td>

                            <td> 
                                <a id='delete_btn' href='showPromo.php?id_delete=" . $row['id'] . "'>delete</a>
                                <a id='edit_btn' href='editPromo.php?id_edit=" . $row['id'] . "'>Edit</a>
                            </td>
                        </tr>

                        ";
                }
            }
            ?>
        </tbody>
    </table>

    <script src="script.js"></script>
</body>

</html>