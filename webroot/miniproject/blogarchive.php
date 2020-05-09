<html>
<head>
        <link rel="stylesheet" href="reset.css" type="text/css">
        <link rel="stylesheet" href="stylesheet.css" type="text/css">        
        <script src="blogarchive.js"></script>    
</head>

<?php   
    
    function postMenu() {        
        include 'connection.php';
        
        $sql = "SELECT * FROM BLOGENTRIES ORDER BY postID DESC";            
        $result = mysqli_query($conn,$sql);  

        

        $checkResult = mysqli_num_rows($result); 
        if($checkResult > 0 ) {
            echo "<h3>Blog Archive</h3>";
            $currentMonth = '';
            while($row = mysqli_fetch_assoc($result)) {                
                $month = $row['postMonth'];                                              
                //menu month
                if($currentMonth != $month) {
                    echo "
                    <button class=\"archiveMenu\" onclick=\"showDropDown()\";>$month >></button>
                    <ul id=\"archiveDropDown\">";     
                    $currentMonth = $row['postMonth'];
                    $sql2 = "SELECT * FROM BLOGENTRIES WHERE postMonth='$month'";            
                    $result2 = mysqli_query($conn,$sql2);   
                     //drop down for posts.                
                    while($row2 = mysqli_fetch_assoc($result2)) {  
                        $title = $row2['title'];
                        echo "<li id=\"archiveDropDownMenu\" style=\"display:block\"><a href=\"#$title\">$title</a></li>";
                                                                   
                    } 
                    echo "</ul>";                                           
                }                                                   
            }
            
                      
        }

    }
    

?>
</html>