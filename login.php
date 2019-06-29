<?php require "includes/common.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login - MyVoice</title>
        <?php include "includes/links.php";error_reporting(0);?>
        <!--Custom External stylesheet-->
        <link rel="stylesheet" type="text/css" href="styles/header.css"/>
        <link rel="stylesheet" type="text/css" href="styles/form.css"/>
        <link rel="stylesheet" type="text/css" href="styles/footer.css"/>
    </head>

    <body>

        <!--Navbar-->
        <?php include "includes/header.php";?>


        <div class="container" style="margin-top:20px;">
        <?php if($_GET['login_error']){ ?>
            <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><?php echo $_GET['login_error']; ?></strong>
            </div>
        <?php } ?>
        <?php if($_GET['signup_error']){ ?>
            <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><?php echo $_GET['signup_error']; ?></strong>
            </div>
        <?php } ?>

        <!--div style="background-color:lightgray;margin:auto;width:70%;">
            <div style="float:left;width:100%;height:60px;text-align:center;background-color:pink;"><h4 style="padding-top:2%;">Login as Author</h4></div>
            <form method="POST" action="login_submit.php">
                <div class="form-group">
                    <label for="emailLogin">Email Id</label>
                    <input id="emailLogin" type="text" name="email" class="form-control" placeholder="Email"/>
                </div>
                <div class="form-group">
                    <label for="passwordLogin">Password</label>
                    <input id="passwordLogin" type="password" name="password" class="form-control" placeholder="Password"/>
                </div>
                <div class="form-group">
                    Have admin privileges?&nbsp;&nbsp;<input id="checkboxLogin" type="checkbox" name="adminCheck" style="transform:scale(2.0)" value="Yes"/>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
            <div>
                <h4>Don't have an account? Register</h4>
            </div>       
        </div-->
    

        <!--Location for form-->
        <div class="form">
	        <form class="form-horizontal signin" method="post" action="login_submit.php">
		        <div class="form-wrap" style="position: relative;">
		            <h2>Login</h2>
		            <div class="form-group">
			            <div class="relative">
				            <input name="email" class="form-control" id="emailLogin" type="email" required="required" autofocus="" title="" autocomplete="" placeholder="Email">
				            <i class="fa fa-user"></i>
			            </div>
		            </div>
		            <div class="form-group">
		  	            <div class="relative">
			  	            <input name="password" class="form-control" type="password" required="required" placeholder="Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
			  	            <i class="fa fa-key"></i>
		  	            </div>
		  	            <!--span class="pull-right"><small><a href="#">Forgot Password?</a></small></span-->
					</div>
					<div class="form-group">
						<div class="relative">
							<input style="float:left;width:41px;margin-top:5px;" type="checkbox" id="checkboxLogin" name="adminCheck" value="Yes"/>
							Have Admin privileges?
						</div>
					</div>
		            <div class="login-btn">
		  	            <button class="movebtn movebtnsu" type="submit">Login <i class="fa fa-fw fa-lock"></i></button>
		            </div>
		        </div>
		        <div class="sign-up">
	  	            <a href="#" class="signbtn"><small>Not a member? Sign Up <i>(Click me)</i></small></a>
	            </div>
	        </form>
	

	        <form class="form-horizontal signup" name="f1"  onsubmit="return matchpass()"  action="signup_script.php" method="post">
		        <div class="form-wrap" style="position: relative;">
		            <h2>Sign Up</h2>
		            <div class="form-group">
			            <div class="relative">
				            <input class="form-control" type="email" name="email" required="true" autofocus="" title="" autocomplete="" placeholder="Email Address">
				            <i class="fa fa-envelope"></i>
			            </div>
		            </div>
		            <div class="form-group">
			            <div class="relative">
				            <input class="form-control" id="name" type="text" name="name" required="true" autofocus="" title="" autocomplete="" placeholder="Username">
				            <i class="fa fa-user"></i>
			            </div>
		            </div>
		            <div class="form-group">
		  	            <div class="relative">
			  	            <input class="form-control" name="password" type="password" required="true" placeholder="Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
			  	            <i class="fa fa-key"></i>
		  	            </div>
		  	            <span class="pull-right"><small><a href="#" id="showhide">show / hide</a></small></span>
		            </div> 
		            <div class="form-group">
		  	            <div class="relative">
			  	            <input class="form-control"  name="password2" type="password" required="" placeholder="Retype your Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
			  	            <i class="fa fa-key"></i>
		  	            </div>
		  	            <span class="pull-right"><small><a href="#" id="showhide">show / hide</a></small></span>
		            </div>          	
		            <div class="login-btn">
		  	            <button class="movebtn movebtnsu"  value="sub" name="sub"  type="submit">Submit<i class="fa fa-fw fa-paper-plane"></i></button>
		            </div>
		        </div>
		        <div class="sign-up">
	  	            <a href="#" class="signbtn"><small>Already member? Sign in <i>(Click me)</i></small></a>
	            </div>
	        </form>
        </div>
        </div>


        <!--External JS file-->
        <script src="scripts/dynamic.js"></script>
    </body>
</html>