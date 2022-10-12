<?php
    include 'conn.php';
    class Promo extends Connection{
        public $id;
        public $name;

        function __constract($id, $name) {
            $this->id = $id;
            $this->name = $name;
        }

        function add_promo(){
            $add = "INSERT INTO promotion(name) VALUES ('$this->name') ";
            $this->conn->query($add);
        }
    }
?>