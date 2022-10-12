<?php
    class Connection{
        private $host = "localhost";
        private $user ="root";
        private $password ="";
        private $db = "projet1";
        private $conn;

        function __construct() {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);
            return $this->conn;
        }
    }
?>