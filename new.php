<?php require "includes/common.php";?>
<?php if(!isset($_SESSION['id'])){
        header('location:index.php');
    } else{ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>New Blog - MyVoice</title>
        <?php include "includes/links.php";error_reporting(0);?>
        <!--Custom External stylesheet-->
        <link rel="stylesheet" type="text/css" href="styles/header.css"/>
        <link rel="stylesheet" type="text/css" href="styles/footer.css"/>
        <style>
            label{
                font-weight:bold;
                font-family:futura,rockwell,"Helvetica Neue","Super Grotesk",Montserrat;
            }
        </style>
    </head>

    <body>

        <!--Navbar-->
        <?php include "includes/header.php";?>

        <div class="container" style="margin-top:30px;margin-bottom:30px;">
        <?php if($_GET['new_error']){ ?>
            <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><?php echo $_GET['new_error']; ?></strong>
            </div>
        <?php } ?>
        <?php if($_GET['new_success']){ ?>
            <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><?php echo $_GET['new_success']; ?></strong>
            </div>
        <?php } ?>

        <form method="post" action="new_submit.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" placeholder="Blog Title" required="required" id="title" type="text" name="title"/>
            </div>
            <div class="form-group">
                <label for="upload">Image/Video</label>
                <input class="form-control" id="upload" type="file" name="uploadedFile"/>
            </div>
            <div class="form-group">
                <label for="content">Blog Content</label>
                <div class="alert alert-info alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>For paragraphs, wrap the content with &lt;p&gt;&lt;/p&gt;. e.g.:&lt;p&gt;This is a paragraph...&lt;/p&gt;</strong><br/>
                    <strong>For bold text, use &lt;strong&gt;Text to be bolded...&lt;/strong&gt;</strong><br/>
                    <strong>To italicize text, use &lt;em&gt;Text to be italicized...&lt;/em&gt;</strong><br/>
                    <strong>To give a line break, use &lt;br&gt;. e.g.:&lt;br&gt;This will move to next line...</strong><br/>
                </div>
                <textarea class="form-control" required="required" rows="10" name="description" id="content"></textarea>
            </div>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
        </div>

        <?php include "includes/footer.php";?>

        <!--External JS file-->
        <script src="scripts/dynamic.js"></script>
    </body>
</html>
<?php }?>