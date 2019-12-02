<?php require "includes/common.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title>Read Blog | MyVoice4Women</title>
        <?php include "includes/links.php";error_reporting(0);?>
        <!--Custom External stylesheet-->
        <link rel="stylesheet" type="text/css" href="styles/header.css"/>
        <link rel="stylesheet" type="text/css" href="styles/footer.css"/>
        <style>
            article p:nth-child(2){
                text-indent:5vw;
            }
            article:not(:first-child){
                font-family:souvenir,bembo,garamond,"Minion Pro","Times New Roman";
                font-size:1.2em;
            }
            header>h2{
                font-family:futura,rockwell,"Helvetica Neue","Super Grotesk",Montserrat;
                margin-bottom:30px;
            }
        </style>
    </head>

    <body>

        <!--Navbar-->
        <?php include "includes/header.php";?>
        
        
        <?php 
            $blogId=$_GET['blogId'];
            $query="SELECT * FROM blogs where id='$blogId'";
            $run_query=mysqli_query($con,$query) or die(mysqli_error($con));
            $row=mysqli_fetch_array($run_query);
        ?>
        <div class="container" style="margin-top:30px;margin-bottom:30px;">
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
                    <br/><h2><?php echo $row['title'];?></h2>
                    <script>
                        let title_new="<?php echo htmlspecialchars($row['title']); ?>";
                        document.getElementsByTagName("title")[0].innerHTML=title_new+" | MyVoice4Women";
                    </script>
                </header>
                <?php echo $row['description'];?>
            </article>
            <!--Share buttons-->
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_whatsapp"></a>
                <a class="a2a_button_email"></a>
                <a class="a2a_button_linkedin"></a>
            </div>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
        </div>  


        <!--Footer-->
        <?php include "includes/footer.php";?>


        <!--External JS file-->
        <script src="scripts/dynamic.js"></script>
    </body>
</html>