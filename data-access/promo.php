<?php
    class Promo {
        //connect database
        private $host = "localhost";
        private $user ="root";
        private $password ="";
        private $db = "projet1";
        private $conn;
        public $id;
        public $name;

    
        function __construct($id, $name) {
            $this->id = $id;
            $this->name = $name;
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        }

        function select_promo(){
            $select = "SELECT * FROM promotion";
            return $this->conn->query($select);
        }

        function add_promo(){
            $add = "INSERT INTO promotion(name) VALUES ('$this->name') ";
            $this->conn->query($add);
        }

        function delete_promo(){
            $delete = "DELETE FROM promotion WHERE 
            id = $this->id";
            $this->conn->query($delete);
        }

    }
?>