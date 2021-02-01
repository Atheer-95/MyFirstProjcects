<?php

$criminals = array(

    array(

        'name'=>'John Gamlesk ',
        'age'=>'50',
        'depiction'=>'Tall, white, with white hair, and blue eyes ',
        'id'=>1
    ),

    array(

        'name'=>'Fusaku Sano',
        'age'=>'29',
        'depiction'=>'Short, black hair of medium length, Asian features  ',
        'state'=>false,
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
        'depiction'=>'Short, white skin, meduim street hair  ',
        'state'=>false,
        'id'=>4
    ),

    array(

        'name'=>'Cameron Janice Hook',
        'age'=>'49',
        'depiction'=>'Short, white complexion, green eye ',
        'id'=>5
    ),

    array(

        'name'=>'Kenneth Barnella',
        'age'=>'60',
        'depiction'=>'Short, white skin, white hair',
        'state'=>false,
        'id'=>6
    ),

    array(

        'name'=>'Jenny',
        'age'=>'27',
        'depiction'=>'Brown hair, long, white skin, black eye ',
        'id'=>7
    ),

    array(

        'name'=>'David',
        'age'=>'39',
        'depiction'=>'Tall, white skin, short black hair, glasses',
        'state'=>false,
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
        'state'=>false,
        'id'=>10
    )



    );


    $criminals_state = array(
    
    array(

        'name'=>'John Gamlesk ',
        'state' => true,
        'id'=>1

        
    ),

    array(

        'name'=>'Michael Devlin',
        'state' => true,
        'id'=>3
    ),
    array(

        'name'=>'Cameron Janice Hook',
        'state' => true,
        'id'=>5
    ),


    array(

        'name'=>'Jenny',
        'state' => true,
        'id'=>7
    ),


    array(

        'name'=>'Josef Wirtzel',
        'state' => true,
        'id'=>9
    )

);

    function GetCrimInfo(){
        
        global $criminals;
        global $criminals_state;

    foreach ($criminals as $crim_id=> $crim_serial){


    
        
        
        echo ' Name  :     '.$crim_serial['name'].',  Age   :    '.$crim_serial['age'].'  , The criminal serial number  : '.$crim_serial['id'].'<br>'.'  Depiction   :    '.$crim_serial['depiction'];
            echo '<br>';
            echo '<br>';
        }
    foreach ($criminals_state as $crim_id=> $crim_serial){

        


            $crim_state = $criminals_state;
        
            if ($crim_state){
            
            echo '    Arrested   : '.' The criminal serial number  : '.$crim_serial['id'];
            echo '<br>';

        }
            


    }

    }

    GetCrimInfo();


        

    
    
    
        
    




?>