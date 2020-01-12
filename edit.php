<?php
include 'connection.php';
$id=$_GET['id'];
$s="select * from user where id=$id";
$query=mysqli_query($con,$s);
while($row=mysqli_fetch_array($query)){
  $id=$row['id'];
  $name=$row['name'];
  $email=$row['email'];
  $mobile=$row['mobile'];
  $password=$row['password'];
   $hobbie =array();
   if($row['hobbie']){
         $hobbie = explode(',', $row['hobbie']);  
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
    <form method="post" action="update.php?id=<?php echo $id ?>">
      <h1 class="text-center text-info">update form</h1>
      <div class="form-group">
      <label>NAME:</label>
      <input type="text" name="name" value="<?php echo $name ?>" class="form-control">
      </div>
      <div class="form-group">
      <label>EMAIL:</label>
      <input type="text" name="email"  value="<?php echo $email ?>" class="form-control">
      </div>
      <div class="form-group">
      <label>MOBILE:</label>
      <input type="text" name="mobile"  value="<?php echo $mobile?>" class="form-control">
      </div>
      <div class="form-group">
      <label>PASSWORD:</label>
      <input type="text" name="password"  value="<?php echo $password ?>" class="form-control">
      </div>

      <div class="form-group row">
      <label>HOBBIES:</label>
      <br>
         <div class="col-md-3 form-group">
           <label>Cricket</label>
           <input type="checkbox" name="hobbie[]"  value="Cricket" <?= (in_array('Cricket', $hobbie))?'Checked':'';?> >
         </div>
         <div class="col-md-3 form-group">
           <label>Chess</label>
           <input type="checkbox" name="hobbie[]"  value="Chess"  <?= (in_array('Chess', $hobbie))?'Checked':'';?> >
         </div>
         <div class="col-md-3 form-group">
           <label>Football</label>
           <input type="checkbox" name="hobbie[]"  value="Football"  <?= (in_array('Football', $hobbie))?'Checked':'';?>>
         </div>
         <div class="col-md-3 form-group">
           <label>Coding</label>
           <input type="checkbox" name="hobbie[]"  value="Coding" <?= (in_array('Coding', $hobbie))?'Checked':'';?> >
         </div>
      </div>
      <button class="btn btn-success" name="submit">update</button>
       </form>
  </div>
</div>

</body>
</html>
