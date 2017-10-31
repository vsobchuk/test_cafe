<?php

//plain simple auto loader without any checks ;)
spl_autoload_register(function ($class) {
    $file = __DIR__.'/components/'.$class.'.php';
    if (file_exists($file))
        require $file;

    $file = __DIR__.'/drinks/'.$class.'.php';
    if (file_exists($file))
        require $file;
});

$tea = new DrinkTea;
var_dump($tea->getPrice());

$cofee = new DrinkCofee;
var_dump($cofee->getPrice());

$americano = new DrinkAmericano;
var_dump($americano->getPrice());

$cappuccino = new DrinkCappuccino;
var_dump($cappuccino->getPrice());

