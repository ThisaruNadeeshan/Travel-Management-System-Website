<?php

session_start();

if(!isset($_SESSION['id'])){
header('location:../index.php');	
}

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'config.php';


$qry="delete from tblusers where id=$id";
$result=mysqli_query($con,$qry);

if($result){
    echo"DELETED";
    header('Location:../deletemem.php');
}else{
    echo"ERROR!!";
}
}
?>