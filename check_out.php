<!DOCTYPE html>
<!-- saved from url=(0078)https://mdbootstrap.com/previews/ecommerce-demo/examples/pages/basic/cart.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Roboto Font -->
  <link rel="stylesheet" href="./Material Design Bootstrap_files/css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./Material Design Bootstrap_files/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./Material Design Bootstrap_files/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./Material Design Bootstrap_files/mdb-pro.min.css">
  <!-- Material Design Bootstrap Ecommerce -->
  <link rel="stylesheet" href="./Material Design Bootstrap_files/mdb.ecommerce.min.css">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="main.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
  <!-- Your custom styles (optional) -->

</head>

<body class="skin-light">



  <!--Main Navigation-->
  <header>


    <nav class="navbar navbar-default bg-secondary">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand text-white" href="index.php">AmarDokan</a>
      </div>
      <ul class="nav navbar-nav">
        <li ><a href="electronics.php?set" class="text-white" style="text-decoration: none;">Electronics</a></li>
        <li><a href="fashion.php?set" class="text-white" style="text-decoration: none;">Fashion</a></li>
        <li><a href="toys.php?set" class="text-white"style="text-decoration: none;">Toys</a></li>
      </ul>
    </div>
</nav>
    <div class="jumbotron color-grey-light mt-70">
      <div class="d-flex align-items-center h-100">
        <div class="container text-center py-5">
          <h3 class="mb-0">Shopping cart</h3>
        </div>
      </div>
    </div>
</header>
<?php
if(isset($_REQUEST['c_name'])&&isset($_REQUEST['c_name'])&&isset($_REQUEST['p_price']))
{


 $c_name = $_REQUEST['c_name'];
 $p_id = $_REQUEST['id'];
 $c_email = $_REQUEST['c_email'];
 $c_phone = $_REQUEST['c_phone'];
 $c_addr = $_REQUEST['c_addr'];
 $c_mass = $_REQUEST['c_mass'];
 $c_qty = $_REQUEST['c_qty'];
 $p_name = $_REQUEST['p_name'];
 $t_amount = $_REQUEST['p_price']*$_REQUEST['c_qty'];
 $o_id = uniqid();
 
?>

<div class="container mr-5">
    <div class="col-lg-8 ">
            <!-- Card -->
            <div class="card mb-4">
              <div class="card-body">
     
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    <h4>PRODUCT</h4>
                    <span><h4>SUBTOTAL</h4></span>
                  </li>                 
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    <?php echo $p_name;?> (x <?php echo $c_qty;?>)
                    <span>৳<?php 
                      echo $t_amount;
                      ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                   Order Id
                    <span><?php 
                      echo $o_id;
                      ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                    Shipping
                    <span>Gratis</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                    <div>
                      <strong>The total amount of</strong>
                      <strong>
                        <p class="mb-0">(including VAT)</p>
                      </strong>
                    </div>
                    <span><strong>৳<?php 
                      echo $t_amount;
                      ?></strong></span>
                  </li>
                </ul>
                <div class="card mb-4">
              <div class="card-body">
                <h5 class="mb-4">We accept</h5>
                <img class="mr-2" width="45px" src="./img/bkash.png" alt="Visa">
                <img class="mr-2" width="45px" src="./img/najad.png" alt="American Express">
                <img class="mr-2" width="45px" src="./img/roket.png" alt="Mastercard"><br>                 
              </div>
              <p> <h5>For bKash 019xxxxxxxx</h5>
              <h5>For Nagad 017xxxxxxxx</h5>
              <h5>For Roket 016xxxxxxxx</h5>(Note) Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
            </div>
              <form method="POST">
                <input type="hidden" name="c_name" value="<?php echo $c_name;?>">
                <input type="hidden" name="p_id" value="<?php echo $p_id;?>">
                <input type="hidden" name="c_email" value="<?php echo $c_email;?>">
                <input type="hidden" name="c_phone" value="<?php echo $c_phone;?>">
                <input type="hidden" name="c_addr" value="<?php echo $c_addr;?>">
                <input type="hidden" name="c_mass" value="<?php echo $c_mass;?>">
                <input type="hidden" name="c_qty" value="<?php echo $c_qty;?>">
                <input type="hidden" name="p_name" value="<?php echo $p_name;?>">
                <input type="hidden" name="t_amount" value="<?php echo $t_amount;?>">
                <input type="hidden" name="o_id" value="<?php echo $o_id; ?>">
                <input type="submit" class="btn btn-primary btn-block waves-effect waves-light" name="submit" value="submit">
              </form>
             
              <?php
              }
              require_once('admin/class.php');
              if(isset($_REQUEST['submit']))
              {
                 $c_name = $_REQUEST['c_name'];
                 $p_id = $_REQUEST['p_id'];
                 $c_email = $_REQUEST['c_email'];
                 $c_phone = $_REQUEST['c_phone'];
                 $c_addr = $_REQUEST['c_addr'];
                 $c_mass = $_REQUEST['c_mass'];
                 $c_qty = $_REQUEST['c_qty'];
                 $p_name = $_REQUEST['p_name'];
                 $t_amount = $_REQUEST['t_amount'];
                 $o_id =  $_REQUEST['o_id'];
           
                $ob = new main();
                $run = $ob->order($c_name,$p_id,$c_email,$c_phone,$c_addr,$c_mass,$c_qty,$p_name,$t_amount,$o_id);

                 if($run)
         echo "<div class='alert alert-success container'>Order Submited :)</div>";
       else
        header('location:index.php?submit=<div class="alert alert-danger container">Failed :(</div>');
      echo " <div class='container'> 
               <form action='index.php'>
                 <button class='btn btn-primary m-auto'>go Home Page</button>
               </form>
               </div>";
              }
              ?>

              </div>             
            </div>            <!-- Card -->
        </div>
        </div>



