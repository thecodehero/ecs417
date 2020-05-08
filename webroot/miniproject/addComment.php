<?php
    session_start();
    include "connection.php"; //include php code to connect to sql database

   

    //$query = "SELECT * FROM blog_comments WHERE blogpost_id='{$postId}';
    //$result = mysqli_query($connection,$query);
   $alert = '<script type=\"text/javascript\">
   window.alert("Please login to add comments")
   </script>';

    if($_SERVER['REQUEST_METHOD'] == 'POST') { //This is to ensure that the INSERT query does not run
        //EVERY TIME the page is loaded, even if no form was submitted.
        if(isset(($_SESSION['login']))) { //Check is logged in, as user can only add comment if logged in.
            $message = $_POST["message"];
            $firstName =  $_SESSION['firstName'];
            $lastName = $_SESSION['lastName'];
            $postID = $_POST["commentPost"];
            $sql = "INSERT INTO COMMENTS (firstName,lastName,message,postID) 
            VALUES ('$firstName', '$lastName', '$message','$postID')";
            if ($conn->query($sql) === TRUE) {   
                header('Location: viewBlog.php');       
            } 
            else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location: viewBlog.php");
            }
            $conn->close();
            }
        }        
    
?>
