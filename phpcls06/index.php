<?php
$given_array = [12,13,14, 15,16];
if (count($given_array) > 0) {
    foreach ($given_array as $key => $value){
        //echo $value;
    }
}

// foreach ($given_array as $key => $value){
//     echo $value;
// }

// max and min value
//$given_array = [0, -1, -50, -230, 12,13,14, 15,16,12,120,130.1,130];
//echo max($given_array);
//echo min($given_array);
//in_array
//$given_array = [-30, -0, -1, -50, -230, 12,13,14, 15,16,12,120,130.1,130];

//echo in_array('-0', $given_array);  // 1/0

// if (in_array('34534', $given_array)) {
//     echo "paici";
// } else {
//     echo "paini";
// }

// $a = '5';
// $b = 5; 
// echo $a + $b; 

// $given_array = [-30,-0,-1,50,-230,12,13,14, 15,16,12,120,130.1,130];

//echo array_search(50,$given_array);// Index return kore

// $given_array = [-30,-0,-1,50,-230,12,13,14, 15,16,12,120,130.1,130];

// array_pop($given_array); //for pickup last element

// echo "<pre>";
// print_r($given_array); //for pickup last element
// echo "<pre/>";

// $given_array = [-30,-0,-1,50,-230,12,13,14,15,16,12,120,130.1,130];
// // echo "<pre>";
// array_push($given_array, 12,54345,4534,345,43,5,34,5,345); //for add last element

// echo "<pre>";
// print_r ($given_array); //for add last element

// $given_array=[-30,-0,-1,50,-230,12,13,14,15,16,12,120,130.1,130];

// $mergable_array = [500,544];

// $new_array = array_merge($given_array, $mergable_array);
// $new_array = array_merge($mergable_array, $given_array);

// echo "<pre>";
// print_r($new_array);

//slice array

// $given_array=[-30,-0,-1,50,-230,12,13,14,15,16,12,120,130.1,130];

// $new_slice = array_slice($given_array, 7, 6);
// echo "<pre>";
// print_r($new_slice );

// $given_array=[-30,-0,-1,50,-230,12,13,14,15,16,12,120,130.1,130];

// array_splice($given_array, 4, 6);
// echo "<pre>";
// print_r($given_array );


$given_array=[-30,-0,-1,50,-230,12,13,14,15,16,12,120,130.1,130];
$secend_array = [100,20]
$new_defarent_array = array_diff($given_array, $secend_array);
echo "<pre>";
print_r($new_defarent_array);