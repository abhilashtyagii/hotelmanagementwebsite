<?php
session_start();
if(isset($_SESSION["signup"]) && $_SESSION["signup"]==true)
{
?>
<div class="alert">
        <h2><center>Your account has been created successfully.</center></h2>
</div>
    <?php
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HOTEL GP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="mainnew.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "logo.png" type = "image/png">
    </head>
    <body>
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <span>INDRAPRASTHA PALACE</span>
                </div>
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>
            <div class = "head-bottom flex">
                <h2>NICE AND COMFORTABLE PLACE TO STAY</h2>
                <p>At INDRAPRASTHA, choose from 403 grand rooms and suites, each planned precisely to offer you the very best experience. Tastefully done interiors and all modern amenities make the hotel ideal for a business or pleasure visit.</p>
               <!-- <form action="loginform.php" method="post"> -->
                <a href="loginform.php"><input type = "submit" value=" Log In  " class = "head-btn"></a>
               <!-- </form>  -->
                <!-- <form action="signup.php" method="post" >          -->
                    <a href="signup.php"><input type="submit" value="Sign Up" class="head-btn"> </a>
                 <!-- </form>  -->
                <!--<button type = "button" class = "head-btn">GET STARTED</button>-->
            </div>
        </header>
        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">   
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <!--<li><a href = "#header">home</a></li>-->
                <li><a href = "loginform.php">Login to Book Rooms</a></li>
                <li><a href = "#services">Our Services</a></li>
                <li><a href = "#customers">Our Customers</a></li>
            </ul>
            <!-- <a href="logout.php"><button class = "btn sign-up">Log Out</button></a> -->
            <!--<button class = "btn log-in">log in</button>-->
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <!-- body content  -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h2>services</h2>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Food Service/ Food Runner</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                        <!--<button type = "button" class = "btn">Know More</button>-->
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Refreshment</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                        <!--<button type = "button" class = "btn">Know More</button>-->
                    </div>
                </article>
                <!-- end of single service -->
        </section>
        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h2>customers</h2>
                </div>
                <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Excellent Location!</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "cust4.jpg" alt = "customer image">
                        <span>Mohak Khatri, Chandigarh</span>
                    </div>
                    <!-- end of single customer -->
                <div class = "customers-container">
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>We Loved it</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "cust32.jpg" alt = "customer image">
                        <span>Rachit Singh, Rajasthan</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Comfortable Living</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "cus1.jpg" alt = "customer image">
                        <span>Gautam Kumar, Maharashtra</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Place</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "cus3.jpg" alt = "customer image">
                        <span>Anuj Agrawal, Uttarakhand</span>
                    </div>
                    <!-- end of single customer -->
                </div>
            </div>
        </section>
        <!-- end of body content -->
        
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>At INDRAPRASTH, choose from 403 grand rooms and suites, each planned precisely to offer you the very best experience. Tastefully done interiors and all modern amenities make the hotel ideal for a business or pleasure visit.</p>
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2>Privacy</h2>
             <!--       <a href = "#">Career</a>-->
                    <a href = "#">About Us</a>
                    <a href = "#">Contact Us</a>
                    <a href = "#">Services</a>
                </div>

              <!-- end of footer -->
        
        <script src="scriptnew.js"></script>
    </body>
</html>