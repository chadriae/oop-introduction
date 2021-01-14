<?php

require 'Beer.php';

class Beverages
{
    public $color, $price, $temperature;

    public function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color          = $color;
        $this->price          = $price;
        $this->temperature    = $temperature;
    }

    function getInfo()
    {
        echo '"This beverage is ' . $this->temperature . ' and ' . $this->color . '"';
        echo '<br>';
    }
}
