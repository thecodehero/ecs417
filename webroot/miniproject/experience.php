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
            <h2>Experience</h2>            
            <section>
                <h3>Ecommerce</h3>
                <p>
                In the past years since September 2017 I created several ecommerce Shopify dropshipping stores. The first one I created in the fantasy niche failed, the second one in the travel niche I made my first two sales but I was losing money, and the third one in the dog niche I made over $1000 dollars in revenue with 20-30% profit margin. 

Dropshipping is basically a fulfillment method where I the merchant does not actually own any inventory. When I receive an order, I would buy the product at a cheaper price from the drop shipper, who is a third party with a warehouse, send them my customer’s details, and they would ship the product directly to the customer. 

While I was doing Shopify Dropshipping I imported many different plugins to make my store more user-friendly, increase my conversion rate, and maximize profits. For example, I used Oberlo to import products from the dropshipping site Aliexpress to my Shopify store. I also used an app called Bold to allow me to upsell products to the customer. Furthermore, to create a feeling of scarcity I used an app called countdown timer so that the customer would more likely to purchase straight away before the sale ends. 

To market and advertise my Shopify stores I paid Instagram influencers (Instagram profiles with large numbers of follower) to post my product ad on their Instagram to their followers. I also promoted my product on Facebook using Facebook advertising.

In my most successful store, I was selling giant tennis balls for dogs and sold 71 of them. I eventually sold the successful store for £200 via Exchange Marketplace: <a href="https://exchangemarketplace.com/shops/dog-fayre">Click Here</a>

                </p><br>
                <h3>Blogging</h3>
                <p>
                I created 2 WordPress blogs for the niches: fitness and meditation. I bought domain name and hosting through Namecheap.  I then installed WordPress through Cpanel and set up my blog. 

I wrote several blog articles for fitness and meditation providing value and tips. I also created product reviews with affiliate links to products that I thought were good and useful. 

I planned to use Search Engine Optimization in order to drive traffic to my blog, so I did a lot of research about how to do it. I learnt about how to increase my rank in Google by providing high-quality and original content and getting backlinks from high quality websites in my niche. 

                </p><br>
                <h3>Tutoring</h3>
                <p>
                I was tutoring people in computer science. I taught them how to write programs in languages such as Python, website development, theory of computer science, GCSE and A-Level mathematics. <br>
                From this experience I have gained significant confidence as I had to go out and network in order to find clients for tutoring. I also become a better at speaking with people and socializing in general. 
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
