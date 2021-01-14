<?php

declare(strict_types=1);

class Beverages
{
    var $color;
    var $price;
    var $temperature = "cold";

    function getInfo()
    {
        echo '"This beverage is ' . $this->temperature . ' and ' . $this->color . '"';
    }
}

$cola = new Beverages();

$cola->color        = 'black';
$cola->price        = 2;

$cola->getInfo();
