<?php

require_once('connection.php');

 $user_name = $_REQUEST['user_name'];
 $user_email = $_REQUEST['email_addr'];
 $user_phone = $_REQUEST['phn_number'];
 $pass = $_REQUEST['password'];
 $conf_pass = $_REQUEST['conf_pass'];

 /*(echo $user_name;
 echo $user_email;
 echo $user_phone;
 echo $pass;
 echo $conf_pass;
 */
$count = 0;
 ///insert user info in the user_info -> in the main table
 $length = 10;

$uniq_id = uniqid();
 //$uniq_id = array_merge(range('a','z'),range('A','Z'));
 echo $uniq_id;
  if($pass != $conf_pass){
  header("location: sign_up.php?mass=problem");
 }
 ///main work in this page
 else{
  $sql = "INSERT INTO users_info (user_name,user_email,user_phone,uniq_id,user_pass) VALUES ('$user_name','$user_email','$user_phone','$uniq_id',
  '$pass')";
  //$sql = "INSERT INTO `users_info`(`user_name`, `user_pass`, `user_phone`, `user_email`, `uniq_id`) VALUES ($user_name,$pass,$user_phone,$user_email,$uniq_id)";
  $run = $run = mysqli_query($connection,$sql);
  if($run){
    $count++;
  }
  
////bd connection for user info database
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "user_info_ecommerce";
 
 
    $connection = mysqli_connect($host,$dbuser,$dbpass,$dbname);
 
    if($connection==false){
      echo "db connection problem";
    }else{
      $count++;
    }
 ///user tabe create
  
  $sql2 = "CREATE TABLE $uniq_id (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    order_id VARCHAR(30) NOT NULL
    )";
    
    if (mysqli_query($connection, $sql2)) {
     $count++;
    } else {
      echo "Error creating table: " . mysqli_error($connection);
    }
   if($count==3){
     header('location:sign_in.php');
   }
   

 }








