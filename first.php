<?php

class Plumber{
    public $name;
    public $photo;
    public $rate;

    public function __construct($name, $photo)
    {
        $this->name = $name;
        $this->photo = $photo;
    }

}

$array = [
    new Plumber('AberPlumber','img/plumber.jpg'),
    new Plumber('Plumber 01','img/plumber.jpg'),
    new Plumber('Plumber 02','img/plumber.jpg'),
    new Plumber('Plumber 03','img/plumber.jpg'),
    new Plumber('Plumber 04','img/plumber.jpg'),
    new Plumber('Plumber 05','img/plumber.jpg'),
    new Plumber('Plumber 06','img/plumber.jpg'),
    new Plumber('Plumber 07','img/plumber.jpg')
];

define("PLUMBERS", sizeof($array) - 1);