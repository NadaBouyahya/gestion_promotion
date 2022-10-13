<?php

class Connection{
    private $host;
    private $user;
    private $password;
    private $DB;

    protected function Connect(){
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->DB = "promoTEST";

        $conn = new mysqli($this->host, $this->user, $this->password, $this->DB);
        return $conn;
    }
}

?>