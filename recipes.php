<?php

@include 'config.php';

session_start();

// IF USER IS NOT LOGGED IN IT WILL REDIRECT BACK TO LOGIN FORM
// if(!isset($_SESSION['usermail'])){
//     header('location:login_form.php');
// }

// TO DISPLAY USER'S NAME
// $email = $_SESSION['usermail'];
// $select = "SELECT firstName, lastName FROM user_form WHERE email = '$email'";
// $result = mysqli_query($conn, $select);
// $row = mysqli_fetch_assoc($result);
// $firstName = $row['firstName'];
// $lastName = $row['lastName'];


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
    <link rel="preload" href="./assets/style-recipe.css" as="style">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='preload' as="style">
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <link rel="preload" as="style" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.4.0/css/lightgallery.min.css"/>
    <link rel="preload" as="script" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    <link rel="preload" as="script" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    <link rel="preload" as="script" src="https://unpkg.com/aos@next/dist/aos.js">
    <link rel="preload" as="script" src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js">
    <link rel="preload" as="script" src="./assets/script-recipe.js">
    <link rel="preload" as="script" src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js">
    <link rel="preload" as="script" src="https://cdnjs.cloudflare.com/ajax/libs/intersection-observer/1.0.0/intersection-observer.min.js">

    <!-- STYLESHEETS LOCAL MEOW -->
    <link rel="stylesheet" href="./assets/style-recipe.css">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.4.0/css/lightgallery.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intersection-observer/1.0.0/intersection-observer.min.js"></script>

    <title>Main Menu - Ambatu Cooks</title>

</head>

<body>

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
            <source src="./music/ogg/merry-go-round of life (howl's moving castle lofi).ogg" type="audio/ogg">
        </audio>
    </div>

    <!-- <audio id="bg-ambatu" autoplay>
        <source src="./music/ogg/ambatublow.ogg" type="audio/ogg">
    </audio> -->

    <header>
        
        <!-- PRENAV FIRST -->
        <div id="prenav-text">
            <div class="flex-row">
                <div class="contact-info">
                    Phone no: <span>+63 997 267 1584</span> or email us: <span>ambatucooks@gmail.com</span>
                    <!-- User: <span><?php echo $firstName . ' ' . $lastName; ?></span> -->
                </div>
                <div class="opening-times flex-row">
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
                    <img href ="index.php" src="./img/Logo/AMBATU.png" alt="">
                </h5>
            </div>

            <ul id="nav-items" class="nav-items">
                <li><a href="index.php#home" class="nav-links">HOME</a></li>
                <li><a href="index.php#about" class="nav-links">ABOUT</a></li>
                <li><a href="recipes.php" class="nav-links">MAIN MENU</a></li>
                <li><a href="recipes-list.php" class="nav-links">COURSES</a></li>
                <!-- <li><a href="recipe-app.html" target="_blank" class="nav-links">APP</a></li> -->
                <li><a href="index.php#reviews" class="nav-links">REVIEWS</a></li>
                <li><a href="recipes.php#menu" class="nav-links">CATEGORY</a></li>
                <li><a href="recipes.php#blogs" class="nav-links">SPECIALS</a></li>
                <li><a href="#footer" class="nav-links">CONTACT</a></li>
                <?php if ($isLogged1) { ?>
                    <li><a href="logout.php" class="nav-links">LOGOUT</a></li>
                <?php } ?>
                <?php if ($isLogged2) { ?>
                    <li><a href="login_form.php" class="nav-links">LOGIN</a></li>
                <?php } ?>
            </ul>

            <ul class="nav-btns">

                <div class="nav-icon">
                    <i class="darkbtn bx bx-moon"></i>
                </div>

            </ul>

        </nav>

        <!-- NAVBAR END -->
        
    </header>

    <!-- <section class="space"></section> -->

    <section class="video">
        <h2>Cooking is like love</h2>
        <h1>it should be entered into with abandon or not at all</h1>
        <div class="video-wrapper">
            <video autoplay loop muted>
                <source src="./vid/3-cooking-anime.mp4">
            </video>
            
            <div class="video-gradient-overlay"></div>
        </div>
    </section>

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
    

    <!-- SECTION HEADING START -->

    <section id="menu" class="menu-section">
        <div class="section-heading" class="menu-tab-content show" data-aos="zoom-in" data-aos-duration="1000">
            <h3>Category Selections</h3>
            <h1>Ambatu Selected Recipes</h1>
            <div class="square-wrapper flex-row">
                <div class="square"></div>
                <div class="square"></div>
                <div class="square"></div>
            </div>
        </div>


        <!-- MENU NAV -->
        <div class="menu-tabs flex-row" data-aos="zoom-in" data-aos-duration="1000" data-aos-anchor-placement="bottom-bottom">
            <div class="menu-tab-item active" data-target="#main-dishes">
                <i class="bx bxs-bowl-hot"></i>
                <span>Main Dishes</span>
            </div>
            <div class="menu-tab-item" data-target="#starters">
                <i class="bx bx-restaurant"></i>
                <span>Appetizers and Snacks</span>
            </div>
            <div class="menu-tab-item" data-target="#desserts">
                <i class="bx bxs-popsicle"></i>
                <span>Desserts</span>
            </div>
            <div class="menu-tab-item" data-target="#drinks">
                <i class="bx bxs-drink"></i>
                <span>Drinks</span>
            </div>
        </div>

        <!-- MAIN DISHES -->
        <div id="main-dishes" class="menu-tab-content show" data-aos="zoom-in" data-aos-duration="1000"> 
            
            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup1-main">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/1-MAIN DISH/1-Miso-Ramen.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Miso Ramen Recipe</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Flavored with pork and chicken broth with a mix of toppings such as chashu and ramen egg, this bowl of Miso Ramen is going to satisfy your craving. You can make delicious ramen with authentic broth in less than 30 minutes!</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->
            
            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup2-main">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/1-MAIN DISH/2-Japanese-Curry.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Japanese Chicken Curry</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Delicious Japanese chicken curry recipe for a weeknight dinner! Tender pieces of chicken, carrots, and potatoes cooked in a rich savory curry sauce, this Japanese version of curry is a must-have for your family meal.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup3-main">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/1-MAIN DISH/3-Tonkatsu.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Tonkatsu</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Tonkatsu (Japanese Pork Cutlet) is one of the simplest meals you can make at home. Every bite is perfectly crunchy on the outside and juicy on the inside with the added flavor from Tonkatsu Sauce!</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup4-main">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/1-MAIN DISH/4-Oyakodon.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Oyakodon</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Oyakodon is a classic comfort food of Japanese home cooking. Tender pieces of chicken, onions, and eggs are simmered in an umami-rich sauce and then poured over a bowl of fluffy steamed rice. Simple, delicious, and utterly comforting, this is the kind of one-bowl meal you can cook in less than 30 minutes!</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->

            <div class="btn-wrapper">
                <a href="recipes-list.php#recipes-main" class="btn2">View Full Bussin Course</a>
            </div>

        </div>

        <!-- STARTERS -->
        <div id="starters" class="menu-tab-content">

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup1-appe">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/2-APPETIZER/1-Chawanmushi.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Chawanmushi</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>hawanmushi is a classic Japanese savory custard that`s steamed and served in a delicate cup. Tender chicken pieces, colorful kamaboko fish cake, and shimeji mushrooms are draped in a smooth and silky custard seasoned with dashi soup stock.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup2-appe">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/2-APPETIZER/2-Blistered Shishito Peppers.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Blistered Shishito Peppers</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Smoky, fun, and super addicting, these blistered shishito peppers make the best appetizer to serve with your summer dishes! Roast these Japanese peppers in a dry skillet until deliciously charred and flavor them with a simple ginger soy sauce. It’s full of umami and simply sublime. You’ll be obsessed.  </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup3-appe">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/2-APPETIZER/3-Agedashi Tofu.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Agedashi Tofu</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Crispy deep-fried tofu served in a flavorful umami sauce, Agedashi Tofu is a popular appetizer you can find at izakaya and Japanese restaurants. It requires deep-frying, but the process is easier than you think. Skip the bonito flakes to make it vegan-friendly!</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup4-appe">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/2-APPETIZER/4-Datemaki.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Datemaki</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Baked in the oven and rolled into a cylinder, Datemaki or Sweet Rolled Omelette is a must-have dish for your Japanese Osechi Ryori menu on New Year’s Day. Similar to tamagoyaki, this delicious omelette is tender and moist on the inside but with a golden brown exterior and sunny decorative shape.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->
            
            <div class="btn-wrapper">
                <a href="recipes-list.php#recipes-appe" class="btn2">View Full Bussin Course</a>
            </div>

        </div>

        <!-- DESSERTS -->
        <div id="desserts" class="menu-tab-content">

            <!-- ITEM START -->

            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup4-dessert">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/3-DESSERT/4-Japanese Cheesecake.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Japanese Cheesecake</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Light, jiggly, and fluffy, Japanese Cheesecake (Soufflé Cheesecake) is seriously the most delicious treat to serve for a crowd. It has the melt-in-your-mouth combination of creamy cheesecake and airy soufflé. A second (or more) serving is a guarantee!</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup1-dessert">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/3-DESSERT/1-Basque Burnt Cheesecake.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Basque Burnt Cheesecake</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Creamy on the inside and caramelized on the outside, this Basque Burnt Cheesecake is easier than it looks to make at home. Baked at a high temperature, the cheesecake`s iconic rich dark top is a showstopper! Follow my tips and tricks for a foolproof recipe. </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup2-dessert">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/3-DESSERT/2-Matcha Swiss Roll.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Matcha Swiss Roll</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Matcha Swiss Roll is a fluffy sponge cake with a swirl of fresh matcha cream rolled in the middle. Light, creamy, and mildly sweet, it’s a delicious afternoon snack or post-dinner dessert that you can enjoy with a cup of coffee or tea.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup3-dessert">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/3-DESSERT/3-Japanese Strawberry Shortcake.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Japanese Strawberry Shortcake</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>This simple and elegant cake is perfect for celebrating all occasions. Detailed step-by-step picture instructions are included.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->
            
            <div class="btn-wrapper">
                <a href="recipes-list.php#recipes-dessert" class="btn2">View Full Bussin Course</a>
            </div>

        </div>

        <!-- DRINKS -->
        <div id="drinks" class="menu-tab-content">

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup1-beve">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/4-BEVERAGE/1-Amazake.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Amazake</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Creamy with a natural mild sweetness, Amazake or sweet sake is a popular Japanese hot drink during the New Year`s and Hina Matsuri (Doll Festival). In this post, you will see two ways to make Amazake: one with rice koji and the other one with sake lees.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup3-beve">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/4-BEVERAGE/2-Matcha Latte.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Matcha Latte</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Learn how to make a creamy and frothy cup of homemade Matcha Latte! This hot beverage with green tea powder is packed with antioxidants and tastes better than Starbucks.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup3-beve">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/4-BEVERAGE/3-Royal Milk Tea.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Royal Milk Tea</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>A popular drink in Japan, Royal Milk Tea is made with Assam or Darjeeling tea leaves and milk. You can add sugar or honey to suit your taste. It`s a delicious drink to serve when you have friends over for tea time.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->

            <!-- ITEM START -->
            <div class="menu-item">
                <div class="menu-item-inner">
                    <a href="recipes-list.php#popup4-beve">
                        <div class="food-img">
                            <img class="lazy" data-src="./img/MAIN MENU/4-BEVERAGE/4-Honey Ginger Tea.jpg" alt="#">
                        </div>
                        <div class="text">
                            <div class="dish-details">
                                <h2>Honey Ginger Tea</h2>
                                <div class="line"></div>
                                <!-- <span class="price">None</span> -->
                            </div>
                            <div class="desc">
                                <p>Sip your way to a healthy start with a warming cup of shōgayu, or Honey Ginger Tea! Not only is it a potent cold and flu remedy, but ginger tea also boasts a myriad of health benefits. Learn how to make a simple cup at home and enjoy it all winter long.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ITEM END -->
            
            <div class="btn-wrapper">
                <a href="recipes-list.php#recipes-beve" class="btn2">View Full Bussin Course</a>
            </div>

        </div>
        
        

    </section>

    <!-- SECTION HEADING END -->

    
    <!-- FOOTER-QUOTE START -->

    <section class="footer-quote flex-col">
        <h1>From Our Kitchen To Yours, Let's Create Something Delicious</h1>
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
                <a href="#menu">Menu</a>
                <a href="index.php#about">About</a>
                <a href="index.php#consect">Contact Us</a>
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
    <script src="./assets/script-recipe.js"></script>

    <script>
        var myAudio = document.getElementById("bg-music");
        myAudio.volume = 0.2;

        // var myload = document.getElementById("bg-ambatu");
        // myload.volume = 0.2;
    </script>

</body>

</html>