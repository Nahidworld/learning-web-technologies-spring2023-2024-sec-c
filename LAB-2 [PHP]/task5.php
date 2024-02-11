<?php
    //Write a PHP script to print all the odd numbers between 10 to 100 
    //Hints: use LOOP & IF-ELSE
    echo "Odd numbers: ";
    for ($i = 10; $i <= 100; $i=$i+1){
        if($i%2!=0){
            echo "$i ";
            continue;
        }
    }
?>