<?php 
class Kennel extends Product{

    private $size;

    public function __construct($name, $price, $brand, $bar_code, $size){

        parent::__construct($name, $price, $brand, $bar_code);

        $this->size = $size;
        
    }
}