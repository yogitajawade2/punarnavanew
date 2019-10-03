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

    <title>Welcome|Punarnava</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <style>
        .body_background
        {
          background-image:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0)), url("../images/iceico_pvt_ltd_background_image.jpg");
          background-repeat: no-repeat;
          background-attachment:fixed;
          background-size:cover;
        }
    </style>
  </head>

  <body id="page-top" class="body_background">

    <?php include'navbar.php'?>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php include'sidebar.php'?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Admin</a>
            </li>
            <li class="breadcrumb-item active">Blog List</li>
          </ol>
          
          <!--Buttons-->
          <div class="card mb-2 overlay">
             <div class="card-header">
            <a href="dashboard.php" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>
            <a href="addBlog.php" class="btn btn-success"><i class="fas fa-plus"></i></a>
            </div>    
        </div>
          
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Blog List</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sr.No</th>
                      <th>Image</th>
                      <th>Heading</th>
                      <th>Date</th>
                      <th>Abstract</th>
                      <th>Created</th>
                
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <?php
                             $i=1;
                             $sql = "select * from blog ";
                             $result = mysqli_query($con,$sql);
                             while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                      <td><?php echo "$i"; ?></td>
                      <td><img src="<?php echo $row['blogimg']; ?>" width="50%"</td>
                      <td><?php echo $row['heading'] ?></td>
                      <td><?php echo $row['date'] ?></td>
                      <td><?php echo $row['abstract'] ?></td>
                      
                      <td><?php echo $row['created']; ?></td>
                     
                      <td>
                        <a href="editBlogDetail?id=<?php echo $row['id']; ?>" onclick="return confirm('do you want to edit this Record?');">
                          <span class="fa-stack fa-1x">
                            <i class="fas fa-square fa-stack-2x" style="color: #339af0;"></i>
                            <i class="far fa-edit fa-stack-1x" style="color:white;"></i>
                      </td>
                      <td>
                        <a href="delete_blog?id=<?php echo $row['id'] ?>" onclick="return confirm('do you want to delete this Record?');">
                          <span class="fa-stack fa-1x">
                            <i class="fas fa-square fa-stack-2x" style="color: #dc3545;"></i>
                            <i class="far fa-trash-alt fa-stack-1x" style="color: white;"></i>
                          </span>
                        </a>
                      </td>
                      <?php $i++ ?>
                    </tr>
                      <?php } ?>
                  </tbody>
                </table>
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

    <!-- script -->
    <script type="text/javascript">
            $(document).ready(function() {
              $('#bootstrap-data-table-export').DataTable();
            } );
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
