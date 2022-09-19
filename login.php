<?php
 session_start();
include_once 'models/users.php';
$user = new users();
$conn = $user->connect();
$result=$user->login($conn,$_POST['email'],md5($_POST['password']));
  if (mysqli_num_rows($result) > 0) {
        while($row= mysqli_fetch_array($result)){
            $_SESSION['id_session']= $row['id'];
            $_SESSION['name_session']=$row[1];
            $_SESSION['role_session']=$row['role'];
        // var_dump($_SESSION);
        // die();
        }
    header('location:front/index.php?login=1');
  }else{

        header('location:index.php?login=0');
    }
