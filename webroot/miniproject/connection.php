<?php
//connect to mysql database start
    //$dbServername = "localhost";
    //$dbUsername = "root";
    //$dbPassword = "";
    //$dbName = "ecs417";

    //$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);  
    //connect to sql database end


    $dbhost = getenv("MYSQL_SERVICE_HOST"); 
    $dbport = getenv("MYSQL_SERVICE_PORT"); 
    $dbuser = getenv("DATABASE_USER"); 
    $dbpwd = getenv("DATABASE_PASSWORD"); 
    $dbname = getenv("DATABASE_NAME"); 
// Creates connection 
 $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname); 
// Checks connection 

if ($conn->connect_error) {     
    die("Connection failed: " . $conn->connect_error); 
 } 
?>