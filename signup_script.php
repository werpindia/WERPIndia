<?php require "includes/common.php";
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=$_POST['password'];
if(strlen($password)<8){
	header('location:login.php?signup_error=Password too short!');}
$enpassword=md5($password);
$query="SELECT id FROM users WHERE email='$email'";
$run_query=mysqli_query($con,$query) or  die(mysqli_error($con));
$num=mysqli_num_rows($run_query);
if($num>0){
    header('location:login.php?signup_error=User ID already exists!');
}
else{
	$query="INSERT INTO users(name,email,password,role) VALUES ('$name','$email','$enpassword','Yes')";
	$run_query=mysqli_query($con,$query) or die(mysqli_error($con));
    $q="SELECT id FROM users WHERE email='$email'";
    $run_q=mysqli_query($con,$q) or die(mysqli_error($con));
    $_SESSION['id']=(mysqli_fetch_array($run_q))['id'];
	$_SESSION['email']=$email;echo "SignUp Successful !";
	header('location:index.php');
}
?>