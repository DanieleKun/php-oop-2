<?php 
class Toys extends Products {

    private $material;

    public function __construct($name, $price, $brand, $bar_code, $material){

        parent::__construct($name, $price, $brand, $bar_code);

        $this->material = $material;
        
    }
}