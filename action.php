<?php
include_once('connect.php');
$query = "select * from categories,products where id=cat_id";

$result = mysqli_query($conn, $query);
while ($rows = mysqli_fetch_assoc($result)) {
     echo " <tr><td>" . $rows['id'] . "</td>";
     echo "<td>" . $rows['name'] . "</td>";
     echo "<td><a href='show.php?id=" . $rows['id'] . "'> show </a>";
     echo "<a href='edit.php?id=" . $rows['id'] . "'> edit </a>";
     echo "<a href='delet.php?id=" . $rows['id'] . "'> delet </a></td>";
     echo "</tr>";
 

}
