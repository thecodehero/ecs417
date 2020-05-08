<?php
    include('connection.php');

    $commentID = $_POST["commentID"];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){ //This is to ensure that the INSERT query does not run
        //EVERY TIME the page is loaded, even if no form was submitted.
            $sql = "DELETE FROM COMMENTS WHERE commentID='$commentID'"; //delete row of comment in table.
            if ($conn->query($sql) === TRUE) {   
               header('Location: viewBlog.php');       
            } 
            else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
            }
?>