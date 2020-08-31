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

	<?php 

	require_once('connection.php');

	$sql = "SELECT * FROM `order";
	$run = mysqli_query($connection,$sql);

	

	?>
	<div class="container ">
		<h1 class="bg-primary text-center"><a href="admin_profile.php"style="color:white; text-decoration:none">Admin</a></h1> 
		<h3 class="bg-success text-center">all order</h3> <br>
		<?php 

		 if(isset($_REQUEST['status']))
		 	echo $_REQUEST['status'];

		?>
		<div class="tableFixHead">
	<table class="table table-striped custab">
    <thead>
        <tr class="fixed-top">
            <th >ID</th>
            <th>Customer Name</th>
            <th>Customer email</th>
            <th>Customer Phone</th>
            <th>Customer Adress</th>
            <th>Customer Note</th>
            <th>Product Name</th>
            <th>Product id</th>
            <th>order id</th>
            <th>order quantity</th>
            <th>Total Amount</th>
            <th>Status</th>
           <th class="text-center">Edit Status</th>
        </tr>

        <?php

        while($data = mysqli_fetch_array($run))
        {
        	

        ?>
    </thead>
    
     
            <tr>

                 <td><?php echo $data['id'];?></td>
                 <td><?php echo $data['c_name'];?></td>
                 <td><?php echo $data['c_email'];?></td>
                 <td><?php echo $data['c_phone'];?></td>
                 <td><?php echo $data['c_addr'];?></td>
                 <td><?php echo $data['c_mass'];?></td>
                 <td><?php echo $data['p_name'];?></td>
                 <td><?php echo $data['p_id'];?></td>
                 <td><?php echo $data['o_id'];?></td>
                 <td><?php echo $data['c_qty'];?></td>
                 <td><?php echo $data['t_amount'];?></td>
                 <td><h4><?php echo $data['progressbar'];?></h4></td>
                
                <td class="text-center"><a class='btn btn-info btn-xs' href="edit_order.php?id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="delete_order.php?id=<?php echo $data['id'];?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
             <?php
               }
            ?>
            
            
    </table>
    </div>
    </div>
    

</body>
</html>