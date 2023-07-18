<?php
include'db_con.php';
$id=$_GET['id'];
$delete= "DELETE FROM `student` WHERE id=$id";
$result = mysqli_query($con, $delete);
if ($result) {
    header('Location: index.php');
}else{
    die('$conn -> mysqli_error');
}
?>