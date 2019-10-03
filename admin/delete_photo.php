<?php
require_once("includes/config.php");
	
$id = $_GET['id'];
$sql = "delete from gallery where id =".$id;
mysqli_query($con, $sql);
//header("location:adminList");
echo '<script type="text/javascript">
    window.location = "photoList.php"
   </script>';
?>
