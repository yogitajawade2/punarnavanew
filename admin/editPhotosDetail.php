 <?php
  require_once("includes/config.php");

  if(!isset($_SESSION['auth']['id'])){
       echo '<script type="text/javascript">
       window.location = "index"
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
              <a href="dashboard.php">Gallery</a>
            </li>
            <li class="breadcrumb-item active">Edit Photo detail</li>
          </ol>
          <?php
              $id = $_GET['id'];
              $sql ="select * from gallery where id='".$id."' ";
              $result = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($result);
              $image1 = $row['image1'];
              
              $target_dir="uploads/gallery/";
              
               if(isset($_POST['update']))
              {
              $errors = validate_editphoto();
              if(count($errors) == 0)
              {

               if($_POST){
                $caption = $_POST["caption"];
                $description = $_POST["description"];
               
              
               if(!empty($_FILES['new_image']['name'])){
                  $image1 = $target_dir . time().basename($_FILES["new_image"]["name"]); 
                  move_uploaded_file($_FILES["new_image"]["tmp_name"],$image1) ;
                 }
              
                $sql = "UPDATE gallery SET caption='".$caption."',image1='".$image1."',description='".$description."',`modified`=NOW() WHERE id = '".$id."' ";
                $res=mysqli_query($con,$sql);
                if($res){
                        echo '<script type="text/javascript">
                       window.location = "photoList"
                       </script>';
                }
               else
               {
                   mysqli_error($con);
                //  echo("<SCRIPT LANGUAGE='JavaScript'>
                //   window.alert('Could not Added')
                //     window.location.href='photoList';
                //   </SCRIPT>");
               }
            }


              }
              }
          ?>
          <!-- Page Content -->
          <div class="container">
            <div class="card card-register mx-auto my-5">
              <div class="card-header">Edit Gallery detail</div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    
                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" name="caption" class="form-control" id="caption" value="<?php echo $row['caption']?>" placeholder="Image Title">
                      <label for="caption">Image Title</label>
                    </div>
                    <?php if(isset($errors['cap'])) { ?>
                        <div class="error">
                          <?php echo $errors['cap']; ?>
                        </div>
                    <?php } ?>
                  </div>
                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="file"  name="new_image" id="image1" class="form-control" value="<?php echo $row['image1'] ?>" placeholder="add image">
                      <label for="image1">Add image</label>
                    </div>
                  </div>
                   <?php if(isset($errors['new_image'])) { ?>
                        <div class="error">
                          <?php echo $errors['new_image']; ?>
                        </div>
                    <?php } ?>
                  
                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" name="description" class="form-control" id="description" value="<?php echo $row['description']?>" placeholder="description">
                      <label for="description"></label>
                    </div>
                    <?php if(isset($errors['description'])) { ?>
                        <div class="error">
                          <?php echo $errors['description']; ?>
                        </div>
                    <?php } ?>
                  </div>
                  
                  
                  
                  <div>
                      <img src="<?php echo $image1 ; ?>"  width= "50%">
                  </div>
                  <div class="text-center">
                  <input type="submit" name="update" class="btn btn-success btn-block btn-lg my-3" value="Update"/>
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
