<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdsna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>

<!------ Include the above in your HEAD tag ---------->




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<nav class="navbar navbar-default bg-secondary">
  <div class="container-fluid container">
    <div class="navbar-header">
      <a class="navbar-brand text-white" href="index.php">AmarDokan</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="electronics.php?set" class="text-white" style="text-decoration: none;">Electronics</a></li>
      <li><a href="fashion.php?set" class="text-white" style="text-decoration: none;">Fashion</a></li>
      <li><a href="toys.php?set" class="text-white"style="text-decoration: none;">Toys</a></li>
    </ul>
  </div>
</nav>

<div class="container">

<h3 class="text-center mt-5">Wellcome To Our Shop :)</h3>
<br>  <p class="text-center">Shop With 15% Discount </p>
<hr>


<h4 class="text-black">Electronic</h4>
<br>
<div class="row">
	<?php 
     
      require_once('connection.php');
      $sql = "SELECT * FROM product WHERE product_catagory='electronic'";
      $run = mysqli_query($connection,$sql);
     while($data = mysqli_fetch_array($run))
     {

	?>
<div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img  src="admin/product_image/<?php echo $data['product_image']?>" alt=""></div>
		<figcaption class="info-wrap">
				<h4 class="title"><?php echo $data['product_name'];?></h4>
				<p class="desc"><?php echo $data['product_description'];?></p>
				<div class="rating-wrap">
					<div class="label-rating">Catagory : <?php echo $data['product_catagory']?></div>
					
				</div> 
		</figcaption>
		<div class="bottom-wrap">
			<a href="shoping_cart.php?id=<?php echo $data['id']?>" class="btn btn-sm btn-primary float-right">Order Now</a>	
			<div class="price-wrap h5">
				<span class="price-new">৳<?php echo $data['product_price']?></span> <del class="price-old">
                      <?php
                      $price = $data['product_price'];                      
						$percentage = 15;
						$new_width = ($percentage / 100) * $price;
						echo round($price+$new_width);
					?>
				</del>
			</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->

<?php
}
?>
</div> <!-- row.// -->
</div> 
<!--container.//-->

<br><br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h4 class="text-white">HTML UI KIT <br> Ready to use Bootstrap 4 components and templates </h4>
<p class="h5 text-white"> for Ecommerce, marketplace, booking websites 
and product landing pages</p>   <br>
<p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com  
 <i class="fa fa-window-restore "></i></a></p>
</div>
<br><br><br>
</article>
</body>
</html>


