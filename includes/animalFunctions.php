<?php

    //Add a class
    include("animals.php");

	//Decide which Animal object is used
	$animal_definition = function ( $type ) {

		if( $type == 1 ) {

			return "cat";

		} elseif( $type == 2 ) {

			return "dog";

		} else {

			return "cow";

		}

	};

    //Doesn't work, variables should have been assigned in the function arguments
	function animals_do( $type, $sentence) {

		echo $$type->name . ' ', $$type->actions[rand(0, 2)] . ': ', $sentence . "<br>"; //The same as the second

	}
	animals_do( type: $animal_definition( 1 ), sentence: "Dogs suck" );

    //Works, manual var assignment
    $type = $animal_definition( 1 );
    $sentence = "Dogs suck";
	echo $$type->name . ' ', $$type->actions[rand(0, 2)] . ': ', $sentence . "<br>"; //The same as the first