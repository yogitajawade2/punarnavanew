<?php
  require_once("includes/config.php");

  if(!isset($_SESSION['auth']['id'])){
       echo '<script type="text/javascript">
       window.location = "index.php"
       </script>';
        exit;
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
        color: red;
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
            <li class="breadcrumb-item active">Image</li>
          </ol>

          <!-- Page Content -->
          <div class="container">
      <div class="card card-register mx-auto my-5 overlay">
        <div class="card-header">Add Image</div>
        <div class="card-body">
          
          <?php
          
            if(isset($_POST['signup']))
            {    
               $errors = array();
               $errors = validate_image();
               if(!count($errors)){
                          $target_dir = "uploads/gallery/";
                          if($_POST){
                          $target_file = $target_dir . time().basename($_FILES["image1"]["name"]);
                          move_uploaded_file($_FILES["image1"]["tmp_name"],$target_file) ;
                          $caption = $_POST["caption"];
                          $description = $_POST["description"];
                          $sql= 'INSERT INTO `gallery`(`caption`, `image1`,`description`,`created`) VALUES ("'.$caption.'","'.$target_file.'","'.$description.'", NOW())';
                          $res=mysqli_query($con,$sql);
                          if($res){
                              $_SESSION['msg'] = "Succesfully Added.";
                            }
                           else
                           {
                             echo("<SCRIPT LANGUAGE='JavaScript'>
                              window.alert('Could not Added')
                              window.location.href='addImage.php';
                              </SCRIPT>");
                           }
                         }
                
                }     
            }

          ?>   
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
                <input type="text" name="caption" id="caption" class="form-control" placeholder="Add caption  ">
                <label for="caption">Image Title </label>
              </div>
              <?php if(isset($errors['caption'])) { ?>
                 <div class="error">
                    <?php echo $errors['caption']; ?>
                 </div>
              <?php } ?>
            </div>
            
            <div class="form-group">
              <div class="form-label-group">
                <input type="file" name="image1" id="image1" class="form-control" >
                <label for="image1">Image</label>
              </div>
              <?php if(isset($errors['image1'])) { ?>
                 <div class="error">
                 <?php echo $errors['image1']; ?>
                 </div>
              <?php } ?>
            </div>
           
            <div class="form-group">
              <div class="form-label-group">
                 <textarea name="description" id="description" class="form-control" placeholder="Add description "></textarea>
              </div>
              <?php if(isset($errors['description'])) { ?>
                 <div class="error">
                    <?php echo $errors['description']; ?>
                 </div>
              <?php } ?>
            </div>
            
           
            <div class="text-center">
              <input type="submit" name="signup" class="btn btn-success btn-block btn-lg my-3" value="Add Image"/>
              <!-- <a type="submit" class="d-block btn btn-success btn-lg my-3" href="#">Submit</a> -->
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

    <!-- custom script -->
    <script src="js/customScript.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
