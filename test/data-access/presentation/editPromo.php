<?php
    include '../data-access/promo.php';

    if(isset($_POST['submit'])){
        $promo = new Promo($_GET['id_edit'], $_POST['name']);
        $promo->edit_promo();
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
        Nom de promotion: 
        <?php 
            $obj = new Promo($_GET["id_edit"], NULL);
            $res = $obj->select_id();
            if($res->num_rows > 0){
                while($row = $res->fetch_assoc()){
                    echo '<input type="text" name="name" value="'.$row["name"].'">';
                }
            }
        ?>
        
        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>

</html>