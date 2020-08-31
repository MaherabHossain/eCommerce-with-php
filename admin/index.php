
<?php 
  
  session_start();

  if (isset($_SESSION['user_name'])) {
    header('location:admin_profile.php');
    exit();
  }

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>Admin</h1>
    </div>

    <!-- Login Form -->
    <form method="post" action="log_in_process.php">
      <input type="text" id="login" class="fadeIn second" name="user_name" placeholder="user name" required>
      <input type="text" id="password" class="fadeIn third" name="user_pass" placeholder="password" required>
      <input type="submit" class="fadeIn fourth" value="Log In" name="submit" required>
    </form>

  </div>
