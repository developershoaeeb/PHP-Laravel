<?php
echo "<h3>Question 01</h3>";
//You have purchased some items from a supershop. Purchase product array is given below-
$purchased_products = [
    ['name' => 'banana',  'qty' => 10, 'total_price' => 550],
    ['name' => 'apple',     'qty' => 50,  'total_price' => 1500],
    ['name' => 'orange',  'qty' => 7,    'total_price' => 600],

    ];

$qty = array_column($purchased_products, 'qty');  
$product_qty = ($qty);
echo array_sum($product_qty);

echo "<br/>";

$purchased_items = array_column($purchased_products, 'total_price');
$purchased_items_qty = ($purchased_items);
echo array_sum($purchased_items_qty);




// echo "<h2>Assignment 1 </h2>"; 
// $qty = array_sum(array_column($purchased_products, 'qty'));
// echo "The Total Quantity is " . $qty;
// echo "<br>";
// $total_prc = array_sum(array_column($purchased_products, 'total_price'));
// echo "The Total Amount is " .  $total_prc;
// echo "<hr>";
//=============================================================
echo "<br/>";
echo "<h3>Question 02</h3>";
//You have two array of emails, these are given below-

$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

$given_email = array_diff($first_email_array, $second_email_array);

echo "<pre>";
echo print_r ($given_email);

//====================================================================
echo "<h3>Question 03</h3>";
//Split this given array into chunks 4
$citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

Print_r(array_chunk($citylist, 4));
