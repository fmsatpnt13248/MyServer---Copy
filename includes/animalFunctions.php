<?php

    //Add a class
    include("animals.php");

	$animal_definition = function ( $type ) {

		if( $type == 1 ) {

			return "cat";

		} elseif( $type == 2 ) {

			return "dog";

		} else {

			return "cow";

		}

	};

    //Doesn't work
	function animals_do( $type, $sentence) {

		echo $$type->name . ' ', $$type->actions[rand(0, 2)] . ': ', $sentence;

	}

	animals_do( type: $animal_definition( 1 ), sentence: "Dogs suck" );

    echo "<br>";

    //Works
    $type = $animal_definition( 1 );
    $sentence = "Dogs suck";
	echo $$type->name . ' ', $$type->actions[rand(0, 2)] . ': ', $sentence;