<?php require_once('header.php')?>
<?php
//session_start();
 if(isset($_SESSION['uniq_id'])){
   echo $_SESSION['uniq_id'];
 }
 if(isset($_SESSION['id'])){
  echo "<br>".$_SESSION['id'];
 }
?>
<div class="container">
	<div class="text-center mt-5">
	  <form method="POST">
	  	<input type="text" name="order_id" placeholder="Enter Order id" required>
		<input type="submit" name="track_order" class="btn btn-secondary ml-auto" value="Track Order">
	   </form>
	   <?php
	    require_once('connection.php');
	   if(isset($_REQUEST['track_order']))
	   { 
	   	 $order_id = $_REQUEST['order_id'];
	   	 $sql = "SELECT * FROM `order` WHERE o_id='$order_id'";
	   	 $run = mysqli_query($connection,$sql);
	   	?>       
        <?php
        while($data = mysqli_fetch_array($run))
        {
        ?>
           <table class="table table-striped custab">
    <thead>
      <br>
        <tr>
            <th >ID</th>
            <th>Customer Name</th>
            <th>Customer email</th>
            <th>Customer Phone</th>
            <th>Customer Adress</th>
            <th>Customer Note</th>
            <th>Product Name</th>
            <th>order id</th>
            <th>order quantity</th>
            <th>Total Amount</th>
            <th>Status</th>      
        </tr>
    </thead>    
            <tr>
                 <td><?php echo $data['id'];?></td>
                 <td><?php echo $data['c_name'];?></td>
                 <td><?php echo $data['c_email'];?></td>
                 <td><?php echo $data['c_phone'];?></td>
                 <td><?php echo $data['c_addr'];?></td>
                 <td><?php echo $data['c_mass'];?></td>
                 <td><?php echo $data['p_name'];?></td>
                 <td><?php echo $data['o_id'];?></td>
                 <td><?php echo $data['c_qty'];?></td>
                 <td><?php echo $data['t_amount'];?></td>
                 <td><h4><?php echo $data['progressbar'];?></h4></td>
                
            </tr>         
    </table>
    <?php
}
}
    ?>
	</div>
<h3 class="text-center mt-5">Wellcome To Our Shop :)</h3>
<br>  <p class="text-center">Shop With 15% Discount </p>
<hr>

<div class="row">
	<?php       
      require_once('admin/connection.php');
      $sql = "SELECT * FROM product";
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

