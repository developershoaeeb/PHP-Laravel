<?php
// Class...
// Property...
// Method(OOP)/ Function (Procedural)...
// this keyword for using properties....
// Object...
// access Properties & methods from class using object ....

Class Calculation {
    // Propertes.......
    public $numberOne = 50;
    public $numberTwo = 82;
    // Constructor..............
    // function __construct($one, $two){
    function __construct($one = 10, $two = 3){
            $this->numberOne = $one;
            $this->numberTwo = $two;
    }
// Method...........
    function sum() {
        $result = $this->numberOne + $this->numberTwo;
        return $result;
    }
    function sub() {
        $result = $this->numberOne - $this->numberTwo;
        return $result;
    }
    function totalResult() {
        $result = $this->sum() + $this->sub();
        return $result;
    }
}
// $obj = new Calculation();
// $obj = new Calculation(100, 200);
// echo $obj->sum(); echo '<br>';

// $obj2 = new Calculation(12, 20);
// echo $obj2->sum(); echo '<br>';

// $obj3 = new Calculation(545454, 454524);
// echo $obj3->sum(); echo '<br>';

$objSum = new Calculation();
// $objSum = new Calculation(100, 10);
echo $objSum->sum(); echo '<br>';

$objSub = new Calculation();
echo $objSub->sub(); echo '<br>';

$objTresult = new Calculation(100, 10);
echo $objTresult->totalResult(); echo '<br>';

// echo $obj->sum();
// ............
// $numberOne = 50;
// $numberTwo = 82;

// Procidure of PHP............

// function sum() {
//    $result = $numberOne + $numberTwo;
//    return $result;     
// } 
// echo sum();
?>