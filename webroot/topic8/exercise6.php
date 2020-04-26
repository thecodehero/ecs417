<?php
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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST["firstName"];
    $sname = $_POST["lastName"];
    $email = $_POST["email"];
    $pass1 = $_POST["password"];

    $sql = "INSERT INTO USERS (firstName, lastName, email, password)
    VALUES ('$fname', '$sname', '$email', '$pass1')";

    if ($conn->query($sql) === TRUE) {  
        echo "Registration successful";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

