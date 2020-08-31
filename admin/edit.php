<?php
require_once('connection.php');
$id = $_REQUEST['id'];

$sql = "SELECT * FROM product WHERE id='$id'";
$run = mysqli_query($connection,$sql);

while($data = mysqli_fetch_array($run))
{

?>



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

<form class="form-horizontal" action='' method="POST" enctype="multipart/form-data">
  <fieldset>
    <div id="legend">
      <legend class="">Edit Product</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Product Name</label>
      <div class="controls">
        <input type="text" id="username" name="product_name" value="<?php echo $data['product_name']?>" placeholder="" class="input-xlarge" required>
        
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="product_price">Product Price</label>
      <div class="controls">
        <input type="text" id="product_price" name="product_price" value="<?php echo $data['product_price']?>" class="input-xlarge" required>
        <p class="help-block">Enter Price in taka :)</p>
      </div>
    </div>

      <div class="control-group">
      	 <label class="control-label" for="password">Catagory </label>
      	   <div class="controls">
        <select class="selectpicker" data-style="btn-info" name="catagory" >
	      <option>electronic</option>
	      <option>fashion</option>
	      <option>toys</option>
      </select>
      </div> 	
       <label for="textAreaField">Product Description</label> 
<textarea  name="product_description" id="textAreaField" rows="4"  cols="50"><?php echo $data['product_description']?></textarea>   
      </div>
      
 <br>
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" name="edit_product" required>Edit Product</button>
      </div>
    </div>
  </fieldset>
  <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
</form>

<?php 
  
}
 if(isset($_REQUEST['edit_product'])){
   
   require_once('class.php');
    $product_name = $_REQUEST['product_name'];
    $product_description = $_REQUEST['product_description'];
      $catagory = $_REQUEST['catagory'];
      $product_price = $_REQUEST['product_price'];
      $id = $_REQUEST['id'];

$ob = new main();
$run=$ob->update_product($product_name,$product_price,$catagory,$id,$product_description);
if($run)
{
  header('location:admin_profile.php?update=<div class="alert alert-success">Product Update Successfully :)</div>');
}
else
{
  header('location:admin_profile.php?update=<div class="alert alert-danger">Failed :(</div>');
}

}

?>

</div>

</body>
</html>