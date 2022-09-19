<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>

<?php
include_once 'models/categories.php';
$category = new categories();
$conn = $category->connect();
$result=$category->get_once($conn,$_GET['id']);

while ($row=mysqli_fetch_assoc($result)) { 

echo "<div><h3> ".$row['name']."</h3>
<img src='".$row['image']."'>
</div>";

 }

 ?>

 <a href="./category_index.php" class="btn btn-primary">Back</a>

 </body>
</html>