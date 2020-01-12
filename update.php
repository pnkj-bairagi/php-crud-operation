<?php
include 'connection.php';
if(isset($_POST['submit'])){
	$id=$_GET['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	 $hobbie = "";
  if(isset($_POST['hobbie'])){
    $hobbie = implode(',', $_POST['hobbie']);
  }
	$s="update user set name='$name',email='$email',mobile='$mobile',password='$password', hobbie='$hobbie' where id=$id";
	$query=mysqli_query($con,$s);
	if($query){
		$_SESSION['message']="RECORD HAS BEEN UPDATED";
	    $_SESSION['msg_type']="info";

		header("location:display.php");
	}else{
		echo "invalid password";
	}
}
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="col-md-6 m-auto">
    <form method="post">
      <h1 class="text-center text-info">Registration form</h1>
      <div class="form-group">
      <label>NAME:</label>
      <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
      <label>EMAIL:</label>
      <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
      <label>MOBILE:</label>
      <input type="text" name="mobile" class="form-control">
      </div>
      <div class="form-group">
      <label>PASSWORD:</label>
      <input type="password" name="password" class="form-control">
      </div>
      <button class="btn btn-primary" name="submit">update</button>
       </form>
  </div>
</div>

</body>
</html>
