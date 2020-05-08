<html>
    <?php
        session_start();
    ?>
    <head>
        <link rel="stylesheet" href="reset.css" type="text/css">
        <link rel="stylesheet" href="stylesheet.css" type="text/css">
    </head>    
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
            <h2>About Me</h2>
            <img src="images/about.jpg" class="center">
            <section>
            <p>My name is Timothy Luckcock and I am a student majoring in Computer Science at Queen 
                    Mary University of London.</p>
                <p>I have a strong interest in developing and designing websites through the use of HTML and CSS as it enables me to use my creativity to style and make the website look colorful and professional. 
                    I also love coding in Java as it allows me to solve problems which I find very motivating as I enjoy 
                    problem solving and challenges. </p>  
                <p>
                    In my spare time I do tutoring where I teach others how to program and how to build 
                    websites and many other topics. In the future after I graduating, I hope to start a 
                    career as a front-end developer or back-end developer. 
                    Eventually I would like to build my own web-based application and use my skills in 
                    marketing and advertising to promote and sell it.
                </p>                          
            </section>
        </article>   
        <aside>
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
