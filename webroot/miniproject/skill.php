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
            <h2>My Skills I have Gained</h2>            
            <section>
            <h3>ECS401U: Procedural Programming</h3>
            <p>During my procedural programming module, I have developed and acquired several technical skills including:<br>
        •	How to write a program using the Java Programming Language.<br>
        •	How to write and develop methods and procedures that can be reused throughout the program <br>
        •	How to create variables with different data types in order to store different types of information <br>
        •	Writing code to manipulate values <br>
        •	Creating records and arrays in order to store information. <br>
        •	Writing and debugging programs that use abstract data types in a procedural context. <br>
        •	Writing and using for loops and while loops in order to iterate of a block of code and repeat an instruction.<br>
        <p>
        <h3>ECS404U: Computer Systems and Networks </h3>
        <p>
        From this module I have gained skills including: <br>
        •	Writing an assembly programs using MIPS architecture <br>
        •	How to convert to/from binary and decimal <br>
        •	How to convert to/from binary and hexadecimal <br>
        •	How to use terminal to check information about the computer and spots any faults. <br>
        </p>
        <h3>ECS407U: Logic and Discrete Structures </h3>
        <p>
        From this module I developed skills including: <br>
    •	Using box proofs in order to prove that a proposition is a tautology. <br>
    •	Using truth tables to prove that a proposition is a tautology <br>
    •	Creating truth tables using the TruthTableConstructor software <br>
    •	Create box proofs using Jape software. <br>
    •	Logical skills from solving logical problems <br>
    •	Problems solving skills <br>
        </p>
        <h3>ECS427U: Professional and Research Practices </h3>
        <p>
        From the Professional and Research Practice module I have gained skills such as: <br>
    •	Public Speaking skills as I had to speak in front of an audience of demonstrators about the topic of self-driving cars. <br>
    •	Presenting to an audience <br>
    •	Writing a report about self-driving cars. <br>
    •	Working in a team as I had to do a group presentation <br>
    •	Being a team leader. <br>
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
