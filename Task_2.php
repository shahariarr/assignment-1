<?php
$numbers =[1,2,3,4,5,6,7,8,9,10];
function odd_numbers($numbers){
    foreach($numbers as $number){
        if($number % 2 != 0){
            echo $number . " "."</br>";
        }
    }
}
odd_numbers($numbers);


//using array_filter function to filter out odd numbers.
// function odd_numbers($numbers){
//     if($numbers % 2 != 0){
//         return $numbers;
//     }
// }

// $odd_number=array_filter($numbers, "odd_numbers");
// print_r($odd_number);
// ?>