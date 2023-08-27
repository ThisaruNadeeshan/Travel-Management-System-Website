<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'config.php';


$sql="delete from guider where id=$id";
$query = $dbh->prepare($sql);
$query->execute();
echo"Guider Deleted Successfully";
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="User Deleted Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>



	