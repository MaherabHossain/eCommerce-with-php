<?php

require_once('connection.php');

 if(isset($_REQUEST['id']))
 	$id = $_REQUEST['id'];
 {
 	$sql = "DELETE FROM `order` WHERE `order`.`id` ='$id'";

 	$run = mysqli_query($connection,$sql);
 	header('location:order.php');
 }

?>