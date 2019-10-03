<?php
        require_once 'includes/config.php';
        if(isset($_POST['login'])){
    
            $error = array();
            $errors=validate_admin();
            if(!count($errors)){ 
            
            $sql = "select * from admin where email='".$_POST['email']."' and password='".md5($_POST['password'])."'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
            //echo $row['id'];
            
            if(isset($row['id'])){
            unset($row['password']);
            $_SESSION['auth']=$row;

            //header("location:dashboard.php");
            echo("<SCRIPT LANGUAGE='JavaScript'>
                  window.location.href='dashboard.php';
                  </SCRIPT>");
            }else{
                $_SESSION['msg'] = "Login failed. Please try again !!";
            }
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
    <link rel="icon" type="images/ico"  href="images/favicon.png" />
    <title>Welcome|Punarnava</title>
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

    <style type="text/css">
      .error
      {
        color: red;
      }
      .message
      {
        color: red;
      }
      .body_background
        {
          background-image:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0)), url("../images/iceico_pvt_ltd_background_image.jpg");
          background-repeat: no-repeat;
          background-attachment:fixed;
          background-size:cover;
        }
        .card-login 
        {
        background: rgba(255,255,255,0.5);
        }
    </style>
  </head>

<body class="body_background">

    <div class="container">
        <br><br><br><br>
      <div class="card card-login mx-auto mt-5">
        <!--<div class="card-header">Admin Login</div>-->
        <!--<div class="hedder-up " >-->
                 <img src="images/logoPun.png" class="logosize" style="width: 65%;margin: 27px 0px 0px 50px;">
               <!--</div>-->
          <div class="inner">
              <div class="flash" style="text-align:center;">
                  <p style="text-align:center;">
                   <?php if(isset($_SESSION['msg'])) { ?>
                        <div class="message">      
                        <?php echo $_SESSION['msg']; 
                        unset($_SESSION['msg']); ?>
                        </div>
                  <?php } ?>              
               </p>
              </div>
          </div>

        <div class="card-body">
          <form method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email address" >
                <label for="email">Email address</label>
              </div>
              <div>
                <?php if(isset($errors['ema'])) { ?>
                  <div class="error">
                    <?php echo $errors['ema']; ?>
                  </div>
                <?php } ?>       
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
                <label for="password">Password</label>
              </div>
              <div>
                 <?php if(isset($errors['pass'])) { ?>
                   <div class="error">
                    <?php echo $errors['pass']; ?>
                   </div>
                 <?php } ?>
              </div>
            </div>
            <!-- <a class="btn btn-success btn-block" href="dashboard.php">Login</a> -->
            <input type="submit" name="login" class="btn btn-success btn-block" value="Log In"  />
          </form>
          <div class="text-center">
            <!-- <a class="d-block small mt-3" href="register.php">Register an Account</a> -->
            <a class="d-block small  mt-3 text-success" href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>
