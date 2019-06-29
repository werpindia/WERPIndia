<?php require "includes/common.php";
if(!isset($_SESSION['role'])){
    header('location:index.php');
}
$id = $_POST['id'];
if($id > 0){
    // Check if record exists
    $checkRecord = mysqli_query($con,"SELECT * FROM blogs WHERE id=".$id);
    $totalrows = mysqli_num_rows($checkRecord);
    if($totalrows > 0){
        //Approve record
        $query = "UPDATE blogs SET status='posted' WHERE id=".$id;
        mysqli_query($con,$query) or die(mysqli_error($con));
        echo 1;
        exit;
    }
}
echo 0;
exit;
?>