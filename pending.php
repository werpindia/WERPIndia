<?php ob_start();require "includes/common.php";?>
<?php if(!isset($_SESSION['id'])){
        header('location:index.php');
    } else if(!isset($_SESSION['role'])){
        header('location:index.php');
    } else{?>
<!DOCTYPE html>
<html>
    <head>
        <title>Verification | MyVoice4Women</title>
        <?php include "includes/links.php";error_reporting(0);?>
        <!--Custom External stylesheet-->
        <link rel="stylesheet" type="text/css" href="styles/header.min.css"/>
        <link rel="stylesheet" type="text/css" href="styles/footer.min.css"/>
    </head>

    <body>

        <!--Navbar-->
        <?php include "includes/header.php";?>

        <?php $query="SELECT * FROM blogs WHERE status='pending'";
        $run_query=mysqli_query($con,$query) or die(mysqli_error($con));
        $num_rows=mysqli_num_rows($run_query);
        if($num_rows==0){
            header('location:error.php');
        }?>

        <div class="container" style="margin-top:30px;margin-bottom:30px;">
            <div class="row">
                <?php while($row=mysqli_fetch_array($run_query)){?>
                    <div class="offset-1 col-10">
                       <article>
                            <header>
                                <?php if($row['file_id']==null){?>
                                <img class="img-fluid rounded focus" src="https://i.ibb.co/ZNDm012/logo.jpg"/>
                                <?php }else{
                                        $fileId=$row['file_id'];
                                        $q="SELECT * FROM uploads WHERE id='$fileId'";
                                        $run_q=mysqli_query($con,$q) or die(mysqli_error($con));
                                        $res=mysqli_fetch_array($run_q);
                                        $path="uploads/".$res['name'];
                                        if($res['type']=='image'){     
                                ?>
                                <img class="img-fluid rounded focus" src="<?php echo $path;?>"/>
                                <?php   } else {?>
                                <video src="<?php echo $path;?>" autoplay="autoplay" controls="controls">
                                </video>
                                <?php     } 
                                        }?>
                                <br/><br/><h2><?php echo $row['title'];?></h2><br/>
                                <button class="removePost btn btn-outline-danger" id="removePost_<?php echo $row['id'];?>">Remove</button>
                                &nbsp;&nbsp;<button class="approvePost btn btn-outline-info" id="approvePost_<?php echo $row['id'];?>">Approve</button>
                            </header><br/>
                            <p><?php echo substr(strip_tags($row['description']),0,200)."... ".'<a href="show.php?blogId='.$row['id'].'" target="_blank">Read More</a>';?></p>
                        </article>
                    <hr/><br/>
                    </div>
                <?php }?>
            </div>
        </div>

        <?php include "includes/footer.php";?>

        <!--External JS file-->
        <script src="scripts/dynamic.min.js"></script>
    </body>
</html>
<?php }?>
