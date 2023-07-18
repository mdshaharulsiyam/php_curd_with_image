<?php 
include 'db_con.php';
// if (!empty($_POST['submit'])) {

    // $profile ='/upload'.$random. $_FILES['profile']['name'];
    // move_uploaded_file($_FILES['profile']['tmp-name'],$profile);
//     $name = $_POST['sname'];
//     $roll = $_POST['roll'];
//     $department = $_POST['department'];
//     echo '$name';
// }
if (!empty($_POST['submit'])) {
    $random = rand(1111, 9999);
    $profile = 'upload/'.$random.$_FILES['profile']['name'];
    move_uploaded_file($_FILES['profile']['tmp_name'], $profile);
    $name = $_POST['studentname'];
    $roll = $_POST['roll'];
    $department = $_POST['department'];
}
    $sql = "INSERT INTO `student`(`profile`, `name`, `roll`, `department`) VALUES ('$profile','$name','$roll','$department')";

    $result = mysqli_query($con, $sql);
if ($result) {
    header('Location: index.php');
}else{
    die('$conn -> mysqli_error');
}

?>