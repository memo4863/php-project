<?php 
echo "fgdf0";
session_start(); 
session_destroy();
var_dump($_SESSION);
// if(session_destroy()) { 
header("Location: index.php"); 
// } 
?>
