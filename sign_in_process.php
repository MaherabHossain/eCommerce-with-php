<?php
require_once('connection.php');

session_start();

	 $sql = "SELECT * FROM users_info";

     $run = mysqli_query($connection,$sql);
     /*if($run){
         echo "ok";
     }
     else{
         echo "something wrong";
     }*/
     $count=0;
     while($data = mysqli_fetch_array($run))
     {
        //echo $data['user_email']."<br>";
        //echo $data['user_pass']."<br>";

     	if($data['user_email']==$_REQUEST['user_email'] && $data['user_pass']==$_REQUEST['user_pass'])
     	{
              $count++;
            $data['uniq_id'];
             $_SESSION['uniq_id'] = $data['uniq_id'];
             $_SESSION['id'] = $data['id'];
             header('location:profile.php');
             exit();
     	}
     }

     if($count==0)
     {
     	header('location:sign_in.php?mass=something wrong');
     }  	


?>