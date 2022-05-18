<?php

//Break
/**for($i=0; $i < 10 ; $i++){
    if($i == 5){
        break;
    }
    echo " My result is {$i} <br/>";
}*/

//continue  skip
// $nums = array(10,20,'5', 30)

// for($i = 0 ; $i<10 ; $i++){
//     if($i == 5){continue;}
//     echo " My result is {$i} <br/>";
// }
// array likhar niom //index array
//1
// $fruits = array('appale <br/>','orenge <br/>','banana<br/>'); 
//2
// $fruits = ['appale','orenge','banana'];

// var_dump($fruits);

// array(3) { 
//     [0]=> string(6) "appale" 
//     [1]=> string(6) "orenge" 
//     [2]=> string(6) "banana" 
// }
//3
// $fruits[0] = 'apple';
// $fruits[2] = 'orenge';
// $fruits[3] = 'banana';

// var_dump($fruits);
// echo "<pre>";
// print_r($fruits);

// echo $fruits[0];
// echo $fruits[1];
// echo $fruits[2];

// foreach ($fruits as $index => $singlevalu){
//     echo $fruits[$index];
// }
//অথবা 
// foreach ($fruits as $index => $singlevalu){
//     echo $singlevalu;
// }
//Associative array

// $student_info = ['Shoaeeb', true, 'Frelanching'];
// $student_info = [ 
//     'Name' =>  'Shoaeeb ', 
//     'status' => true , 
//     'Occapation' => ' Frelanching'
// ];
// Array
// (
//     [Name] => Shoaeeb
//     [status] => 1
//     [Occapation] => Frelanching
// )


// echo "<pre>";
// print_r($student_info);

// foreach($student_info as $key => $value){
//     echo "This is {$key} : {$value}";
//     echo "<br/>";
// }

// ['Name' =>'Shoaeeb ', 'status' => true ,'Occapation' =>' Frelanching']
// ['Name' =>'Shoaeeb ', 'status' => true ,'Occapation' =>' Frelanching']
// ['Name' =>'Shoaeeb ', 'status' => true ,'Occapation' =>' Frelanching']
// $students_info = [
//     ['Name' =>'Shoaeeb ', 'status' => true ,'Occapation' =>' Frelanching'],
//     ['Name' =>'Shoaeeb ', 'status' => false ,'Occapation' =>' Frelanching'],
//     ['Name' =>'Shoaeeb ', 'status' => false ,'Occapation' =>' Frelanching'],
// ];
// echo "<pre>";
// print_r($students_info);

/**Question 03: 

		This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 
    Find the maximum value from this array.
    Must use a foreach loop. */

//     $number_value = [0,10,80,67,60,89,91,56,45,30,95,83,99];

// //  $number_value = 0,10,80,67,60,89,91,56,45,30,95,83,99;

// $maximum_number = max($number_value);

    
//     foreach($number_value as $key => $value){
//         if($value >= $maximum_number){
//             echo $maximum_number;
//         }else{ echo " hsfhsfh <br/>";}
//     }

/**	Question 04: 
 * Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3…. */

 $skip_value = [0,10,80,67,60,89,91,56,45,30,95,83,99];

// $nums = array(10,20,'5', 30)

    foreach( $skip_value as $key => $value){
            if($key == 1 || $key == 3 ) {
                continue;
            }
                echo  $value . "<br>";
        }

/**Question 02: 

	Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.

    Go to daraz website and pick any 5 products and make your array.

    Must mention Which type of array you have made. */

    $darazProduct = ['Diapering & Potty ','Mother & Baby ','Feeding ', 'Baby Gear ', 'Clothing & Accessories ' ];
   
    Array
    (
        [0] => Diapering & Potty 
        [1] => Mother & Baby 
        [2] => Feeding 
        [3] => Baby Gear 
        [4] => Clothing & Accessories 
    )

echo "<pre>";
print_r($darazProduct);

