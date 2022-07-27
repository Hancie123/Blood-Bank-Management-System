<?php 
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
 
 if(isset($_GET["id"])&&!empty($_GET["id"]))
 {
	 $sql="UPDATE blood_donor SET STATUS='1' WHERE DONOR_ID=".$_GET["id"];
	 $con->query($sql);
	 header("location:admin_view_donor.php?id={$_GET["id"]}"); 
 }
 else
 {
	 header("location:admin_view_donor.php"); 
 }

?>