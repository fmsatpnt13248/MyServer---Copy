<?php
    class Animals {

        var $name;
        var $actions = [];
        
    }

    $cat = new Animals();

    $cat->name = "Cat";
    $cat->actions = ["says", "meows", "purrs"];

    $dog = new Animals();

    $dog->name = "Dog";
    $dog->actions = ["says", "woofs", "scoffs"];

    $cow = new Animals();

    $cow->name = "Cow";
    $cow->actions = ["says", "moos", "whispers"];