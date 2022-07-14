<?php

class User
{
    public $name;
    public $surname;
    public $email;
    public $address;
    public $login = false;
    
    public function __construct($name, $surname,$email, $address, $login)
    {
       $this->name = $name;
       $this->surname = $surname;
       $this->email = $email;
       $this->address = $address;
       $this->login = $login;
    }
}