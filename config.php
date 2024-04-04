<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ajaxcrudoperation";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        echo("Connection Failed".$conn->errno);
    }else{
        // echo("Connected Successfully!");
    }
    

?>