<?php
    
    // Indexed
    $people = array('Kevin', 'David', 'Chris');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';

    //echo count($cars);
    //print_r($cars);
    //var_dump($cars);

    //echo $people[3];
    //echo $ids[2];
    //echo $cars[4];

    // Associative arrays
    $people = array('Pete' => 35, 'Cecil' => 32, 'Willie' => 37);
    $ids = [22 =>'Pete', 44 => 'Cecil', 63 => 'Willie'];
    //echo $people['Pete'];
    //echo $ids[22];
    $people['James'] = 42;
    //echo $people['James'];
    //print_r($people);
    //var_dump($people);

    //Multi-Dimensional
    $cars = array(
    	array('Honda', 20, 10),
    	array('Toyota', 30, 20),
    	array('Ford', 23, 12)
    );

    echo $cars[1][2];
?>