<?php
include 'connection.php';
$id=$_GET['id'];
$s="delete from user where id=$id";
$query=mysqli_query($con,$s);
if($query){
	$_SESSION['message']="RECORD HAS BEEN DELETED";
	$_SESSION['msg_type']="danger";
	header("location:display.php");
}else{
	echo '<script>alert("invalid password")</script>';
}
?>