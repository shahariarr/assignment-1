<?php
function printEvenNumbersWhile($start, $end, $step) // function that prints even numbers in a given range
{
    $i = $start;
    while ($i <= $end) { // while $i is less than or equal to $end
        if ($i % 2 === 0) { // if $i is divisible by 2, print $i
            echo $i . " ";
        }
        $i += $step; // increment $i by $step
    }
}

// Call the function
printEvenNumbersWhile(1, 20, 2); // prints even numbers from 1 to 20, incrementing by 2
?>
