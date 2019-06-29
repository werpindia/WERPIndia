<?php ob_start();require "includes/common.php";error_reporting(0);?>
<!DOCTYPE html>
<html>
    <head>
        <title>Blogs - MyVoice</title>
        <?php include "includes/links.php";?>
        <link rel="stylesheet" type="text/css" href="styles/header.css"/>
        <link rel="stylesheet" type="text/css" href="styles/articles.css"/>
        <link rel="stylesheet" type="text/css" href="styles/footer.css"/>    
    </head>

    <body>

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
        <?php include "includes/header.php";?>


        <!--Blogs-->
        <div class="container">
            <div class="row blogRow">
                <?php
                    if($_GET['userId']!=null){
                        $var=$_GET['userId'];
                        $query="SELECT ub.blog_id,b.id,b.file_id,b.title,b.description FROM users_blogs ub INNER JOIN blogs b ON ub.blog_id=b.id WHERE ub.user_id='$var' AND b.status='posted'"; 
                    }
                    else{ 
                        $query="SELECT * FROM blogs WHERE status='posted'";
                    }
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
                                echo '<h2>'.$row['title'].'</h2>';
                            echo '</header>';
                            echo '<p>'.substr($row['description'],0,100).'... Read More'.'</p>';
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
