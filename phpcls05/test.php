$array_number = [12,34,2,6,78];
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