<?php require "includes/common.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title>No Results | MyVoice4Women</title>
        <?php include "includes/links.php";error_reporting(0);?>
        <!--Custom External stylesheet-->
        <link rel="stylesheet" type="text/css" href="./styles/header.min.css"/>
        <link rel="stylesheet" type="text/css" href="./styles/footer.min.css"/>
        <style>
            p.c{
                font-family: 'Press Start 2P', cursive;
                color:black;
                font-size:220%;
            }
            div.item{
                text-align:center;
                background-color: transparent;
                border: 1px solid transparent;
                margin-top: 90px;
                margin-bottom: 1px;
            }
            div#center{
                margin-right:auto;
                margin-left:auto;
            }
            div#center>ul{
	            list-style-type:none;
	            padding-left:0;
	            text-align:center;
                font-size:150%;
	            font-style:italic;
            }
            /* Do not display "about" banner on mobile devices */
            @media screen and (max-width: 450px){ 
                .aboutBanner{
                    display:none;
                }
            }
        </style>
    </head>

    <body>
        <!-- Banner for "about" -->
        <!-- div style="margin-bottom:0;" class="aboutBanner alert alert-primary alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Get to know us more -
                Read <a class="aboutLink" href="aboutus.php">About us </a>|
                Meet <a class="aboutLink" href="meet_the_team.php">Our Team </a>|
                Read <a class="aboutLink" href="our_story.php">Our Story</a>
            </strong>
        </div -->

        <!--Navbar-->
        <?php include "includes/header.php";?>

        <!--WERP India Menu Bar-->
        <!-- div class="navList2">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="meet_the_team.php">Our Team</a></li>
                <li><a href="coming_soon.php">Journal</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Work with Us</a></li>
                <li id="publications"><a href="#">Publications</a>
                    <ul class="submenu" style="display:none;list-style-type:none;">
                        <li><a href="working_papers.php">Working Papers</a></li>
                        <li><a href="briefs.php">Briefs</a></li>
                    </ul>
                </li>
            </ul>
        </div -->

        <!--Icon for small devices to open WERP India Menu bar-->
        <!-- div>
            <i id="navBar2Upper-menu" class="navBar2-menu fas fa-plus-square"></i>
        </div -->
        
        <!--Error Message-->
        <div id="center" class="container item">
            <img src="https://image.flaticon.com/icons/svg/202/202381.svg" width="150px" height="150px">
            <br/>
            <p class="c">Nothing to display</p>
            <ul>
                <li>We have got nothing to show you on this web page.</li>
                <li>Press the back button or try visiting another page.</li>
            </ul>
            <br/>
        </div>

        <!--Footer-->
        <?php include "includes/footer.php";?>

        <!--jQuery animation for submenu of navlist2-->
        <script>
            $(".navList2>ul>li").click(function(){
                $(this).children("ul").toggle(100);
            });
        </script>
        
        <!--External JS file-->
        <script src="scripts/dynamic.min.js"></script>
    </body>
</html>