<?php    
    include('connection.php');

    $postID = $_POST["postID"];

    //delete comment
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){ //This is to ensure that the INSERT query does not run
        //EVERY TIME the page is loaded, even if no form was submitted.        
        $sql = "DELETE FROM COMMENTS WHERE postID='$postID'"; //delete row of post in table.
            if ($conn->query($sql) === TRUE) {   
                    //delete post.
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){ //This is to ensure that the INSERT query does not run
                        //EVERY TIME the page is loaded, even if no form was submitted.        
                        $sql = "DELETE FROM BLOGENTRIES WHERE postID='$postID'"; //delete row of post in table.
                            if ($conn->query($sql) === TRUE) {   
                            header('Location: viewBlog.php');       
                            } 
                            else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            $conn->close();
                    }
            } 
            else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
    }    
    
?>