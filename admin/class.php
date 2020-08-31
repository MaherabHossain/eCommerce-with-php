<?php

require_once('connection.php');

class main 
{
	public function insert_product($product_name,$product_price,$product_image_name,$catagory,$product_description)
	{
		global $connection;
	    
	    $sql = "INSERT INTO product (product_name,product_price,product_image,product_catagory,product_description) VALUES ('$product_name','$product_price','$product_image_name','$catagory','$product_description')";
	    $run = mysqli_query($connection,$sql);

	    if ($run) {
          return true;
	    }else
	    {
	      return false;
	    }

	}

	public function update_product($product_name,$product_price,$catagory,$id,$product_description)
	{
		global $connection;
		$sql = "UPDATE `product` SET `product_name` = '$product_name', `product_price` = '$product_price', `product_catagory` = '$catagory',`product_description` = '$product_description' WHERE `id` = $id";

		$run = mysqli_query($connection,$sql);

		return $run;
	}

	public function order($c_name,$p_id,$c_email,$c_phone,$c_addr,$c_mass,$c_qty,$p_name,$t_amount,$o_id)
	{
		

		global $connection;
		$sql = "INSERT INTO `order` (`id`, `c_name`, `c_email`, `c_phone`, `c_addr`, `c_mass`, `p_name`, `p_id`, `o_id`, `c_qty`, `t_amount`, `progressbar`) VALUES (NULL, '$c_name', '$c_email', '$c_phone', '$c_addr', '$c_mass', '$p_name', '$p_id', '$o_id', '$c_qty', '$t_amount', 'Pending')";
       
       $run = mysqli_query($connection,$sql);

       return $run;
	}

	public function update_status($id,$status)
	{
		global $connection;
		$sql = "UPDATE `order` SET `progressbar` = '$status' WHERE `id` = $id";

		$run = mysqli_query($connection,$sql);

		return $run;

	}


}


?>

