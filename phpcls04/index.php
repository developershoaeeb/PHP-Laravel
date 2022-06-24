<?php 

// Oparator: Increment (++) and Decrement (--)
// $a = 10;

// echo 'first' . $a = $a + 1 . '-' . $a; 
// echo 'first' . --$a. '-' . $a; 
// echo 'first' . --$a. '-' . $a; 
// echo $a;

// for($i = 10; $i >=1; $i--) {
//     echo  $i . " ami ar deri kore asobo na ";
//     echo "<br>";
// }

//while loop 
// $i = 10;
// while($i >=1){
//     echo  $i . " ami ar deri kore asobo na ";
//     echo "<br>";
//     $i--;
// }

//Do while 
// $i = 11;
// do {
//     echo  $i . " ami ar deri kore asobo na ";
//     echo "<br>";
//     $i++;
// }while($i <= 15 );

//========================================

$running_year = date('D');
$running_year = date('Y');
$running_year = date('M');
// echo $running_year;
//============================
// Prints the day
echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A") . "<br>";

// Prints October 3, 1975 was on a Friday
echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";

// Use a constant in the format parameter
echo date(DATE_RFC822) . "<br>";

// prints something like: 1975-10-03T00:00:00+00:00
echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));
//==============================





// $limitetion = $running_year - 50; 
// echo $limitetion; 
// $initial_year = $running_year - 50; 

// for ( $initial_year; $initial_year <= $running_year ; $initial_year ++){
//     echo $initial_year;
//     echo "<br>"; 
// }

//Foreach

// $product_price = [20, 10, 30, 40, 60 ];
// $product_price = ['20', '10', '30', '40', '60' ];
// var_dump($product_price); 
// array(5) { 
//     [0]=> int(20) 
//     [1]=> int(10) 
//     [2]=> int(30) 
//     [3]=> int(40) 
//     [4]=> int(60) 
// } 
// echo $product_price[0] . "<br>"; 
// echo $product_price[1] . "<br>"; 
// echo $product_price[2] . "<br>"; 
// echo $product_price[3] . "<br>"; 

// foreach ($product_price as $key => $n){
//     echo $key .'-' . $n; 
//     echo "<br>";
// }
// foreach ($product_price as $i => $n){
//     echo ++$i .'-' . $n; 
//     echo "<br>";
// }