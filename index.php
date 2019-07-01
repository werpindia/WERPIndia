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
            <ul class="carousel-indicators" style="z-index:1;">
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
        <?include "includes/header.php";?>


        <!--Blogs-->
        <div class="container">
            <div class="row blogRow">

            <?php 
                $query="SELECT * FROM blogs WHERE status='posted' ORDER BY id DESC LIMIT 10";
                $run_query=mysqli_query($con,$query) or die(mysqli_error($con));
                $num_rows=mysqli_num_rows($run_query);
                if($num_rows==0){
                    header('location:error.php');
                }
                while($row=mysqli_fetch_array($run_query)){
                echo '<div class="col-md-6 col-xl-4 blogColumn">';
                    echo '<a class="articleLink" href="show.php?blogId=';echo $row['id'].'" target="_blank">';
                        echo '<article>';
                            echo '<header>';
                                if($row['file_id']==null){
                                    echo '<img class="img-fluid rounded focus" src="https://i.ibb.co/ZNDm012/logo.jpg"/>';
                                }else{
                                    $fileId=$row['file_id'];
                                    $q="SELECT * FROM uploads WHERE id='$fileId'";
                                    $run_q=mysqli_query($con,$q) or die(mysqli_error($con));   
                                    $res=mysqli_fetch_array($run_q);
                                    $path="uploads/".$res['name'];
                                    if($res['type']=='image'){     
                                echo '<img class="img-fluid rounded focus" src="'.$path.'"/>';
                                } else {
                                echo '<video class="articleVideo" src="'.$path.'" controls="controls" style="width:100%;">';
                                echo '</video>';
                                } }
                                echo '<h3>'.$row['title'].'</h3>';
                            echo '</header>';
                            echo '<p>'.substr($row['description'],0,200).'... Read More'.'</p>';
                        echo '</article>';
                    echo '</a>';
                    echo '<hr/>';
                echo '</div>';}?>

            </div>
        </div>


        <!--Footer-->
        <?php include "includes/footer.php";?>


        <!--External JS file-->
        <script src="scripts/dynamic.js"></script>
    </body>
</html>
