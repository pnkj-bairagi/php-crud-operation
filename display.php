<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'connection.php';

if (isset($_SESSION['message'])):?> 
<div class="alert alert-<?= $_SESSION['msg_type'] ?>">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div> 
<?php endif ?>
<div class="container">
<div class="col-lg-12">
	<h1 class="text-center text-info">DISPLAY TABLE DATA</h1>
	<table class="table table-responsive table-hover">
	<tr class="text-info text-center">
		<th class="text-center">ID</th>
		<th class="text-center">NAME</th>
		<th class="text-center">EMAIL</th>
		<th class="text-center">MOBILE</th>
		<th class="text-center">PaSSWORD</th>
		<th class="text-center">Hobbie</th>
		<th colspan="3"  class="text-center" >Action</th>
	</tr>
	<?php
	
	$s="select * from user";
	$query=mysqli_query($con,$s);
	while($value=mysqli_fetch_array($query)){
     ?>
    	<tr class="text-center">
    		<td><?php echo $value['id'];?></td>
    		<td><?php echo $value['name'];?></td>
    		<td><?php echo $value['email'];?></td>
    		<td><?php echo $value['mobile'];?></td>
    		<td><?php echo $value['password'];?></td>
    		<td><?php echo $value['hobbie'];?></td>
    		<td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $value['id']?>">DELETE</a></button></td>
    		<td><button class="btn btn-success"><a href="edit.php?id=<?php echo $value['id']?>">EDIT</a></button></td>
    		<td><button class="btn btn-info"><a href="insert.php">INSERT</a></button></td>
    	</tr>
<?php    }
	?>
	</table>
</div>
</div>
</body>
</html>