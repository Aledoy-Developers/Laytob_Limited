<?php
 session_start();
 unset($_SESSION['acms_valid_user']);
 session_destroy();
 header("Location: index.php");
 ?>

