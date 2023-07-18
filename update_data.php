<?php 
include 'db_con.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $random = rand(1111, 9999);
    $profile = 'upload/'.$random.$_FILES['profile']['name'];
    move_uploaded_file($_FILES['profile']['tmp_name'], $profile);
    $name = $_POST['studentname'];
    $roll = $_POST['roll'];
    $department = $_POST['department'];
}else{
    die(mysqli_connect_error($con));
}
$sql ="UPDATE `student` SET `profile`='$profile',`name`='$name',`roll`='$roll',`department`='$department' WHERE id=$id";
$result = mysqli_query($con, $sql);
if($result){
    header('Location: index.php');
}else{
    die('$conn -> mysqli_error');
}
?>