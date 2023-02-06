<?php

$names = ['Sergei', 'Dimitri', 'Vassiili', 'Masha', 'Andrei', 'Vanja', 'Oleg'];

$sortbylength = array_filter($names, function($name){
    return strlen($name) <= 5;
});

$capslock = array_map(function ($element){
    return strtoupper($element);
}, $names);

var_dump($sortbylength);
var_dump($capslock);