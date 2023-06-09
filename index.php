<?php

@include 'config.php';

session_start();

// IF USER IS NOT LOGGED IN IT WILL REDIRECT BACK TO LOGIN FORM
// if (!isset($_SESSION['usermail'])) {
//     header('location:login_form.php');
// }

// TO DISPLAY USER'S NAME
// $email = $_SESSION['usermail'];
// $select = "SELECT firstName, lastName FROM user_form WHERE email = '$email'";
// $result = mysqli_query($conn, $select);
// $row = mysqli_fetch_assoc($result);
// $firstName = $row['firstName'];
// $lastName = $row['lastName'];

// IF SUCCESSFUL LOGIN ALERT POPUP WILL BE DISPLAYED
// if (isset($_SESSION['usermail']) && !isset($_SESSION['alert_shown'])) {
//     echo '<script>alert("Welcome, '. $firstName . ' to AmbatuCooks!");</script>';
//     $_SESSION['alert_shown'] = true;
// }

// IF USER IS LOGGED IN = SHOWS LOGOUT IN NAV
if(isset($_SESSION['usermail'])) {
    $isLogged1 = true;
} else {
    $isLogged1 = false;
}

// IF USER IS NOT LOGGED IN = SHOWS LOGIN IN NAV
if(!isset($_SESSION['usermail'])) {
    $isLogged2 = true;
} else {
    $isLogged2 = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./img/ICON/ambatuicon.png" type="image/x-icon">

    <!-- PRELOAD -->
    <link rel="preload" href="./assets/style.css" as="style">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='preload' as="style">
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <link rel="preload" as="style" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.4.0/css/lightgallery.min.css"/>
    <link rel="preload" as="script" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    <link rel="preload" as="script" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    <link rel="preload" as="script" src="https://unpkg.com/aos@next/dist/aos.js">
    <link rel="preload" as="script" src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js">
    <link rel="preload" as="script" src="./assets/script.js">
    <link rel="preload" as="script" src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js">
    <link rel="preload" as="script" src="https://cdnjs.cloudflare.com/ajax/libs/intersection-observer/1.0.0/intersection-observer.min.js">

    <!-- STYLESHEETS LOCAL MEOW -->
    <link rel="stylesheet" href="./assets/style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.4.0/css/lightgallery.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intersection-observer/1.0.0/intersection-observer.min.js"></script>

    <title>Ambatu Cooks</title>

</head>

<body onload="checkLoginStatus()">

    <div class="loader">
        <!-- <video autoplay muted loop>
            <source src="./vid/background-load.mp4" type="video/mp4">
        </video> -->
        <!-- <h1>Loading...</h1> -->
        <img src="./img/loader/loading-loader.gif" alt="loader gif">
    </div>


    <div id="progress">
        <span id="progress-value">▲</span>
    </div>

    <div id="music">
        <audio id="bg-music" autoplay loop>
            <source src="./music/ogg/on a clear day (kiki's delivery service lofi).ogg" type="audio/ogg">
        </audio>
    </div>

    <header>

        <!-- PRENAV FIRST -->
        <div id="prenav-text">
            <div class="flex-row">
                <div class="contact-info">
                    Phone no: <span>+63 997 267 1584</span> or email us: <span>ambatucooks@gmail.com</span>
                    <!-- User: <span><?php echo $firstName . ' ' . $lastName; ?></span> -->
                </div>
                <div class="opening-times flex-row">
                    <!-- Mon - Fri / 9:00-21:00. Sat - Sun 10:00/20:00 -->
                    <ul class="social-links flex-row">
                        <li><a href="https://facebook.com/ambatucooks69" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                        <!-- <li><a href="javascript:void(0)"><i class="bx bxl-instagram"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="bx bxl-youtube"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>

        <!-- PRENAV END -->




        <!-- NAVBAR START -->

        <nav id="navbar" class="navbar flex-row">

            <div class="nav-icon menu-btn-wrapper">
                <div id="menu-btn" class="menu-btn bx bx-menu"></div>
            </div>

            <div class="logo">
                <h5>
                    <!-- Ambatu<span>Cooks</span> -->
                    <img href="index.php" src="./img/Logo/AMBATU.png" alt="">
                </h5>
            </div>

            <ul id="nav-items" class="nav-items">
                <li><a href="#home" class="nav-links">HOME</a></li>
                <li><a href="#about" class="nav-links">ABOUT</a></li>
                <li><a href="recipes.php" class="nav-links">MAIN MENU</a></li>
                <li><a href="recipes-list.php" class="nav-links">COURSES</a></li>
                <!-- <li><a href="recipe-app.html" target="_blank" class="nav-links">APP</a></li> -->
                <li><a href="#reviews" class="nav-links">REVIEWS</a></li>
                <li><a href="#gallery" class="nav-links">GALLERY</a></li>
                <li><a href="#blogs" class="nav-links">SPECIALS</a></li>
                <li><a href="#consect" class="nav-links">CONTACT</a></li>
                <?php if ($isLogged1) { ?>
                    <li><a href="logout.php" class="nav-links">LOGOUT</a></li>
                <?php } ?>
                <?php if ($isLogged2) { ?>
                    <li><a href="login_form.php" class="nav-links">LOGIN</a></li>
                <?php } ?>
            </ul>

            <ul class="nav-btns">

                <!-- <div class="search-btn-wrapper nav-icon">
                    <i class="searchbtn bx bx-search-alt-2"></i>
                    <div id="search-form" class="search-form">
                        <form action="#">
                            <input type="search" class="search-data" placeholder="Search" required>
                            <button type="submit" class="bx bx-search-alt-2"></button>
                        </form>
                    </div>
                </div> -->

                <!-- <div class="cart-btn-wrapper nav-icon">
                    <i class="cartbtn bx bx-cart"></i>
                    <div id="cart" class="cart flex-row">
                        <span>No Products In The Cart</span>
                    </div>
                </div> -->

                <div class="nav-icon">
                    <i class="darkbtn bx bx-moon"></i>
                </div>

            </ul>

        </nav>

        <!-- NAVBAR END -->

    </header>

    <!-- HOME START-->
    <section id="home">
        <div class="home-carousel owl-carousel owl-theme">
            <div class="slide slide1">
                <div class="content">
                    <p class="sub-heading">AMBATU COOKS</p>
                    <h1 class="heading">Delicious</h1>
                    <p class="sub-heading-2">FOOD RECIPES</p>
                </div>
            </div>
            <div class="slide slide2">
                <div class="content">
                    <p class="sub-heading">AMBATU COOKS</p>
                    <h1 class="heading">Sharing Since</h1>
                    <p class="sub-heading-2">2023</p>
                </div>
            </div>
            <div class="slide slide3">
                <div class="content">
                    <p class="sub-heading">AMBATU COOKS</p>
                    <h1 class="heading">Life Is Uncertain</h1>
                    <p class="sub-heading-2">Eat Dessert First</p>
                </div>
            </div>
            <div class="slide slide4">
                <div class="content">
                    <p class="sub-heading">AMBATU COOKS</p>
                    <h1 class="heading">Cooking Is Love</h1>
                    <p class="sub-heading-2">Made Visible</p>
                </div>
            </div>
            <div class="slide slide5">
                <div class="content">
                    <p class="sub-heading">AMBATU COOKS</p>
                    <h1 class="heading">Recipes Are Like A Map</h1>
                    <p class="sub-heading-2">Guiding Us On A Delicious Journey</p>
                </div>
            </div>
            <!-- <div class="slide slide6">
                <div class="content">
                    <p class="sub-heading">AMBATU COOKS</p>
                    <h1 class="heading">Ambatunat</h1>
                    <p class="sub-heading-2">Omaygot</p>
                </div>
            </div> -->
        </div>
    </section>
    <!-- HOME END -->




    <!-- ABOUT START -->

    <section id="about" class="flex-row">

        <div class="text-wrapper" data-aos="fade-left" data-aos-duration="1000">
            <h1>DREAMY BULL</h1>
            <h3 id="title-change">Ambassador Chef</h3>
            <p id="desc-change">Hey there, have you ever been in the mood to whip up something bussing buss in the kitchen but you're not quite sure what to make? Well, let me tell you about this amazing recipe website! <br>It's the perfect place to find all sorts of Japanese tasty recipes, from quick and easy meals to fancy desserts. Trust me, this website will be <br>your go-to source for all your cooking needs!</p>
            <div class="sign">
                <img class="lazy" data-src="./img/sign/sign-light.png" alt="#" id="signImg">
            </div>
        </div>

        <div class="img-wrapper" data-aos="fade-left" data-aos-duration="1000">
            <img class="lazy" data-src="./img/About/about-ambatu.png" alt="#" id="ambatuImg">
        </div>
    </section>

    <!-- ABOUT END -->




    <!-- QUOTE START -->

    <section id="quote">
        <div class="text-wrapper">
            <h2>Plenty of Delicious</h2>
            <h1>Food Recipes To Try</h1>
        </div>
    </section>

    <!-- QUOTE END -->


    <!-- GALLERY START -->

    <section id="gallery">
        <h3>Our Gallery</h3>
        <h1>Our Untold Stories</h1>
        <div class="square-wrapper flex-row">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
        </div>

        <div class="gallery-wrapper flex-row" data-aos="fade-right" data-aos-duration="1000">

            <!-- IMG START -->
            <a href="./img/Gallery/1.jpg" class="gallery-img">
                <img class="lazy" data-src="./img/Gallery/1.jpg" alt="#">
                <div class="overlay">
                    <i class="icon bx bx-search"></i>
                </div>
            </a>
            <!-- IMG END -->

            <!-- IMG START -->
            <a href="./img/Gallery/2.jpg" class="gallery-img">
                <img class="lazy" data-src="./img/Gallery/2.jpg" alt="#">
                <div class="overlay">
                    <i class="icon bx bx-search"></i>
                </div>
            </a>
            <!-- IMG END -->

            <!-- IMG START -->
            <a href="./img/Gallery/3.jpg" class="gallery-img">
                <img class="lazy" data-src="./img/Gallery/3.jpg" alt="#">
                <div class="overlay">
                    <i class="icon bx bx-search"></i>
                </div>
            </a>
            <!-- IMG END -->

            <!-- IMG START -->
            <a href="./img/Gallery/4.jpg" class="gallery-img">
                <img class="lazy" data-src="./img/Gallery/4.jpg" alt="#">
                <div class="overlay">
                    <i class="icon bx bx-search"></i>
                </div>
            </a>
            <!-- IMG END -->

            <!-- IMG START -->
            <a href="./img/Gallery/5.jpg" class="gallery-img">
                <img class="lazy" data-src="./img/Gallery/5.jpg" alt="#">
                <div class="overlay">
                    <i class="icon bx bx-search"></i>
                </div>
            </a>
            <!-- IMG END -->

            <!-- IMG START -->
            <a href="./img/Gallery/6.jpg" class="gallery-img">
                <img class="lazy" data-src="./img/Gallery/6.jpg" alt="#">
                <div class="overlay">
                    <i class="icon bx bx-search"></i>
                </div>
            </a>
            <!-- IMG END -->

        </div>

    </section>

    <!-- GALLERY END -->




    <!-- TEAM START -->

    <section id="team">
        <div class="section-heading">
            <h3>Website Creators</h3>
            <h1>Meet our Developers</h1>
            <div class="square-wrapper flex-row">
                <div class="square"></div>
                <div class="square"></div>
                <div class="square"></div>
            </div>
        </div>

        <div class="team-carousel owl-carousel owl-theme" data-aos="fade-right" data-aos-duration="1000">
            <!-- CARD START -->
            <div class="team-card">

                <div class="img-wrapper">
                    <img class="lazy" data-src="./img/team/team-albert-1.png" alt="#">
                </div>

                <div class="text-wrapper">
                    <h4 class="name">Jessie Albert Regualos</h4>
                    <h5 class="desc">Lead Web Designer & Lead Web Developer</h5>
                </div>

                <ul class="social-links flex-col">

                    <li>
                        <a href="https://web.facebook.com/yotsuchi.albertjin1/" target="_blank"><i class="icon bx bxl-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon bx bxl-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon bx bxl-instagram"></i></a>
                    </li>

                </ul>

            </div>
            <!-- CARD END -->

            <!-- CARD START -->
            <div class="team-card">

                <div class="img-wrapper">
                    <img class="lazy" data-src="./img/team/team-risu.png" alt="#">
                </div>

                <div class="text-wrapper">
                    <h4 class="name">Irisjen De Lara</h4>
                    <h5 class="desc">Web Developer</h5>
                </div>

                <ul class="social-links flex-col">

                    <li>
                        <a href="https://web.facebook.com/iris.jen.9" target="_blank"><i class="icon bx bxl-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon bx bxl-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon bx bxl-instagram"></i></a>
                    </li>

                </ul>

            </div>
            <!-- CARD END -->

            <!-- CARD START -->
            <div class="team-card">

                <div class="img-wrapper">
                    <img class="lazy" data-src="./img/team/team-ambatu.png" alt="#">
                </div>

                <div class="text-wrapper">
                    <h4 class="name">Dreamy Bull</h4>
                    <h5 class="desc">Our Motivator</h5>
                </div>

                <ul class="social-links flex-col">

                    <li>
                        <a href="#"><i class="icon bx bxl-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon bx bxl-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon bx bxl-instagram"></i></a>
                    </li>

                </ul>

            </div>
            <!-- CARD END -->

        </div>

    </section>

    <!-- TEAM END -->




    <!-- REVIEW START -->

    <section id="reviews">
        <div class="section-heading">
            <h3>Critics</h3>
            <h1>What People Say</h1>
            <div class="square-wrapper flex-row">
                <div class="square"></div>
                <div class="square"></div>
                <div class="square"></div>
            </div>
        </div>

        <div class="review-carousel owl-carousel owl-theme" data-aos="fade-up" data-aos-duration="1000">
            <!-- REVIEW START -->
            <div class="review-item">
                <div class="container">
                    <div class="img-box">
                        <img class="lazy" data-src="./img/Review/gordon.png" alt="#">
                    </div>
                    <div class="text-holder">
                        <h4 class="name">Gordon Ramsey</h4>
                        <h5 class="desc">World-Class Chef</h5>
                    </div>
                </div>
                <p class="comment">
                    "I give this website a rate of 5/5. All of their recipes are delicious. Well done."
                </p>
                <div class="rating">
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>

                </div>
            </div>
            <!-- REVIEW END -->

            <!-- REVIEW START -->
            <div class="review-item">
                <div class="container">
                    <div class="img-box">
                        <img class="lazy" data-src="./img/Review/marco.jpg" alt="#">
                    </div>
                    <div class="text-holder">
                        <h4 class="name">Marco Pierre White</h4>
                        <h5 class="desc">World-Class Chef</h5>
                    </div>
                </div>
                <p class="comment">
                    "Outstanding!"
                </p>
                <div class="rating">
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>

                </div>
            </div>
            <!-- REVIEW END -->

            <!-- REVIEW START -->
            <div class="review-item">
                <div class="container">
                    <div class="img-box">
                        <img class="lazy" data-src="./img/Review/rie.png" alt="#">
                    </div>
                    <div class="text-holder">
                        <h4 class="name">Rie Takahasi</h4>
                        <h5 class="desc">Japanese Voice Actress</h5>
                    </div>
                </div>
                <p class="comment">
                    "非常に簡単でシンプルです。レシピが美味しすぎる!!"
                </p>
                <div class="rating">
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>

                </div>
            </div>
            <!-- REVIEW END -->

            <!-- REVIEW START -->
            <div class="review-item">
                <div class="container">
                    <div class="img-box">
                        <img class="lazy" data-src="./img/Review/charlie.png" alt="#">
                    </div>
                    <div class="text-holder">
                        <h4 class="name">MoistCr1tikal</h4>
                        <h5 class="desc">Streamer</h5>
                    </div>
                </div>
                <p class="comment">
                    "I did some tier list of their recipes, all of it got SS tier."
                </p>
                <div class="rating">
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>
                    <i class="icon bx bxs-star"></i>

                </div>
            </div>
            <!-- REVIEW END -->
        </div>

    </section>

    <!-- REVIEW END -->


    <!-- BLOGS START -->

    <section id="blogs">

        <div class="section-heading" class="menu-tab-content show" data-aos="zoom-in" data-aos-duration="1000">
            <h3>Our Recipe</h3>
            <h1>Certified Ambatupicks</h1>
            <div class="square-wrapper flex-row">
                <div class="square"></div>
                <div class="square"></div>
                <div class="square"></div>
            </div>
        </div>

        <div class="blog-carousel owl-carousel owl-theme" data-aos="fade-right" data-aos-duration="1000">

            <!-- BLOG POST START -->
            <a href="recipes-list.php#popup1-main" class="blog-post">

                <div class="img-wrapper">
                    <img class="lazy" data-src="./img/Blog/1-Miso-Ramen.jpg" alt="#">
                    <div class="overlay"><i class="icon bx bx-link"></i></div>
                </div>

                <div class="text-wrapper">
                    <h5 class="blog-title">Miso Ramen 味噌ラーメン</h5>
                    <p class="desc">Flavored with pork and chicken broth with a mix of toppings such as chashu and ramen egg, this bowl of Miso Ramen is going to satisfy your craving.</p>
                    <p class="time"><i class="icon bx bx-time-five"></i>Prep Time: <span>10 mins</span></p>
                    <p class="time"><i class="icon bx bx-time-five"></i>Cook Time: <span>15 mins</span></p>
                    <p class="time"><i class="icon bx bx-time-five"></i>Total Time: <span>25 mins</span></p>
                </div>

            </a>
            <!-- BLOG POST END -->

            <!-- BLOG POST START -->
            <a href="recipes-list.php#popup1-appe" class="blog-post">

                <div class="img-wrapper">
                    <img class="lazy" data-src="./img/Blog/2-Chawanmushi.jpg" alt="#">
                    <div class="overlay"><i class="icon bx bx-link"></i></div>
                </div>

                <div class="text-wrapper">
                    <h5 class="blog-title">Chawanmushi 茶碗蒸し</h5>
                    <p class="desc">Chawanmushi is a classic Japanese savory custard that`s steamed and served in a delicate cup.</p>
                    <p class="time"><i class="icon bx bx-time-five"></i>Prep Time: <span>20 mins</span></p>
                    <p class="time"><i class="icon bx bx-time-five"></i>Cook Time: <span>30 mins</span></p>
                    <p class="time"><i class="icon bx bx-time-five"></i>Total Time: <span>50 mins</span></p>
                </div>

            </a>
            <!-- BLOG POST END -->

            <!-- BLOG POST START -->
            <a href="recipes-list.php#popup3-dessert" class="blog-post">

                <div class="img-wrapper">
                    <img class="lazy" data-src="./img/Blog/3-Japanese Strawberry Shortcake.jpg" alt="#">
                    <div class="overlay"><i class="icon bx bx-link"></i></div>
                </div>

                <div class="text-wrapper">
                    <h5 class="blog-title">Japanese Strawberry Shortcake いちごのショートケーキ</h5>
                    <p class="desc">This simple and elegant cake is perfect for celebrating all occasions.</p>
                    <p class="time"><i class="icon bx bx-time-five"></i>Prep Time: <span>2 hours</span></p>
                    <p class="time"><i class="icon bx bx-time-five"></i>Cook Time: <span>25 mins</span></p>
                    <p class="time"><i class="icon bx bx-time-five"></i>Total Time: <span>2 hours 25 mins</span></p>
                </div>

            </a>
            <!-- BLOG POST END -->

            <!-- BLOG POST START -->
            <a href="recipes-list.php#popup2-beve" class="blog-post">

                <div class="img-wrapper">
                    <img class="lazy" data-src="./img/Blog/4-Matcha Latte.jpg" alt="#">
                    <div class="overlay"><i class="icon bx bx-link"></i></div>
                </div>

                <div class="text-wrapper">
                    <h5 class="blog-title">Matcha Latte 抹茶ラテ</h5>
                    <p class="desc">This hot beverage with green tea powder is packed with antioxidants and tastes better than Starbucks.</p>
                    <p class="time"><i class="icon bx bx-time-five"></i>Prep Time: <span>2 mins</span></p>
                    <p class="time"><i class="icon bx bx-time-five"></i>Cook Time: <span>3 mins</span></p>
                    <p class="time"><i class="icon bx bx-time-five"></i>Total Time: <span>5 mins</span></p>
                </div>

            </a>
            <!-- BLOG POST END -->
        </div>

    </section>

    <!-- BLOGS END -->



    <!-- CONTACT US START -->

    <section id="consect" class="contact-section">
        <div class="booking-form" data-aos="fade-right" data-aos-duration="1000">
            <h3>Any Questions?</h3>
            <h1>Contact Us</h1>
            <div class="square-wrapper flex-row">
                <div class="square"></div>
                <div class="square"></div>
                <div class="square"></div>
            </div>
            <form action="https://formspree.io/f/mqkonlvd" method="POST">
                <input id="name" type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" id="email" required>
                <input type="tel" name="phone" placeholder="Phone" id="phone" required>
                <textarea name="msg" id="msg" placeholder="Message" required></textarea>
                <button type="submit" id="btn1">Send</button>
                <input type="reset" value="Clear" id="reset">
            </form>
        </div>
    </section>

    <!-- CONTACT US END -->



    <!-- FOOTER-QUOTE START -->

    <section class="footer-quote flex-col">
        <h1>Bringing People Together, One Delicious Recipe At A Time</h1>
        <a href="recipes.php" class="btn3">Try Our Bussing Bus Recipes</a>
    </section>

    <!-- FOOTER-QUOTE END -->



    <!-- FOOTER START -->

    <footer id="footer">
        <div class="footer-top flex-row">

            <div class="flex-col">
                <h4 class="logo-name">AMBATUCOOKS</h4>

                <p class="desc">"Food is not just fuel, it's information. It talks to your DNA and tells it what to do. The most powerful tool to change your health, environment and entire world is your fork. Every time you eat, you make a choice. With every bite, you hold the power to change your life and the lives of others. Choose wisely, savor every flavor and nourish your body with love and respect."<br>- Dr. Mark Hyman.</p>
                <ul class="social-links">
                    <li><a href="https://facebook.com/ambatucooks69" target="_blank"><i class="icon bx bxl-facebook"></i></a></li>
                    <!-- <li><a href="javascript:void(0)"><i class="icon bx bxl-twitter"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="icon bx bxl-instagram"></i></a></li> -->
                </ul>
            </div>

            <div class="flex-col">
                <h4 class="heading">ADDRESS</h4>

                <p class="desc">Zone 6 Capisnon<br>Kauswagan, Cagayan de Oro City 9000</p>
                <p class="desc">P: +63 997 267 1584<br>E: ambatucooks@gmail.com</p>
            </div>

            <div class="flex-col">
                <h4 class="heading">MORE INFO</h4>
                <a href="recipes.php#menu">Menu</a>
                <a href="#about">About</a>
                <a href="#consect">Contact Us</a>
                <a href="#blogs">Specials</a>
            </div>

        </div>

        <div class="footer-bottom flex-row">
            <span>Copyright &copy 2023 All rights reserved | AmbatuCooks</span>
        </div>
    </footer>

    <!-- FOOTER END -->


    <!-- JQEURY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- OWL CARO -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- LIGHTGAL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery-wrapper'));
    </script>

    <!-- LOCAL JS -->
    <script src="./assets/script.js"></script>

    <script>
        var myAudio = document.getElementById("bg-music");
        myAudio.volume = 0.2;

        // var myload = document.getElementById("bg-ambatu");
        // myload.volume = 0.2;
    </script>

</body>

</html>