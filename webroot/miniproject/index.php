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
            <h2>Welcome to my Portfolio Site</h2>
            <img src="images/about.jpg" class="center">
            <section>
                <p>Hello. Welcome to my Portfolio Website. 
                    My name is Timothy Luckcock. I'm a 20 year old computer science student. 
                    You can read more about me from my <a href="about.php">About Page</a>
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
            <li><a href="#">About</a></li>
            <li><a href="#">Skills</a></li>
            <li><a href="#">Education</a></li>
            <li><a href="#">Experience</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Blog</a></li>
        </ul><br><br>                
        <p id="copyright">Copyright (C) 2020 Timothy Luckcock. All Rights Reserved</p>        
    </footer>
</html>
