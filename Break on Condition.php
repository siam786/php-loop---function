<?php
//Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
//Fibonacci number is greater than 100, break out of the loop using the break statement.

$first = 0;
$second = 1;
echo "The first 10 Fibonacci numbers are.\n";

for ($i = 0; $i < 100; $i++) {
    echo $first . " ";

    //calculate the Fibonacci series
    $next = $first + $second;
    if ($next > 100) {
        break;
    }
    $first = $second;
    $second = $next;
}