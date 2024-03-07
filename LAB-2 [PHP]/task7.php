<?php
    //Print the following shapes
    // Hints: use NESTED LOOP
   
    
    
    
    // For Star pattern:
    // *
    // * *
    // * * *
    for ($i =1; $i <= 3; $i++)
    {
        for ($j = 1; $j <= $i; $j++){
            echo "x";
            if ($j < $i){
                echo " ";
            }
        }
        print "<br>";
    }

    //For number Pattern:
    // 1 2 3
    // 12
    // 1
    for ($i=3; $i<=1; $i--){
        for ($j=1; $j<=$i ;$j++){
            echo $j;
            if ($j <$i){
                echo " ";
            }
        }
        print "<br>";
    }

    //For Alphabetic triangle:
    $char ='A';
    //$count = 1;
    for ($i =1; $i<=3; $i++){
        $count =1;
        for ($j=1; $j <= $i; $j++){
            echo $char++;
            if($count<3){
                echo " ";
                $count++;
            }
        }
        echo "<br>";
    }


    
    




?>