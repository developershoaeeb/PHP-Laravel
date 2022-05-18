<?php
/**$array_number = [12,34,2,6,78];
// array er dhororn
// Array
// (
//     [0] => 12
//     [1] => 34
//     [2] => 2
//     [3] => 6
//     [4] => 78
// )
// echo "Number of array is " . count($array_number) . "<br>";
// echo "<pre>";
// print_r($array_number);


// prime numbers from this array
//Stap 1: ===========================

foreach($array_number as $key => $value){
    $x = $value;
    echo "The factors of the " . $x . " are: <br/>";
        
        for ($i = 1; $i <= $x; ++$i)
        {
            if ($x % $i == 0)
            {
                echo $i . " <br/> ";
            }
        }
}

//Stap 2 & 3 : ===========================

foreach($array_number as $key => $value){
    
        $MyNum = $value;
        $n = 0;

    for($i = 2; $i < $MyNum; $i++) {
        if($MyNum % $i == 0){
            $n++;
            break;
        }
    }

    if ($n == 0){
    echo $MyNum." is a prime number. <br/>";
    } else {
        continue;
    //   echo $MyNum." is not a prime number. <br/>";
    echo "<br/>";
    }
}





//====================================================
/**Question 02: 
	Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.
    Go to daraz website and pick any 5 products and make your array.
    Must mention Which type of array you have made. */

    // $darazProduct = ['Diapering & Potty ','Mother & Baby ','Feeding ', 'Baby Gear ', 'Clothing & Accessories ' ];
   
    // Array
    // (
    //     [0] => Diapering & Potty 
    //     [1] => Mother & Baby 
    //     [2] => Feeding 
    //     [3] => Baby Gear 
    //     [4] => Clothing & Accessories 
    // )

// echo "<pre>";
// print_r($darazProduct);

//===================================================
/**Question 03: 

		This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 
    Find the maximum value from this array.
    Must use a foreach loop. */

//     $number_value = [0,10,80,67,60,89,91,56,45,30,95,83,99];

// $maximum_number = max($number_value);

//     foreach($number_value as $key => $value){
//         if($value >= $maximum_number){
//             echo $maximum_number;
//             echo "<br/>";
//         }
//     }

// //==============================
//     $number_value = [0,10,80,67,60,89,91,56,45,30,95,83,99];

// $maximum_number = 0;

//     foreach($number_value as $key => $value){
//         if($value > $maximum_number){
//             $maximum_number = $value;
//         }
//     }
//     echo $maximum_number;
//     echo "<br/>";

//============================================================

/**	Question 04: 
 * Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3…. */

// $skip_value = [0,10,80,67,60,89,91,56,45,30,95,83,99];

// // $nums = array(10,20,'5', 30)

//     foreach( $skip_value as $key => $value){
//             if($key == 1 || $key == 3 ) {
//                 continue;
//             }
//                 echo  $value . "<br>";
//         }
