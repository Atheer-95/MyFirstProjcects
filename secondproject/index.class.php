<?php


include_once "person.class.php";
include_once "enemy.class.php";
include_once "warrior.class.php";

$warrior = new Warrior("HERO",300,400);
$villain = new Enemy("VILLAIN",400,300);

$warrior-> target($villain);
echo "<br>";
$villain->setRun(true);

if ($villain->getRun()){ echo " VILLAIN run away , There is no fighting "; }
else{
                
    echo $warrior -> fight($villain);
}


?>