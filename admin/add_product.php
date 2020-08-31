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
      <legend class="">Add Product</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Product Name</label>
      <div class="controls">
        <input type="text" id="username" name="product_name" placeholder="" class="input-xlarge" required>
        
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="product_price">Product Price</label>
      <div class="controls">
        <input type="text" id="product_price" name="product_price" placeholder="" class="input-xlarge" required>
        <p class="help-block">Enter Price in taka :)</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Product Image</label>
      <div class="controls">
        <input id="input-b2" name="product_image" type="file" class="file"  required>
         <p class="help-block">File Should be image :)</p>

      </div>
  </div>

      <div class="control-group">
      	 <label class="control-label" for="password">Catagory </label>
      	   <div class="controls">
        <select class="selectpicker" data-style="btn-info" name="catagory">
	      <option>electronic</option>
	      <option>fashion</option>
	      <option>toys</option>
      </select>
      </div> 
      <label for="textAreaField">Product Description</label> 
<textarea name="product_description" id="textAreaField" rows="4"  cols="50"></textarea> 	
      </div>
      
<br>
   
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" name="add_produce" required>Add Product</button>
      </div>
    </div>
  </fieldset>
</form>


<?php require_once('class.php');

   $ob = new main();
   if(isset($_REQUEST['add_produce']))
   {
   	  $product_name = $_REQUEST['product_name'];
   	  $catagory = $_REQUEST['catagory'];
   	  $product_description = $_REQUEST['product_description'];
   	  $product_price = $_REQUEST['product_price'];
   	  $product_image_name = $_FILES['product_image']['name'];
   	  $product_image_tmp = $_FILES['product_image']['tmp_name'];
   	  $location = "product_image/";
   	  $nameForDb = uniqid().".jpg";
   	  move_uploaded_file($product_image_tmp,$location."$nameForDb");
   	  $run = $ob->insert_product($product_name,$product_price,$nameForDb,$catagory,$product_description );

   	  if($run)
   	  {
   	  	header('location:admin_profile.php?mass=<div class="alert alert-success">Product Added :)</div>');
   	  }
   	  	
   	  else{
   	  	header('location:admin_profile.php?mass=<div class="alert alert-danger">Failed :(</div>');
   	  }
   	  	
   }

?>
</div>

</body>
</html>