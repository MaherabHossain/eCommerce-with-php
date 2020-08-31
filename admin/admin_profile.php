<?php
session_start();
  if(!isset($_SESSION['user_name']))
  {
  	header('location:index.php');
  }

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
	  <div class="page-header">
	    <h1 class="bg-primary text-center"><a href="admin_profile.php"style="color:white; text-decoration:none">Admin</a></h1> 
	    <h3 class="bg-success">User Name: <?php echo $_SESSION['user_name']?> </h3>
         <form action="log_out.php">
         	<button class="btn btn-danger" name="logout">Log Out</button>
         </form>
         <br>
         <a class="btn btn-success" href="order.php?mass">See Order</a>
         <br>

         <!--table--->
         <?php 
         require_once('connection.php');

         $sql = "SELECT * FROM product";
         $run = mysqli_query($connection,$sql);
            
         ?>
         <br>
    <div class="container">
    <div class="row">
    <table class="table table-striped custab">
    <thead>
    <a href="add_product.php" class="btn btn-success  pull-right"><b>+</b> Add new product</a>
  <?php
         if(isset($_REQUEST['mass'])){
         	echo $_REQUEST['mass'];
         }
         if(isset($_REQUEST['update']))
         	echo $_REQUEST['update'];
         if(isset($_REQUEST['delete']))
         	echo $_REQUEST['delete'];
         ?>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Product Catagory</th>
           <th class="text-center">Action</th>
        </tr>
    </thead>
    
 <?php 
      while($data = mysqli_fetch_array($run))
      {
      	?>
     
            <tr>

                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['product_name'];?></td>
                <td><img width="60px" src="product_image/<?php echo $data['product_image']?>" alt=""></td>
                 <td><?php echo $data['product_price'];?></td>
                 <td><?php echo $data['product_catagory'];?></td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="edit.php?id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            <?php
        }
  
    ?>
            
    </table>
    
    </div>
</div>
	  </div>	 
    </div>






</body>
</html>

