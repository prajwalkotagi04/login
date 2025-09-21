<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "login";

    $con = new mysqli($host, $username, $password, $db);

    if(!$con){
        echo "Failed to Connect db";
    }
   
?>