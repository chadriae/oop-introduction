<?php
class Beer extends Beverages
{
    var $name;
    var $alcoholpercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholpercentage)
    {
        parent::__construct($color, $price);
        $this->name                 = $name;
        $this->alcoholpercentage    = $alcoholpercentage;
    }

    public function getAlcoholpercentage()
    {
        echo $this->alcoholpercentage . "%";
        echo '<br>';
        echo number_format($this->alcoholpercentage, 2) . "%";
        echo '<br>';
    }
}
