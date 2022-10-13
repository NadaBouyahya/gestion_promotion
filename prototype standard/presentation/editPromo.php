<?php 
include '../data-access/promotionDAL.php';

$promotionDAL = new PromotionDAL();

    if(isset($_POST["submit"])){
        $newPromo = new Promotion();
        $newPromo->setName($_POST['name']);
        $newPromo->setId($_GET['id_edit']);
		$promotionDAL->edit_promo($newPromo);

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
        	$get_data = new PromotionDAL();
            $promo = new promotion();
            $promo->setId($_GET["id_edit"]);
            $res = $get_data->getPromotionById($promo);
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