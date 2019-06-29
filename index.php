<?php require "includes/common.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title>MyVoice - WERP India</title>
        <?php include "includes/links.php";?>
        <link rel="stylesheet" type="text/css" href="styles/header.css"/>
        <link rel="stylesheet" type="text/css" href="styles/articles.css"/>
        <link rel="stylesheet" type="text/css" href="styles/footer.css"/>
    </head>

    <body>

        <!--Carousel-->
        <div id="topCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#topCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#topCarousel" data-slide-to="1"></li>
                <li data-target="#topCarousel" data-slide-to="2"></li>
                <li data-target="#topCarousel" data-slide-to="3"></li>
                <li data-target="#topCarousel" data-slide-to="4"></li>
            </ul>          
            <!-- The slideshow -->
            <div class="carousel-inner" id="myCarousel">
                <div class="carousel-item active">
                    <img src="https://i.ibb.co/M8r6hS1/carousel3.jpg" alt="carousel image women empowerment">
                </div>        
                <div class="carousel-item">
                    <img src="https://i.ibb.co/wJBpqh3/carousel1.jpg" alt="carousel image women empowerment">
                </div>
                <div class="carousel-item">
                    <img src="https://i.ibb.co/4MvBfYC/carousel.jpg" alt="carousel image women empowerment">
                </div>
                <div class="carousel-item">
                    <img src="https://i.ibb.co/sgKbcZV/carousel4.jpg" alt="carousel image women empowerment">
                </div>
                <div class="carousel-item">
                    <img src="https://i.ibb.co/gdbHbs5/carousel2.png" alt="carousel image women empowerment">
                </div>
            </div>              
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#topCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#topCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>              
        </div>


        <!--Marquee-->
        <div class="marquee" style="background:#eee;overflow:hidden;white-space:nowrap;font-style:italic;">
            <a class="marqueeAnchor" href="#"><span class="marqueeText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="marqueeAnchor" href="#"><span class="marqueeText">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="marqueeAnchor" href="#"><span class="marqueeText">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="marqueeAnchor" href="#"><span class="marqueeText">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></a>
        </div>


        <!--Navbar-->
        <!--nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <a class="navbar-brand" href="#"><img class="d-inline-block align-top img-fluid" src="http://www.werpindia.org/images/logo.jpg"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </nav-->


        <!--Navbar-->
        <?include "includes/header.php";?>


        <!--Blogs-->
        <div class="container">
            <div class="row" id="blogRow">

                <div class="col-md-6 col-lg-4">
                    <a class="articleLink" href="#">
                        <article>
                            <header>
                                <img class="img-fluid rounded focus" src="https://picsum.photos/400"/>
                                <h2>Tycb Hexyvb2</h2>
                            </header>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </article>
                    </a>
                    <hr/>
                    <a class="articleLink" href="#">
                        <article>
                            <header>
                                <img class="img-fluid rounded focus" src="https://picsum.photos/1024/768"/>
                                <h2>Tycb Hexyvb2</h2>
                            </header>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </article>
                    </a>
                    <hr/>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a class="articleLink" href="#">
                        <article>
                            <header>
                                <img class="img-fluid rounded focus" src="https://picsum.photos/800/600"/>
                                <h2>Tycb Hexyvb2</h2>
                            </header>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </article>
                    </a>
                    <hr/>
                    <a class="articleLink" href="#">
                        <article>
                            <header>
                                <img class="img-fluid rounded focus" src="https://picsum.photos/200"/>
                                <h2>Tycb Hexyvb2</h2>
                            </header>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </article>
                    </a>
                    <hr/>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a class="articleLink" href="#">
                        <article>
                            <header>
                                <img class="img-fluid rounded focus" src="https://picsum.photos/1366/768"/>
                                <h2>Tycb Hexyvb2</h2>
                            </header>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </article>
                    </a>                   
                    <hr/>
                    <a class="articleLink" href="#">
                        <article>
                            <header>
                                <img class="img-fluid rounded focus" src="https://picsum.photos/640/360"/>
                                <h2>Tycb Hexyvb2</h2>
                            </header>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </article>
                    </a>
                    <hr/>
                </div>

            </div>
        </div>


        <!--Footer-->
        <?php include "includes/footer.php";?>


        <!--External JS file-->
        <script src="scripts/dynamic.js"></script>
    </body>
</html>