<?php 
class Food extends Product {

    private $expiration_date;

    public function __construct($name, $price, $brand, $bar_code, $expiration_date){

        parent::__construct($name, $price, $brand, $bar_code);

        $this->expiration_date = $expiration_date;
        
    }
}