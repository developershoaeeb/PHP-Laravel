
<!DOCTYPE html>
<body>
<!-- Question 01:
		Your client said that he needs a dropdown, which contains all days of the running month. Sometimes we fill up a registration form that, which date of birth. So find out in google // (get number of days in specific month php) and do this assignment using a for loop.
    Day quantity is not equal for every month. Like as - february - 28, March - 31, april - 30

    So days of running month should dynamic // (by php build in function) -->
<?php
    $running_day = date('d');
    $last_day = date('t');
    // echo $last_month;  
    for($i = $running_day; $i <= $last_day; $i++){
        echo $i . "<br>";
    }
?>
<!-- Question 02: 
	If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.
    You have to rotate from 1 to 100.
    Your output message should like that, “3 is a odd number”
    Not need to print even number -->

<?php
for($i = 1 ; $i < 100 ; $i+=2){
    echo $i . "<br/>";
}

echo "<br/>";

// অথবা 

for( $i = 1; $i <= 100; $i++){
    if($i % 2 != 0){ 
        echo $i. '<br>';
}
}

?>
<!-- Question 03: 
Factorial - I think everyone knows the word. Factorial of 4 is given below:
4! = 4*3*2*1 = 24
6! = 6*5*4*3*2*1 = 720  
So let’s calculate the factorial of 7. -->
<?php  
    $number = 7;  
    $factorial = 1;  
    for ($x=$number; $x>=1; $x--){  
      $factorial = $factorial * $x;  
    }  
    echo "Factorial of $number is $factorial";  
    ?>  
<!-- Question 04: 
Print out from 100 - 1 using a while loop. 
You must use decrement operator -->

<?php
echo "<br>";
$number = 100;
while($number >=1){
    echo  $number;
    echo "<br>";
    $number--;
}
?>
<!-- Question 05: 
		You have an array of your purchased product items. 
  //  ['apple', 'orange', 'banana', 'mango']
    Show all products as a table list.
    Output should like that: “sl- 1 and product - apple” -->

<?php
$product = ['apple', 'orange', 'banana', 'mango'];

    foreach ($product as $key => $n){
    echo  'sl- ' . ++$key . ' and ' .' product -  ' . $n; 
    echo "<br>";
}
?>
</body>
</html>


<?php
// for($i = 1 ; $i <= 100 ; $i++){
//     echo $i . " - ";
// }

// Prints the day
// echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
// echo date("l jS \of F Y h:i:s A") . "<br>";

// // Prints October 3, 1975 was on a Friday
// echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";

// // Use a constant in the format parameter
// echo date(DATE_RFC822) . "<br>";

// // prints something like: 1975-10-03T00:00:00+00:00
// echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));

// $running_year = date('Y');
// $running_day = date('D');
// echo $running_day;

// Question 01:

// $running_day = date('d');
// $last_day = date('t');
// // echo $last_month;

// for($i = $running_day; $i <= $last_day; $i++){
//     echo $i . "<br>";
// }
// echo date ( "<br>" . "l jS \of F Y h:i:s A") . "<br>";
// echo "<br><br>";

//Question 02: 
//===================

// for($i = 1 ; $i <= 100 ; $i+=2){
//     echo $i . " <br/> ";
// }
//===============
// for($i = 1 ; $i <= 110 ; $i++){
//     if($i % 2){
//     echo $i . "<br/>";
//     }
// }
//=======================
// for( $i = 1; $i <= 100; $i++){
//     if($i % 2 != 0){ 
//         echo $i. '<br/>';
// }
// }
// //================
// // $i = 1;
// // while( $i <= 100){
// //     if($i % 2 ){ 
// //         echo $i. '-';
// // }
// //  $i++;
// // }

// //==============
?>
