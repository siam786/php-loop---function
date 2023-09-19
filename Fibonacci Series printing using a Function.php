<?php
//Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
//this 15 as an argument of a function and use a for loop to generate these numbers and print
//them by calling the function.

function FibonacciSeris($numbers){
    $first=0;
    $second=1;

    echo "The first 15 numbers in the Fibonacci series\n";
    for($i=1;$i<=$numbers;$i++){
        echo $first ." ";
        // Calculate the next Fibonacci number
        $next=$first+$second;
        // Swap values to calculate the next number
        $first=$second;
        $second=$next;

    }
}

FibonacciSeris(15);