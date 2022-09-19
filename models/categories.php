<?php
include_once "database.php";

class categories extends database{

    public function add($c,$name,$image){
        $sql="insert into categories (name,image) values('".$name."','".$image."')";
        return  mysqli_query($c,$sql);
    }


    public function get_All($c){
        $sql="select * from  categories";
        return  mysqli_query($c,$sql);
    }

     public function get_once($c,$id){
        $sql="select * from  categories where id=".$id;
        return  mysqli_query($c,$sql);
    }

    public function remove(){
// query  connection , id  // get $_GET['']
    }

    public function edit(){

    }

}