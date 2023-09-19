<?php
$first = 0;
$second = 1;

echo "First 10 Fibonacci numbers:\n";

for ($i = 0; $i < 10; $i++) { // loop 10 times
    if ($i <= 1) { // if $i is less than or equal to 1, $fib is equal to $i
        $fib = $i;
    } else {
        $fib = $first + $second;
        $first = $second; // $first is now equal to $second
        $second = $fib; // $second is now equal to $fib
    }

    echo $fib . " ";

    if ($fib > 100) { // if $fib is greater than 100, break out of loop
        echo "\nFibonacci number exceeds 100. Exiting loop.";
        break;
    }
}






?>
