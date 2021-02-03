<?php

$criminals = array(

    array(

        'name'=>'John Gamlesk ',
        'age'=>'50',
        'depiction'=>'Tall, white-skinned, with white hair, and blue eyes ',
        'id'=>1
    ),

    array(

        'name'=>'Fusaku Sano',
        'age'=>'29',
        'depiction'=>'Short, black hair of medium length, Asian features  ',
        'id'=>2
    ),
    array(

        'name'=>'Michael Devlin',
        'age'=>'30',
        'depiction'=>'Tall, fat, black hair, blue eyes ',
        'id'=>3
    ),
    array(

        'name'=>'Vgang Priklopil ',
        'age'=>'34',
        'depiction'=>'Short, white-skinned, meduim street hair  ',
        'id'=>4
    ),

    array(

        'name'=>'Cameron Janice Hook',
        'age'=>'49',
        'depiction'=>'Short, white-skinned, green eye ',
        'id'=>5
    ),

    array(

        'name'=>'Kenneth Barnella',
        'age'=>'60',
        'depiction'=>'Short, white-skinned, white hair',
        'id'=>6
    ),

    array(

        'name'=>'Jenny',
        'age'=>'27',
        'depiction'=>'Brown hair, long, white-skinned, black eye ',
        'id'=>7
    ),

    array(

        'name'=>'David',
        'age'=>'39',
        'depiction'=>'Tall, white-skinned, short black hair, glasses',
        'id'=>8
    ),

    array(

        'name'=>'Josef Wirtzel',
        'age'=>'77',
        'depiction'=>'Short, white-skinned, white hair, wrinkled complexion ',
        'id'=>9
    ),

    array(

        'name'=>'Matthew Mancuso',
        'age'=>'37',
        'depiction'=>'Long, white-skinned, blond hair, long beard',
        'id'=>10
    )



    );


    $criminals_state = array(
    
    array(
        'state'=> true,
        'id'=>1

        
    ),

    array(

        'state'=> true,
        'id'=>3
    ),
    array(

        'state'=> true,
        'id'=>5
    ),


    array(

        'state'=> true,
        'id'=>7
    ),


    array(

        'state'=> true,
        'id'=>9
    )

);




$c_serial= $criminals[8]['id'];
$c_state =$criminals_state[4]['id'];

   function GetCrimInfo(){
        
        global $criminals;
        global $c_serial;
        global $c_state;

       

            if($c_serial && $criminals ){
                echo $c_serial." found in the black list";
                echo "<br>";

                
            }else{
                echo "not found";
                echo "<br>";

            }
            if($c_serial == $c_state){
                echo " , Arrested ";
                echo "<br>";
            }else{
                echo " , not Arrested";
                echo "<br>";
            }



   }   

GetCrimInfo();

?>