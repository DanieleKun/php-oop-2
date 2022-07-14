<?php

class Products {

    private $name;
    private $price;
    private $brand;
    private $bar_code;

    public function __construct($name, $price, $brand, $bar_code)
    {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->bar_code = $bar_code;
    }
}