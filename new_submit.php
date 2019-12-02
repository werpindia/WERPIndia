<?php require "includes/common.php";
$uId=$_SESSION['id'];

//Get username from id
$run_q=mysqli_query($con,"SELECT name FROM users WHERE id=".$uId) or die(mysqli_error($con));
$name_row=mysqli_fetch_array($run_q);
$author_name=mysqli_real_escape_string($con,$name_row['name']);

$title=mysqli_real_escape_string($con,$_POST['title']);
$description='<em>By '.$author_name.'</em>&nbsp;&circledcirc;<hr/>'.mysqli_real_escape_string($con,$_POST['description']);
//$description=strip_tags($description1, '<br><strong><em><p><ul><li>');
$status='pending';

if(file_exists($_FILES['uploadedFile']['tmp_name']) && is_uploaded_file($_FILES['uploadedFile']['tmp_name'])) {
    $uploadedFileName=$_FILES["uploadedFile"]["name"];
    $mime = $_FILES['uploadedFile']['type'];
    if(strstr($mime, "video/")){
        $filetype = "video";
    }
    else if(strstr($mime, "image/")){
        $filetype = "image";
    }
    else{
        header('location:new.php?new_error=Incorrect File Format!');
    }
    $folder="uploads/";
    $newFileName=preg_replace('/\s+/', '_', $uploadedFileName);
    $val=move_uploaded_file($_FILES["uploadedFile"]["tmp_name"],"$folder".$newFileName);
    $query1="INSERT INTO uploads(type,name) VALUES('$filetype','$newFileName')";
    $run_query1=mysqli_query($con,$query1) or die(mysqli_error($con));
    $fileId=mysqli_insert_id($con);
    $query2="INSERT INTO blogs(file_id,title,description,status) VALUES('$fileId','$title','$description','$status')";
    $run_query2=mysqli_query($con,$query2) or die(mysqli_error($con));
    $blogId=mysqli_insert_id($con);
}
else{
    $query2="INSERT INTO blogs(title,description,status) VALUES('$title','$description','$status')";
    $run_query2=mysqli_query($con,$query2) or die(mysqli_error($con));
    $blogId=mysqli_insert_id($con);
}
$query="INSERT INTO users_blogs(user_id,blog_id) VALUES('$uId','$blogId')";
$run_query=mysqli_query($con,$query) or die(mysqli_error($con));
header('location:new.php?new_success=Blog submitted for verification!');
?>