<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

   <div class="container">
	<h1 class="bg-primary text-center"><a href="admin_profile.php"style="color:white; text-decoration:none">Admin</a></h1> 
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action='' method="POST">
  
      <div class="control-group">
        <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
          	 <label class="control-label" for="password">Update Status </label>
      	   <div class="controls">
        <select class="selectpicker" data-style="btn-info" name="status">
	      <option>Payment Processing</option>
	      <option>Packing</option>
	      <option>Shiping</option>
        <option>delivered</option>
      </select>
      </div>  	
      </div>      
<br>
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" name="update_status" required>Update Status</button>
      </div>
    </div>
  </fieldset>
</form>

<?php 

require_once('class.php');
$ob = new main();
if(isset($_REQUEST['update_status']))
{
   $id = $_REQUEST['id'];
   $status  = $_REQUEST['status'];
   $run = $ob->update_status($id,$status);

   if($run){
    header('location:order.php?status=<div class="alert alert-success">Status Updated :)</div>');
 }else{
 header('location:order.php?status=<div class="alert alert-danger">Failed :(</div>');

}

}



?>

</div>

</body>
</html>