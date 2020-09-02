<?php require_once('header.php')?>
<div class="container">

<h3 class="text-center mt-5">Wellcome To Our Shop :)</h3>
<br>  <p class="text-center">Shop With 15% Discount </p>
<hr>


<h4 class="text-black">Fashion</h4>
<br>
<div class="row">
	<?php 
     
      require_once('admin/connection.php');
      $sql = "SELECT * FROM product WHERE product_catagory='fashion'";
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
<?php require_once('footer.php');?>