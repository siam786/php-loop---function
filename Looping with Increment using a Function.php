<?php
//Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
//step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
//should take the arguments like start as 1, end as 20 and step as 2. You must call the
//function to print.
//Also do the same using while loop and do-while loop also.
# PHP function to print even numbers from 1 to 20 using a for loop.
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    echo "\n";
}

# PHP function to print even numbers from 1 to 20 using a while loop.
function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
    echo "\n";
}

# PHP function to print even numbers from 1 to 20 using a do-while loop.
function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
    echo "\n";
}

# Calling the functions to print even numbers.
echo "Using for loop: ";

printEvenNumbersFor(2, 20, 2);


echo "Using while loop: ";
printEvenNumbersWhile(2, 20, 2);


echo "Using do-while loop: ";
printEvenNumbersDoWhile(2, 20, 2);