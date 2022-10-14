<?php
include 'conn.php';
include 'promotion.php';

class PromoManager extends Connection{

    // Select promotion
    public function getPromo(){
        $selectAll = "SELECT * FROM promotion";
        return mysqli_query($this->Connect(), $selectAll);
    }

    // select promotion by id 
    public function getPromoById($promotion){
        $id = $promotion->getId();

        $selectById = "SELECT * FROM promotion WHERE
        id = $id";

        return mysqli_query($this->Connect(), $selectById);
    }

    // Add promo 
    public function addPromo($promotion){
        $name = $promotion->getName();

        $insert = "INSERT INTO promotion (name) VALUES ('$name')";
        mysqli_query($this->Connect(), $insert);
    }

    // delete promo 
    public function deletePromo($promotion){
        $id = $promotion->getId();

        $delete = "DELETE FROM promotion WHERE 
        id =$id ";

        mysqli_query($this->Connect(), $delete);
    }

    // edit promo 
    public function editPromo($promotion){
        $id = $promotion->getId();
        $name = $promotion->getName();

        $update = "UPDATE promotion SET name = '$name' WHERE 
        id = $id";

        mysqli_query($this->Connect(), $update);

        header('location:showPromo.php');
    }

    // search promotion
    public function searchPromo($promotion){
        $name = $promotion->getName();

        $search = "SELECT * FROM promotion WHERE
        name LIKE '%$name%' ";

        return mysqli_query($this->Connect(), $search);
    }
}
?>