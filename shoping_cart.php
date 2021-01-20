<!DOCTYPE html>
<?php
require_once('header.php');
//session_start();
if(!isset($_SESSION['uniq_id']))
{
    header('location:sign_in.php');
}
?>
<!-- saved from url=(0078)https://mdbootstrap.com/previews/ecommerce-demo/examples/pages/basic/cart.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
  <!-- Your custom styles (optional) -->

</head>

<body class="skin-light">


  <?php 

  require_once('connection.php');

  $id = $_REQUEST['id'];

  $sql = "SELECT * FROM product WHERE id='$id'";

  $run = mysqli_query($connection,$sql);

  while ($data = mysqli_fetch_array($run)) {
  
  ?>
    <div class="jumbotron color-grey-light mt-70">
      <div class="d-flex align-items-center h-100">
        <div class="container text-center py-5">
          <h3 class="mb-0">Shopping cart</h3>
        </div>
      </div>
    </div>

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Block Content-->
      <section class="mt-5 mb-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-8">

            <!-- Card -->
            <div class="card wish-list mb-4">
              <div class="card-body">

                <h4 class="mb-4">Cart</h4>

                <div class="row mb-4">
                  <div class="col-md-5 col-lg-3 col-xl-3">
                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                      <img class="img-fluid w-100" src="admin/product_image/<?php echo $data['product_image']?>">
                      <a href="https://mdbootstrap.com/previews/ecommerce-demo/examples/pages/basic/cart.html#!">
                        
                      </a>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-9 col-xl-9">
                    <div>
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3><?php echo $data['product_name'];?></h3>
                          <p class="mb-3 text-muted text-uppercase small"><?php echo $data['product_description']?></p>
                        </div>
   
                        <div>

                        <!--work from here 
                         
                         need create from
                         

                        -->
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-0"><span><strong>৳<?php echo $data['product_price']?></strong></span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="mb-4">

              
              </div>
            </div>
            <h2 class="text-center"> <b>BILLING DETAILS</b> </h2>
            

                  <form class="shake" role="form" method="post" action="check_out.php" id="contactForm" name="contact-form" data-toggle="validator">
                     <div class="md-form">
                           <input name="c_qty" class="qty-input form-group" style="margin-left: 50px;padding-left: 10px;" type="number" min="1" value="1"/>
                            <label for="name" class=""><h4>Quantity</h4></label>
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <input type="hidden" name="p_name" value="<?php echo $data['product_name'];?>">
                            <input type="hidden" name="p_price" value="<?php echo $data['product_price'];?>">
                        </div>
                      <!-- Name -->
                      <div class="md-form">
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">Your Name</label>
                        <input class="form-control" id="name" type="text" name="c_name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                      <!-- email -->
                      <div class="md-form">
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Your Email</label>
                        <input class="form-control" id="email" type="email" name="c_email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      </div>

                      <div class="md-form">
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Your Phone</label>
                        <input class="form-control" id="email" type="text" name="c_phone" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      </div>

                      <div class="md-form">
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Your Address</label>
                        <input class="form-control" id="email" type="text" name="c_addr" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      </div>



                      <!-- Subject -->
                     
                      <!-- Message -->
                      <div class="md-form">
                      <div class="form-group label-floating">
                         <textarea type="text" id="message" name="c_mass" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Order notes</label>
                          <div class="help-block with-errors"></div>
                      </div>
                      </div>
                      <!-- Form Submit -->
                      <div class="form-submit mt-5">
                          <button class="btn btn-primary" name="submit_order" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i>go to
                  checkout</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
            <div class="card mb-4">
              <div class="card-body">

                <h5 class="mb-4">We accept</h5>

                <img class="mr-2" width="45px" src="./img/bkash.png" alt="Visa">
                <img class="mr-2" width="45px" src="./img/najad.png" alt="American Express">
                <img class="mr-2" width="45px" src="./img/roket.png" alt="Mastercard">
              </div>
            </div>
            <!-- Card -->

          </div>
          <!--Grid column-->
<?php
 }

?>  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="./Material Design Bootstrap_files/jquery-3.4.1.min.js.download"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="./Material Design Bootstrap_files/popper.min.js.download"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="./Material Design Bootstrap_files/bootstrap.js.download"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="./Material Design Bootstrap_files/mdb.min.js.download"></script>
    <!-- MDB Ecommerce JavaScript -->
    <script type="text/javascript" src="./Material Design Bootstrap_files/mdb.ecommerce.min.js.download"></script>
  <script>

  </script>


</body></html>


