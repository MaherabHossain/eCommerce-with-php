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
<link rel="stylesheet" href="style.css">
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
      <?php
      session_start();
       if(!isset($_SESSION['uniq_id'])){
         ?>
         <li><a href="sign_in.php?set" class="text-white"style="text-decoration: none;">Sign In</a></li>
      <li><a href="sign_up.php?set" class="text-white"style="text-decoration: none;">Sign Up</a></li>
      <?php
       }else{
         ?>
         <li><a href="profile.php" class="text-white"style="text-decoration: none;">Profile</a></li>
         <?php
       }
      ?>
    </ul>
  </div>
</nav>
