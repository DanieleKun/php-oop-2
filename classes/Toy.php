<?php 
class Toy extends Product {

    private $material;

    public function __construct($name, $price, $brand, $bar_code, $material){

        parent::__construct($name, $price, $brand, $bar_code);

        $this->material = $material;
        
    }
}