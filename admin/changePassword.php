<?php
  require_once("includes/config.php");
  if(!isset($_SESSION['auth']['id'])){
       echo '<script type="text/javascript">
       window.location = "index.php"
       </script>';
        exit;
}
?>
<?php
    if(isset($_POST['change']))
    {
    $errors=array();
    $errors=validate_pass();
    if(!count($errors))
    {   
     $id = $_SESSION['auth']['id'];
     $old_pass = $_POST['old_pass'];
     $sql= " select * from admin where id='".$id."' AND password='".md5($old_pass)."' ";
     $res=mysqli_query($con,$sql);
     $row_count = mysqli_num_rows($res);
     if($row_count > 0)
     {  
      $new_pass = $_POST['new_pass'];
      $re_pass = $_POST['re_pass'];
      $id = $_SESSION['auth']['id'];
      if(md5($new_pass)==md5($re_pass))
      {
      $update = "update admin set password='".md5($new_pass)."',modified=NOW() where id='".$id."'";
      $result=mysqli_query($con,$update);
      if($result)
      {
        $_SESSION['msg'] = "Password change successfully.";
      }else
      {
        $_SESSION['msg2'] = "Could not change.";
      }
      }else
      {
        $_SESSION['msg2'] = "New Password and Re-Enter Password must be same."; 
      }
      } else
      {
        $_SESSION['msg2'] = "Please Enter correct old password.";
      }
      } 
     else
      {
        $_SESSION['msg2'] = "Please Enter password.";
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

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <style type="text/css">
     .error{
        color: white ;
        background: red;
        text-align: center ;
      }
      .body_background
        {
          background-image:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0)), url("../images/iceico_pvt_ltd_background_image.jpg");
          background-repeat: no-repeat;
          background-attachment:fixed;
          background-size:cover;
        }
     </style>
    <style type="text/css">
      @Html.TextBoxFor(Function(model) model.Port, New With {.type = "number"})
    </style>
  </head>

  <body id="page-top" class="body_background">

    <?php include'navbar.php';?>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php include'sidebar.php';?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Admin</a>
            </li>
            <li class="breadcrumb-item active">Change Password</li>
          </ol>

          <!-- Page Content -->
          <div class="container">
      <div class="card card-register mx-auto my-5">
        <div class="card-header">Change Password</div>
        <div class="card-body">
           <div id="mydiv" >
            <?php if(isset($_SESSION['msg2'])) { ?>
            <div class="flash alert alert-danger" style="text-align:center;">

              <div class="message notice">
                <?php echo $_SESSION['msg2']; 
                 unset($_SESSION['msg2']); ?>
              </div>
          </div>
          <?php } ?>
           </div>
           <div id="mydiv" >
            <?php if(isset($_SESSION['msg'])) { ?>
            <div class="flash alert alert-success" style="color:rgb(60, 179, 113);text-align:center;">

              <div class="message notice">
                <?php echo $_SESSION['msg']; 
                 unset($_SESSION['msg']); ?>
              </div>
          </div>
          <?php } ?>
           </div>

          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" class="form-control" id="old_pass" name="old_pass"  placeholder="Enter Old Password" >
                <label for="old_pass">Old Password</label>
              </div>
              <?php if(isset($errors['old_pass'])) { ?>
                <div class="error">
                  <?php echo $errors['old_pass']; ?>
                </div>
              <?php } ?>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" class="form-control" id="new_pass" name="new_pass"  placeholder="Enter New Password" >
                <label for="new_pass">New Password</label>
              </div>
              <?php if(isset($errors['new_pass'])) { ?>
                <div class="error">
                  <?php echo $errors['new_pass']; ?>
                </div>
              <?php } ?>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" class="form-control" id="re_pass" name="re_pass"   placeholder="Re-enter New Password" >
                <label for="re_pass">Re-enter New Password</label>
              </div>
              <?php if(isset($errors['re_pass'])) { ?>
                <div class="error">
                  <?php echo $errors['re_pass']; ?>
                </div>
              <?php } ?>
            </div>
            <div class="text-center">
              <input type="submit" name="change" class="btn btn-success btn-block btn-lg my-3" value="Confirm"/>
          </div>
          </form>
          
        </div>
      </div>
    </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php include'footer.php'?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
