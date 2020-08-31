<?php
require_once('connection.php');

session_start();

if(isset($_REQUEST['submit']))
{
	 $sql = "SELECT * FROM admin_info";

     $run = mysqli_query($connection,$sql);
     $count=0;
     while($data = mysqli_fetch_array($run))
     {
     	if($data['user_name']==$_REQUEST['user_name'] && $data['user_pass']==$_REQUEST['user_pass'])
     	{
            $count++;
     		$_SESSION['user_name'] = $_REQUEST['user_name'];
     		header('location:admin_profile.php');
     	}
     }

     if($count==0)
     {
     	header('location:index.php');
     }
	
    
    	
}

?>