<?php ob_start();require "includes/common.php";
?>
<!-- The below queries where executed to add username to blog description column
$run_query=mysqli_query($con,"SELECT id,description FROM blogs WHERE id>26") or die(mysqli_error($con));
while($row=mysqli_fetch_array($run_query)){
    $run_query2=mysqli_query($con,"SELECT ub.user_id FROM users_blogs ub INNER JOIN blogs b ON ub.blog_id=b.id WHERE ub.blog_id=".$row['id']) or die(mysqli_error($con));
    $row2=mysqli_fetch_array($run_query2);
    
    $v=$row2['user_id'];
    $run_query3=mysqli_query($con,"SELECT u.name FROM users_blogs ub INNER JOIN users u ON ub.user_id=u.id WHERE ub.user_id='$v'") or die(mysqli_error($con));
    $row3=mysqli_fetch_array($run_query3);
    $name=mysqli_real_escape_string($con,$row3['name']);
    $prev_desc=mysqli_real_escape_string($con,$row['description']);
    $v1='<em>By '.$name.'</em>&nbsp;&circledcirc;<hr/>'.$prev_desc;
    
    $query4="UPDATE blogs SET description='$v1' WHERE id=".$row['id'];
    $run_query4=mysqli_query($con,$query4) or die(mysqli_error($con));
}-->
<!DOCTYPE html>
<html>
    <head>
        <title>MyVoice4Women - WERP</title>
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
                <li data-target="#topCarousel" data-slide-to="5"></li>
            </ul>          
            <!-- The slideshow -->
            <div class="carousel-inner" id="myCarousel">
                <div class="carousel-item active">
                    <img src="https://i.ibb.co/dmTYcZh/carousel6-1.jpg" alt="carousel image women empowerment">
                </div>
                <div class="carousel-item">
                    <img src="https://i.ibb.co/Chvjvc2/carousel5.jpg" alt="carousel image women empowerment">
                </div>
                <div class="carousel-item">
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
                <!--div class="carousel-item">
                    <img src="https://i.ibb.co/gdbHbs5/carousel2.png" alt="carousel image women empowerment">
                </div-->
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
            <a class="marqueeAnchor" href="login.php"><span class="marqueeText">...Become a Voice for Women by publishing your thought, Stories, experiences, research report, video and lots more. Sign Up now and voice your Voice4Women. #signup #voice4women @werpindia</span></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!--a class="marqueeAnchor" href="#"><span class="marqueeText">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="marqueeAnchor" href="#"><span class="marqueeText">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="marqueeAnchor" href="#"><span class="marqueeText">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></a-->
        </div>


        <!--WERP India Menu Bar-->
        <div class="navList2">
            <ul>
                <li><a href="aboutus.html" target="_blank">About Us</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="https://www.youtube.com/watch?v=_vabo-oP44c" target="_blank">Women TV</a></li>
                <li><a href="#">Research Domain</a></li>
                <li id="publications"><a href="#">Publications</a>
                    <ul class="submenu" style="display:none;list-style-type:none;">
                        <li><a href="working_papers.php">Working Papers</a></li>
                        <li><a href="#">Journal Article</a></li>
                        <li><a href="briefs.php">Briefs</a></li>
                        <li><a href="#">Abstracts</a></li>
                        <li><a href="#">Conference Papers</a></li>
                        <li><a href="#">Book</a></li>
                        <li><a href="#">Book Chapter</a></li>
                    </ul>
                </li>
                <li><a href="#">Get Involved</a></li>
            </ul>
        </div>
        

        <!--Navbar-->
        <?php include "includes/header.php";?>

        <!--Icon for small devices to open WERP India Menu bar-->
        <div>
            <i class="navBar2-menu fas fa-plus-square"></i>
        </div>

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
                            echo '</header><br/>';
                            echo '<p>'.substr(strip_tags($row['description']),0,200).'... Read More'.'</p>';
                        echo '</article>';
                    echo '</a>';
                    echo '<hr/>';
                echo '</div>';}?>

            </div>
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
        <script src="scripts/dynamic.js"></script>
    </body>
</html>