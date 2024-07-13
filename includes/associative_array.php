<?php 

    echo "<br>";
    
    $associative_multilayered_array_example = [

        [
            'name' => 'cat',
            'action' => 'meow',
            'speed' => 'extra slow'
        ],

        [
            'name' => 'dog',
            'action' => 'woof',
            'speed' => 'fast'
        ],

        [
            'name' => 'horse',
            'action' => 'run',
            'speed' => 'very fast'
        ]

    ];

    //Length reduction
    $array = $associative_multilayered_array_example;

    $array_element = 0;
    echo $array[$array_element]['name'] . " ", $array[$array_element]['action'] . "s ", "and moves at speed: " . $array[$array_element]['speed'];