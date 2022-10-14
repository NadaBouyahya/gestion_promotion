<?php 
    include '../data-access/promotionManager.php';

    if(isset($_POST['search'])){
        $PromoManager = new PromoManager();
        $promo = new Promotion();
        $promo->setName($_POST['name']);

        $result = $PromoManager->searchPromo($promo);
        $data = [];

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        echo json_encode($data);
    }
?>