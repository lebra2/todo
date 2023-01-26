<?php

$names = ['Mina', 'makupakub', 'nimeke', 'ema', 'abraham', 'teletupsu', 'kartul'];

$lessthanfive = array_filter($names, function($name){
    return strlen($name) <= 5;
});

function upper($element){
    return strtoupper($element);
}

$caps = array_map('upper', $names);

var_dump($lessthanfive);
var_dump($caps);