<?php
 require_once('header.php');
?>
<?php 
  
  //session_start();

  if (isset($_SESSION['uniq_id'])) {
    header('location:profile.php');
    exit();
  }

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container mt-5">
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                           <?php
                           if(isset($_REQUEST['mass'])){
                               echo '<div class="alert alert-danger">password and confirm password not same :(</div>';
                           }
                           ?>
                            <h3 class="card-header text-center">Register</h3>
                            <div class="card-body" style="background-color: rgb(122, 118, 118);">

                            <form action="sign_up_process.php" method="POST">

                    <input type="text" name="user_name" placeholder="Name" required>
                        <br>
                        <br>
                    <input type="email" name="email_addr" placeholder="Email" required>
                        <br>
                        <br>
                    <input type="text" name="phn_number" placeholder="Mobile Number" required>
                        <br>
                        <br>
                    <input type="password" name="password" placeholder="Password" required>
                        <br>
                        <br>
                    <input type="password" name="conf_pass" placeholder="Confirm Password"required>
                        <br>
                        <br>
                    <input type="submit" name="sign_up" value="Sign Up" required>
                    <br>
                    <br>

</form>

                                <div class="login-register">
                                        <a style="text-decoration:none;text-color:#fff;" class="text-center" href="sign_in.php"><h5>Login</h5></a>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
</div>