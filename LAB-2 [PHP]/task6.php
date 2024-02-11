<?php
    //Write a PHP script to search an element from an array 
    //Hints: use LOOP, IF-ELSE & ARRAY

    $arr = [1,2,3,4,5,6,7,8,9,10];
    $x = 10;
    $found = false;
    for($i=0; $i < sizeof($arr); $i++){
        if($arr[$i]==$x){
            $found = true;
            break;
        }
    }
    if($found == true){
        echo "$x is found";
    }else{
        echo "Not Found!";
    }
?>