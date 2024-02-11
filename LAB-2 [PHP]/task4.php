<?php
    // Write a PHP script to find the largest number from three given numbers
    //Hints: use IF-ELSE
    $num1 = 5;
    $num2 = 3;
    $num3 = 6;

    if($num1 > $num2){
        if($num1 > $num3){
            echo "$num1 is the largest";
        }
        else{
            echo "$num3 is the largest";
        }
    }else if ($num2 > $num3){
            echo "$num2 is the largest";
        }
    else{
            echo "$num3 is the largest";
        }
?>