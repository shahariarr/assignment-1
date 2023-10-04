<?php
function printFibonacci($n)
{
    $fibonacciArray = array();

    if ($n >= 1) {
        $fibonacciArray[] = 0;
    }

    if ($n >= 2) {
        $fibonacciArray[] = 1;
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacciArray[] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
    }

  
    echo implode(', ', $fibonacciArray); // implode() joins array elements with a string
}

 
printFibonacci(15); // prints the first 15 Fibonacci numbers , calling the function
?>
