<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
   <!-- enctype= "multipart/form-data" -->
   <form action="insert_data.php" method="POST" enctype= "multipart/form-data">
        <input type="file" placeholder="choose a profile picture" name = "profile">
        <input type="text" placeholder="insert student name" name="studentname">
        <input type="number" placeholder="insert student roll" name="roll">
        <input type="text" placeholder="insert student department" name="department">
        <input type="submit" name="submit">
        
    </form>
   </div>
</body>
</html>