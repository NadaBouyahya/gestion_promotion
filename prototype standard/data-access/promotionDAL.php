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

    // delete promo
    public function deletePromo($promotion){
        $id = $promotion->getId();
        $delet = "DELETE FROM promotion WHERE id = $id";
        mysqli_query($this->Connect(), $delet);
    }

}
?>