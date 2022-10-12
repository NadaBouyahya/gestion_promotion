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

        //
        function __construct($id, $name) {
            $this->id = $id;
            $this->name = $name;
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        }

        function add_promo(){
            $add = "INSERT INTO promotion(name) VALUES ('$this->name') ";
            $this->conn->query($add);
        }
    }
?>