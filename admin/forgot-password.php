<?php 
  require_once("includes/config.php");
  if (isset($_POST["reset"])) {
        
    $email = $_POST["email"];
    
    $data = mysqli_query($con, "SELECT id FROM admin WHERE email='".$_POST["email"]."'");
       //print_r($data);exit;
    $res = mysqli_num_rows($data);
    if ($res > 0) {
      $str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
      $str = str_shuffle($str);
      $str = substr($str, 0, 10);
      $url = "http://radioswag.in/rs_admin/resetPassword.php?token=$str&email=$email";

      mail($email, "Reset password", "To reset your password, please visit this: $url", "From: lambatnikita@gmail.com\r\n");
           //echo $url;
      $up = mysqli_query($con, "UPDATE admin SET token='$str', expire = DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email='$email'");
        //print_r($up);exit;
       $rslt ="Please Visit your Email!";
    } else {
       $rslt = "Please check your inputs!";
    }
  } 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome|</title>

    <!-- nav bar -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS-->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

  
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>Forgot your password?</h4>
            <p>Enter your email address and we will send you instructions on how to reset your password.</p>
          </div>
          <div id="mydiv" >
          <?php if(isset($rslt)) { ?>
            <div class="flash alert alert-success" style="color:red;text-align:center;">

              <div class="message notice">
                <?php echo $rslt; ?>
              </div>
          </div>
          <?php } ?>
          </div>
            
          <form method="post" enctype="multipart/form-data" >
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Enter email address"  autofocus="autofocus" >
                <label for="inputEmail">Enter email address</label>
              </div>
            </div>
            <input type="submit" name="reset"  class="btn btn-success btn-block" value="Reset Password">
          </form>
          <div class="text-center">
            <!-- <a class="d-block small mt-3" href="register.php">Register an Account</a> -->
            <a class="d-block small mt-3 text-success" href="index.php">Login Page</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
  </body>
</html>
