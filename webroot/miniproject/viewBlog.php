
<html>
    <head>
        <link rel="stylesheet" href="reset.css" type="text/css">
        <link rel="stylesheet" href="stylesheet.css" type="text/css"> 
        <script src="blogarchive.js"></script>           
    </head>
    <?php                  
        include 'blogarchive.php';
                    
            function viewPosts() {
                session_start(); 
                include 'connection.php';
                $sql = "SELECT * FROM BLOGENTRIES ORDER BY postID DESC"; //order by postID in descending order.
                //so it will be the most recent post for the top row.           
                $result = mysqli_query($conn,$sql);  
                $checkResult = mysqli_num_rows($result); 
                
                if($checkResult > 0 ) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $postID = $row['postID'];        
                        $title = $row['title'];
                        $content = $row['content'];
                        $datetime = $row['postdatetime'];                                       
                        
                        echo "<p class=\"viewDateTime\";>$datetime</p>";   //outputs date and time blog post was published.
                        echo "<strong id=\"$title\" class=\"viewTitle\">$title</strong>"; //outputs title of blog post
                        echo "<p class=\"viewPost\">$content</p><br>";   //outputs content of blog post
                        if(isset($_SESSION['login'])) {
                            deletePost($postID);
                        }                        
                        commentForm($postID);                          
                        displayComment($postID);
                       
                        echo "<hr class=\"viewHR\">";  
                               
                    } 
                }
            }   

            function commentForm(int $postID) {                
                
                //hidden type used to pass ID of blog post comment is entered for.
                if(isset($_SESSION['login']))
                {
                    echo "<h3>Enter Comment</h3>";
                    echo "<form id=\"formComment\"method=\"POST\" action=\"addComment.php\">   
                        <input type=\"hidden\" name=\"commentPost\" value=\"$postID\">                  
                        <textarea id=\"inputComment\"name=\"message\" type=\"text\" placeholder=\"Enter comment\"></textarea><br>
                        <input class=\"submit\" type=\"submit\" value=\"Enter\">
                     </form>";
                }
                else {
                    echo "<h3>You need to be logged in to comment!</h3>";
                }
                

            }
            
            function displayComment(int $postID) {
                include 'connection.php';
                $sql = "SELECT * FROM COMMENTS WHERE postID='$postID'";            
                $result = mysqli_query($conn,$sql); 

                echo "<h3>Comments</h3>";
                while($row = mysqli_fetch_assoc($result)) {
                    $firstName = $row['firstName'];
                    $lastName = $row['lastName'];
                    $message = $row['message'];
                    $commentID = $row['commentID'];                  
                    
                    echo "<form id=\"outputComment\">
                        <label id=\"commentName\" for=\"commentMessage\">$firstName $lastName</label><br>
                        <textarea id=\"commentMessage\" name=\"commentMessage\" type=\"text\" readonly>$message</textarea>
                    </form>";
                    if(isset($_SESSION['login'])) {
                        deleteComment($commentID);
                    }                       
                }                
            }

            function deleteComment(int $commentID) { //php function to allow admin to delete comments
                if($_SESSION['email']=="admin@gmail.com") { //check if user is admin 
                    echo "<form method=\"POST\" action=\"deleteComment.php\">
                        <input type=\"hidden\" name=\"commentID\" value=\"$commentID\">
                        <input id=\"deleteCommentBtn\" type=\"submit\" class=\"submit\" value=\"Delete Comment\"><br>                        
                    </form>";
                }
            }

            function deletePost(int $postID) {
                if($_SESSION['email']=="admin@gmail.com") { //check if user is admin 
                    echo "<form method=\"POST\" action=\"deletePost.php\">
                        <input type=\"hidden\" name=\"postID\" value=\"$postID\">
                        <input id=\"deletePostBtn\" type=\"submit\" class=\"submit\" value=\"Delete Post\"><br>                        
                    </form>";
                }
            }
?>
    <header>      
        <h1 id="logo"><a href="index.php">TIMOTHY LUCKCOCK</a></h1>  
        <!--Navigation Menu-->
        <nav>
            <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="skill.php">Skills</a></li>
                <li><a href="education.php">Education</a></li>
                <li><a href="experience.php">Experience</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
            </ul>            
        </nav>        
    </header> 
    <body> 
          
        <div id="middle">
        <article>   
            <h2>Recent Blog Posts</h2>
            <?php              
                viewPosts();                
            ?>         
        </article>         
        <aside id="viewAside" >    
            <?php                  
            if(isset($_SESSION['login'])) {
                echo "<h2>Welcome User</h2>                
                <form id=\"logoutForm\" action=\"logout.php\" method=\"POST\">
                <input type=\"submit\" value=\"LOG OUT\" class=\"submit\"><br>
                <input type=\"button\" value=\"ADD POST\" class=\"submit\" onclick=\"window.location.href='addPost.html'\";><br>
                </form>";
            }
            else {
                echo"<h2>Login to Add Post</h2>
                <a href=\"login.html\" id=\"loginLink\">LOGIN</a>";
                
            }  
            postMenu();          
            ?>
        </aside>        
    </div>    
    </body>
    <footer>      
        <ul class="center">
        <li><a href="about.php">About</a></li>
                <li><a href="skill.php">Skills</a></li>
                <li><a href="education.php">Education</a></li>
                <li><a href="experience.php">Experience</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
        </ul><br><br>                
        <p id="copyright">Copyright (C) 2020 Timothy Luckcock. All Rights Reserved</p>        
    </footer>
</html>