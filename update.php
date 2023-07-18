<?php
include 'db_con.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update student info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<?php
$id = $_GET['id'];
$sellect = "SELECT * FROM `student` WHERE id=$id";
$result = mysqli_query($con, $sellect);
$row = mysqli_fetch_assoc($result = mysqli_query($con, $sellect));
$profile = $row['profile'];
$name = $row['name'];
$roll = $row['roll'];
$department = $row['department'];
echo'<form action="update_data.php" method="POST" enctype= "multipart/form-data">
<input type="hidden" value='.$id.' name = "id">
<input type="file" value='.$profile.' name = "profile">
<input type="text" value='.$name.' name="studentname">
<input type="number" value='.$roll.' name="roll">
<input type="text" value='.$department.' name="department">
<input type="submit" name="submit">
</form>'
?>
</div>
</body>
</html>