<?php
    //Simple Array
    $numbers = [1,22,33,77];
    $fruits = array('apple', 'strawberry', 'melon');

    var_dump($numbers);

    //Arrays will always be 0 base so when calling apple here, we put 0
    echo $fruits [0];

    //Associative Array
    $colors = [
        1 => 'red',
        3 => 'yellow',
        6 => 'green'
    ];

    $person = [
        'first_name' => 'Mark',
        'last_name' => 'Adel'
    ];

    echo $colors[3];
    echo $person['last_name'];

