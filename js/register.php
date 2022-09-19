<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="inandout";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = 'INSERT INTO users (name)
VALUES ("'.$_POST['name'].'")';



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo $sql;
    // header('location:conn.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>