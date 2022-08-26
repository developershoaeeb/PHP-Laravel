<?php
// 2. access modifier(publice, private, protected)
// publice, protected all are accessible from own class

class Fruits {
    // public $name = 'appale';
    // private $name = 'appale'; // bahir theke access kora jaina
    protected $name = 'appale'; // bahir theke access kora jaina
    public $price = 200;

    function fruitDetails() {
        return $this->name;
    }
}

$fruiteobj = new Fruits ();
// echo $fruiteobj -> name; 
echo $fruiteobj -> fruitDetails();