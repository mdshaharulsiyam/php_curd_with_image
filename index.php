<?php
include 'db_con.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>curd</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
   <div class="container">
   <a href="add.php">add student</a>
    <table>
    <caption class="table_caption">student table</caption>
        <thead>
            <tr>
            <td>picture</td>
            <td>name</td>
            <td>roll</td>
            <td>department</td>
            <td>action</td>
            </tr>
        </thead>

        <?php
        $sellect = "SELECT * FROM `student`";
        $result = mysqli_query($con, $sellect);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $profile = $row['profile'];
            $name = $row['name'];
            $roll = $row['roll'];
            $department = $row['department'];
            echo '<tr>
            <td><img src="'.$profile.'" alt=""></td>
            <td>'.$name.'</td>
            <td>'.$roll.'</td>
            <td>'.$department.'</td>
            <td><a class="update" href="update.php?id='.$id.'">update</a><a class="delete" href="delete.php?id='.$id.'">delete</a></td>
        </tr>';
        }
        ?>
        
    </table>
   </div>
</body>
</html>