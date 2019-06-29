<?php require "includes/common.php";?>
<?php if(!isset($_SESSION['id'])){
        header('location:index.php');
    } else{ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Change Password - MyVoice</title>
        <?php include "includes/links.php";error_reporting(0);?>
        <!--Custom External stylesheet-->
        <link rel="stylesheet" type="text/css" href="styles/header.css"/>
        <link rel="stylesheet" type="text/css" href="styles/footer.css"/>
    </head>

    <body>

        <!--Navbar-->
        <?php include "includes/header.php";?>

        <div class="container" style="margin-top:30px;margin-bottom:30px;">
            <?php if($_GET['settings_error']){ ?>
                <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><?php echo $_GET['settings_error']; ?></strong>
                </div>
            <?php } ?>
            <?php if($_GET['settings_success']){ ?>
                <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><?php echo $_GET['settings_success']; ?></strong>
                </div>
            <?php } ?>
            
            <form method="post" action="settings_script.php">
	            <div class="form-group">
		            <label for="password">Old Password</label>
		            <input id="password" type="password" placeholder="Enter your old password" name="password" class="form-control" required="true" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
		        </div>
		        <div class="form-group">
		            <label for="newpassword">New Password</label>
	                <input id="newpassword" type="password" placeholder="Enter new password" name="newpassword" class="form-control" required="true" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
		        </div>
		        <div class="form-group">
		            <label for="rnewpassword">Re-Enter New Password</label>
	                <input id="rnewpassword" type="password" placeholder="Re-Enter new password" name="rnewpassword" class="form-control" required="true" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
		        </div>
		        <button type="submit" class="btn btn-outline-info" value="submit">Change</button>
	        </form>
        </div>

        <?php include "includes/footer.php";?>

        <!--External JS file-->
        <script src="scripts/dynamic.js"></script>
    </body>
</html>
<?php }?>