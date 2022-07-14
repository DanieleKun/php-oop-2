<?php 
class Kennels extends Products {

    private $size;

    public function __construct($name, $price, $brand, $bar_code, $size){

        parent::__construct($name, $price, $brand, $bar_code);

        $this->size = $size;
        
    }
}