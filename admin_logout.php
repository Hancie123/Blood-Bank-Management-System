<?php 
session_start();
unset($_SESSION["usertype"]);
session_destroy();
echo "<script>window.open('index.php','_self')</script>";
?>