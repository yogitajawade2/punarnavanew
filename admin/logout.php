<?php
require_once("includes/config.php");
session_destroy();
 echo '<script type="text/javascript">
       window.location = "index.php"
       </script>';
?>