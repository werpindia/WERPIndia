<?php require "includes/common.php";
$passold=$_POST['password'];$passold_en=md5($passold);$passnew=$_POST['newpassword'];$passnew_en=md5($passnew);
$repassnew=$_POST['rnewpassword'];
$query="SELECT password FROM users WHERE password='$passold_en' AND id='".$_SESSION['id']."'";
$run_query=mysqli_query($con,$query) or die(mysqli_error($con));
$nos=mysqli_num_rows($run_query);$row=mysqli_fetch_array($run_query);
if($passnew!=$repassnew){
    header('location:settings.php?settings_error=Passwords do not Match!');
}
if($nos==0){
    header('location:settings.php?settings_error=Password does not exist!');
}
if($passnew==$repassnew && $passold_en==$row['password']){
	$queryn="UPDATE users SET password='$passnew_en' WHERE id='".$_SESSION['id']."'";
    $run_queryn=mysqli_query($con,$queryn) or die(mysqli_error($con));
    header('location:settings.php?settings_success=Password successfully changed!');
}
?>