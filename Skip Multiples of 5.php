<?php
//Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
//loop encounters a multiple of 5, it should skip that number using the continue statement and
//continue to the next iteration.

function CheckNumber(){
    for ($i=1;$i<=50;$i++){
        if($i%5==0)
        echo $i." ";
    }
}

echo (CheckNumber());