<?php
 
require_once("connection.php");
if(isset($_REQUEST['id']))
{
  $getId = $_REQUEST['id'];

  $sql = "DELETE FROM product WHERE id=$getId";

  $run = mysqli_query($connection,$sql);

  if($run){
  	header('location:admin_profile.php?delete=<div class="alert alert-danger">Product Deleted :)</div>');
  }
}


?>