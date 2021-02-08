<?php
include_once "person.class.php";

class Enemy extends Person{

    private $escap;



    function __construct($name,$power,$force){
        parent :: __construct($name,$power,$force);
    }


    function setRun($escap){
        switch($escap){
            case true:
                $this->escap=$escap;
            break;

            default:
            $this->escap=false;
        break;
        }
    }

    function getRun(){
        return  "{$this->escap}";

    }
}


?>