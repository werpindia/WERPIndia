<?php require "includes/common.php";
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=$_POST['password'];
$enpassword=md5($password);
$query="SELECT id,name,email,role FROM users WHERE email='$email' AND password='$enpassword'";
$run_query=mysqli_query($con,$query) or die(mysqli_error($con));
$num_rows=mysqli_num_rows($run_query);
if($num_rows==0){
	header('location:login.php?login_error=Incorrect Login Details!');}
else{
	$row=mysqli_fetch_array($run_query);
	if(isset($_POST['adminCheck'])&&$_POST['adminCheck']=='Yes'){
		$_SESSION['role']=$row['role'];
	}
	$_SESSION['id']=$row['id'];
	$_SESSION['email']=$row['email'];
	header('location:index.php');
}
?>