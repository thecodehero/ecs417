<html>
<head>
        <link rel="stylesheet" href="reset.css" type="text/css">
        <link rel="stylesheet" href="stylesheet.css" type="text/css"> 
        <script src="blogarchive.js"></script>           
    </head>
<?php    
    
    include 'connection.php';
      
    $loginEmail = $_POST["email"];
    $loginPassword = $_POST["password"];    
        
    $sql = "SELECT * FROM USERS WHERE email='$loginEmail' AND password='$loginPassword'";
    $result = mysqli_query($conn,$sql);
    
    $firstName = mysqli_query($conn,"SELECT firstName FROM USERS WHERE email='$loginEmail'");
    $lastName = mysqli_query($conn,"SELECT lastName FROM USERS WHERE email='$loginEmail'");
    $id = mysqli_query($conn,"SELECT ID FROM USERS WHERE email='$loginEmail'");
    
    

    if(mysqli_num_rows($result) == 1) {
      while($row = mysqli_fetch_assoc($result)) {
         session_start();       
         session_id($id);      
         $_SESSION['firstName']= $row["firstName"];
         $_SESSION['lastName']=  $row["lastName"];
         $_SESSION['email']= "$loginEmail";      
         $_SESSION['login']=true;     
      }      
      header('Location: addPost.html');         
     }
     else {       
        $error = "Login failed! Invalid email or password";
        echo  "<h3>$error</h3><br>";     
        echo "<button class=\"submit\" id=\"loginLink\"><a href=\"login.html\">Try Again</a></button>";        
     }
     $conn->close(); 
?>
</html>

