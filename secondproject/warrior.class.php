<?php

include_once "person.class.php";
include_once "enemy.class.php";

class Warrior extends Person {


    function __construct($name,$power,$force){
        parent :: __construct($name,$power,$force);
    }

    public function target($target){
        
        echo "i chose to fight {$target->name} ";


    }

    public function fight($enemy){
        
        
                        
            while(true) {
    
                        $enemy->force -= $this->power;
                                
                        if($enemy->force <= 0){return "The fighter {$this->name} win !";}
                                
                        $this->force -= $enemy->power;
                                
                        if ($this->force <= 0){return "The fighter {$enemy->name} win ! ";}
                    } 
                                    

                        
                    
                    

    }
}




?>



