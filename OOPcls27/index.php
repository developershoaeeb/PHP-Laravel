<?php
// Class...
// Property...
// Method(OOP)/ Function (Procedural)...
// this keyword for using properties....
// Object (for creating instace)
// Object...
// access Properties & methods from class using object ....
// Constructor method
// ===========================

// 27 Class
// inheritance
// access modifier(publice, private, protected)
// abstract class and methods
// Polymorphisom (method override, method overload)

class Parentclass {
    public $asset;
    public $screenColor; 
    public $hight;

    // function __construct($asset, $screenColor, $hight) {
    //     $this-> asset       = $asset;
    //     $this-> screenColor = $screenColor;
    //     $this-> hight       = $hight;

    // }
    function __construct($a, $b, $c) {
        $this-> asset       = $a;
        $this-> screenColor = $b;
        $this-> hight       = $c;

    }

    function parentInfo(){
        return $this->asset. '-' . $this->screenColor . '-' . $this->hight; 
    }
}

class ChildClass extends Parentclass {
    public $spouse = 'Momo';
    function childInfo(){
    //    return $this->asset;
    //    return $this->parentInfo();
       return 'this is parent info'. $this->parentInfo().'-----'. $this ->hight . '___' . $this ->spouse ;
    }
}

$screemColorObj = new Parentclass('land', 'white', 68576546);

$childClassObj = new ChildClass('land', 'white', 'child-68576546');
// echo $childClassObj -> childInfo(); 
echo $screemColorObj -> parentInfo() ." <br>"; 
echo $childClassObj -> parentInfo() ." <br>"; 
echo $childClassObj -> childInfo() ; 
