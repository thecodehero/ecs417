<?php 
    session_start();

    include 'connection.php';    

    //$id = $_SESSION['ID'];
    //put input in variables
    $email = $_SESSION['email'];
    $title = $_POST["title"];
    $post = $_POST["content"];    
    $postDateTime = date("j F Y H:i") . " UTC";   
    $month = date("F");
    $id = "SELECT ID FROM USERS WHERE USERS.email='$email'";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){ //This is to ensure that the INSERT query does not run
        //EVERY TIME the page is loaded, even if no form was submitted.
            $sql = "INSERT INTO BLOGENTRIES (title, content, postdatetime, postMonth) 
            VALUES ('$title', '$post', '$postDateTime', '$month')";
            if ($conn->query($sql) === TRUE) {   
                header('Location: viewBlog.php');       
            } 
            else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
            }
?>