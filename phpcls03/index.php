<?php
	$fan_status = true;

	if(!$fan_status) {
		Echo "Fan is on";
} else {

	Echo "Fan is off";

}

/**Let’s make a result grade calculator…

Rishita’s subject marks: SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.

Result Calculation formula: Sum all subjects marks and divided by total subject quantity. 

From this given formula, you will get a mark. Show the Grade message by the mark.
A+ = 80 - 100 
A   = 70 - 79
A-  = 60 - 69
B   = 50 - 59
C   = 40 - 49
F   = 01 - 39 

    Firstly you have to calculate the average mark of Rishita.
    Secondly you have to show the grade message (Like as: “You got A+”) by following this grading range.
*/


 $subjectA = 75;
 $subjectB = 80;
 $subjectC = 65;
 $subjectD = 90;

$totaMark = $subjectA + $subjectB + $subjectC + $subjectD; 
//echo "$totaMark"; 


$AvaregMark = $totaMark / 4; 
// echo "$AvaregMark"; 

 if ( $AvaregMark >= 80 && $AvaregMark <=100){
    echo "You got A+";
 }elseif ($AvaregMark >= 70 && $AvaregMark < 80){
        echo "You got A";
 }elseif ($AvaregMark >= 60 && $AvaregMark <=69){
        echo "You got A-";
 }elseif ($AvaregMark >= 50 && $AvaregMark < 60){
        echo "You got B";
 }elseif ($AvaregMark >= 40 && $AvaregMark < 50){
        echo "You got C";
 }elseif ($AvaregMark >= 33 && $AvaregMark < 40){
        echo "You got D";
 }elseif ($AvaregMark < 33){
        echo "You got F<br>";
 }

 echo '<br/>==================== <br/>';

// অথবা 

switch ($AvaregMark) {
    case ($AvaregMark >= 80 && $AvaregMark <=100):
    echo " You got A+";
    break;
    case ($AvaregMark >= 70 && $AvaregMark <80):
    echo " You got A";
    break;
    case ($AvaregMark >= 60 && $AvaregMark <=69):
    echo " You got A-";
    break;
    default:
    echo "You got F";
    }

echo '<br/>';

?>

    <?php

/**Question 02: 
Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight. 
When you click on the power/start button, your bike takes a start, 
When you click stop, your bike takes a stop, 
When you press the break, your bike take break, 
when you give the gear, your bike move faster and faster, 
when you press the signal button, your bike shows a signal light.
When you press the headlight button, your bike’s headlight will start.
    Solve this game using Switch case and submit it on github. */

// start, stop, break, gear, button, headlight
$bike = "stop";

switch($bike){
    case "start":
        echo "Bike Start";
        break;
    case "stop":
        echo "Bike Stop";
        break;
    case "break":
        echo "Bike Break";
        break;
    case "gear":
        echo "Bike Moves Faster and Faster";
        break;
    case "button":
        echo "bike shows a signal light";
        break;
    case "headlight ":
        echo "bike’s headlight will start";
}




    // $AvaregMark = 79.999999999999999; 
    // if ( $AvaregMark >= 80 && $AvaregMark <=100){
    //    echo "Your great is A+ <br>";
    // }elseif ( $AvaregMark <= 80 ){
    //     echo "Your great is B <br>";
    // }
    ?>
    <?php
    // $AvaregMark = 79.999999999999992; 
    // if ( $AvaregMark >= 80 && $AvaregMark <=100){
    //    echo "Your great is A+";
    // }elseif ( $AvaregMark <= 80){
    //     echo "Your great is B";
    // }
    // echo "<br> <br>";
    ?>
    
    <?php
    // $product_name = 'Pen'; 

    // $total_price = 10 ; 
    // $another_persone_price - 10;


    //$total_price = $another_persone_price;
    //$total_price = $total_price + $another_persone_price; 

    //$total_price += $another_persone_price;

// If else
// $have_money = 700;

//     if($have_money > 650){
//         echo "Dhakai pousabe";
//     }else{
//         echo "sorry";
//     }
// === . !==
    // $haveMoney = '650'; 

    // if($haveMone y === 650 ){
    //     echo "Go";
    // }else{
    //     echo " No ";
    // }

    ?>

<?php  

$num = 20; 

while ($num < 12) { 

    $num += 2; 

    echo $num . "\n"; 

} 

?>