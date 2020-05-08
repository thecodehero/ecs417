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
            <h2>Portfolio</h2>            
            <section>
                <h3>Computer Systems and Networks</h3>
                <p>
                Examples of work that I could show to other people are my 2 courseworks which show all my solutions for the different exam-style questions. Looking at my solutions demonstrates my knowledge and understanding of computer systems and networks and also my skills in problem solving. 

I also have my MIPS assembly programs that I wrote for my coursework and my lab exercises which could illustrate my experience and skill with writing assembly languages using MIPS.

                </p>
                <h3>Procedural Programming Miniproject</h3>
                <p>In my individual mini-project I had to create a program that would develop in different stages over the term. The purpose of this mini-project was to enhance the skills I learnt in the short-exercises such as writing a programing using a for loop, accessor methods and arrays, and combine them altogether in one program. I was given suggestions on what to do my program on and I chose to do a Chatbot program for my miniproject. 

I also had a midterm test and an exit test for my coursework which gave me feedback on what I skills I needed to focus on developing further and what topics I needed a better understanding of. Overall, the Procedural Programming module has taught me how to write a complex program with output, input, calculations, variables, for loops, while loops, arrays, abstract data types, sorting algorithms, reading and writing to a file in Java. I also developed the skills of consistency as I worked on writing my programs every day.
</p>
                <h3>Professional and Research Practice</h3>
                <p>Evidence I could show to other people includes: <br>
•	My report on self-driving cars for first coursework <br>
•	The group presentation me and my group created for second coursework <br>
•	My improved answers from my third coursework <br>
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
