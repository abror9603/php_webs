<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel.</title>

    <!-- swiper css link -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- fontawesome file link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./icons/css/all.min.css">

    <!-- our css file link -->

    <link rel="stylesheet" href="./css/stylesheet.css?v=<?php echo time(); ?>">

  
</head>
<body>


    <!-- header section start  -->

        <section class="header">
            <a href="index.php" class="logo">travel.</a>

            <nav class="navbar">
                <a href="index.php">home</a>
                <a href="about.php">about</a>
                <a href="package.php">package</a>
                <a href="book.php">book</a>
            </nav>
            <div id="menu_btn" class="fas fa-bars"></div>
        </section>

    <!-- header section end -->

    <!-- home section start -->
        <div class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide" style="background:url(img/home-slide-1.jpg) ; background-repeat:no-repeat ;">
                        <div class="content">
                            <span>explore, discower, travel</span>
                            <h3>travel around the world</h3>
                            <a href="package.php" class="btn">discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(img/home-slide-2.jpg) ; background-repeat:no-repeat ;">
                        <div class="content">
                            <span>explore, discower, travel</span>
                            <h3>discover the new places</h3>
                            <a href="package.php" class="btn">discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(img/home-slide-3.jpg) ; background-repeat:no-repeat ;">
                        <div class="content">
                            <span>explore, discower, travel</span>
                            <h3>make your tour worthwhile</h3>
                            <a href="package.php" class="btn">discover more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    <!-- home section end -->

    <!-- Section services starts -->

        <section class="services">
            <h1 class="heading-title">our services</h1>
            <div class="box-container">
                <div class="box">
                    <img src="./img/icon-1.png" alt="">
                    <h3>adventure</h3>
                </div>

                <div class="box">
                    <img src="./img/icon-2.png" alt="">
                    <h3>tour guide</h3>
                </div>

                <div class="box">
                    <img src="./img/icon-3.png" alt="">
                    <h3>trekking</h3>
                </div>

                <div class="box">
                    <img src="./img/icon-4.png" alt="">
                    <h3>camp fire</h3>
                </div>

                <div class="box">
                    <img src="./img/icon-5.png" alt="">
                    <h3>off road</h3>
                </div>

                <div class="box">
                    <img src="./img/icon-6.png" alt="">
                    <h3>camping</h3>
                </div>
            </div>
        </section>

    <!-- Section services ends -->


    <!-- Start footer section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="index.php">  <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php">  <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php">  <i class="fas fa-angle-right"></i> package</a>
                <a href="book.php">  <i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#">  <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#">  <i class="fas fa-angle-right"></i> about us</a>
                <a href="#">  <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#">  <i class="fas fa-angle-right"></i> terms of us</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">  <i class="fas fa-phone"></i> +111-121-1212</a>
                <a href="#">  <i class="fas fa-phone"></i> +222-242-2424</a>
                <a href="#">  <i class="fas fa-envelope"></i> abrorUz96@gmail.com</a>
                <a href="#">  <i class="fas fa-map"></i> Jizzax, Zomin , -60</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook"> </i> facebook</a>
                <a href="#"><i class="fab fa-telegram"> </i> telegram</a>
                <a href="#"><i class="fab fa-instagram"> </i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"> </i> linkedin</a>
            </div>
        </div>

        <div class="credit">created by <span>mr. abror developer</span> | all rights reserved! </div>
    </section>
    <!-- End footer section -->

    <!-- swiper js file link -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- our js file link-->

    <script src="js/script.js?v=<?php echo time(); ?>"></script>
</body>
</html>