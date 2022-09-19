<?php

class database{
 public  $serverName="localhost";
 public  $userName="root";
  public  $password="";
  public $database="market"; 
    public function connect(){
    // connection db
    $connect=mysqli_connect($this->serverName,$this->userName,$this->password,$this->database);
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";
    return $connect;
    }
}
