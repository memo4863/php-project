<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "market";

$conn = mysqli_connect($server_name, $user_name, $password, $database_name);
if (!$conn) {
    die("error" . mysqli_error($conn));
}

?>