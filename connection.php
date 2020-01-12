<?php
session_start();
$con=mysqli_connect('localhost','root','','student');
if(!$con){
	echo "connection failed";
}
?>