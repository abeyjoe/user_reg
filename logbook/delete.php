<?php
include 'connect.php';

// return to login if if username is not used
session_start();
if(!isset($_SESSION['username'])){
    header('location:../login.php');
}


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from logbook where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfull";
        header('location:displaylogbook.php');
    }else{
        die(mysqli_error($con));
    }
}


?>