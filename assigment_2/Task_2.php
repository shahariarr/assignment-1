<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 === 0) { // if $i is divisible by 5, continue to next iteration
        continue; 
    }
    echo $i . "\n";
}
?>