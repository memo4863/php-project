<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>

<?php
 session_start();
//  var_dump($_SESSION);die();
 if (!isset($_SESSION['role_session'])||$_SESSION['role_session']!="Manager") {
    header('location:index.php');
 }
include_once 'models/categories.php';
$category = new categories();
$conn = $category->connect();

$result = $category->get_All($conn);  

echo "<table class='table'> <tr> <td>ID</td> <td>Name</td> <td>Image</td> <td>Actions</td></tr>";
while ($row=mysqli_fetch_assoc($result)) {  
    echo "<tr> <td>". $row['id']."</td>";  
    echo "<td>".$row['name']."</td>";
    echo "<td> <img src='".$row['image']."'  style='width: 10%;height: 10%;'></td>";
    echo "<td> <a  class='btn btn-danger' href='delete.php?id=".$row['id']."'> Delete</a>
    <a  class='btn btn-warning' href='edit.php?id=".$row['id']."'> Edit</a>
    <a  class='btn btn-primary' href='category_show.php?id=".$row['id']."'> Show</a>
 
    </td>";
    echo "</tr>";
}
?>

</table>
</body>
</html>