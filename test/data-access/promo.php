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

        // show promo list
        function select_promo(){
            $select = "SELECT * FROM promotion";
            return $this->conn->query($select);
        }

        function select_id(){
            $select = "SELECT * FROM promotion 
                WHERE id = '$this->id'
            ";
            return $this->conn->query($select);
        }
           
        // add promo
        function add_promo(){
            $add = "INSERT INTO promotion(name) VALUES ('$this->name') ";
            $this->conn->query($add);
        }

        // delete promo
        function delete_promo(){
            $delete = "DELETE FROM promotion WHERE 
            id = $this->id";
            $this->conn->query($delete);
        }

        // edit Promo
        function edit_promo(){
            $edit = "UPDATE promotion SET name = '$this->name'
            WHERE id = $this->id";
            $this->conn->query($edit);
        }
    }
?>