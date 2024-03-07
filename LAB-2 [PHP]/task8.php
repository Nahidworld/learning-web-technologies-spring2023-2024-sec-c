<?php
    // the array to declare:
    $array = [
        [1, 2, 3, 'A'],
        [1, 2, 'B', 'C'],
        [1, 'D', 'E', 'F'],
    ];

    // print number triangle:
    echo "Shape 1: <br>";
    for ($i =0; $i<3; $i++){
        for ($j=0; $j<=$i; $j++){
            echo $array[$i][$j]." ";
        }
        echo "<br>";
    }    

    echo "<br>";

    // print Alphabetic triangle:
    echo "Shape 2: <br>";
    for ($i =0; $i<3; $i++){
        for ($j=3-$i; $j<=3; $j++){
            echo $array[$i][$j]. " ";
        }
        echo "<br>";
    } 
    echo "<br>" ;  

?>
