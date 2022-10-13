<?php 
class Promotion{
    private $id;
    private $name;


    public function getID(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }


    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

}



?>