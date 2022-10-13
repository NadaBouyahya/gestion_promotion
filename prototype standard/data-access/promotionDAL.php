<?php 
include 'conn.php';
include 'promotion.php';

class PromotionDAL extends Connection{

    //Add to promotion
    public function addPromo($promotion){

        $name = $promotion->getName();

        $add = "INSERT INTO promotion(name) VALUES ('$name') ";
        mysqli_query($this->Connect(), $add);
    }

    // Get Promotion
    public function selectAllPromo(){
        $select = "SELECT * FROM promotion";
        return mysqli_query($this->Connect(), $select);
    }

    public function getPromotionById($promo){
        $sqlGetData = "SELECT * FROM promotion WHERE id = ". $promo->getId();
        return mysqli_query($this->Connect(), $sqlGetData);
    }


    // delete promo
    public function deletePromo($promotion){
        $id = $promotion->getId();
        $delet = "DELETE FROM promotion WHERE id = $id";
        mysqli_query($this->Connect(), $delet);
    }

    // edit promo
    function edit_promo($promotion){
        $id = $promotion->getId();
        $name = $promotion->getName();

        $edit = "UPDATE promotion SET name = '$name'
        WHERE id = $id";
        mysqli_query($this->Connect(), $edit);

        header('location: ../presentation/showPromo.php');
    }

    // search promo 

    function search_promo($promotion){
    $name = $promotion->getName();
     
    $search = "SELECT * FROM promotion
     WHERE name LIKE '%$name%'";
    return mysqli_query($this->Connect(), $search);

    }
}
