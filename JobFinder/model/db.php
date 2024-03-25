<?php
    
    

    
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "job";

    function dbConnect(){
        global $db_host;
        global $db_user;
        global $db_pass;
        global $db_name;

        //connection
        $con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
        return $con;
    }     
?>