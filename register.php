<?php
include_once 'models/users.php';
$user = new users();
$conn = $user->connect();

if (isset($_POST['name'])&&!empty($_POST['name'])&&$_POST['name']!=='' &&isset($_POST['email'])&&!empty($_POST['email'])&&$_POST['email']!==''&&isset($_POST['password'])&&!empty($_POST['password'])&&$_POST['password']!=='') {

   $reg=$user->add($conn,$_POST['name'],$_POST['email'],md5($_POST['password']),$_POST['role']);

}else{
   header('location:index.php?reg=0');
}

if ($reg) {
     header('location:index.php?reg=1');
} else {
    header('location:index.php?reg=0');
}

