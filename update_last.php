<?php
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
 $id=$_POST["id"];
 $ldate=$_POST["ldata"];
 echo $sql="UPDATE blood_donor SET LAST_D_DATE='{$ldate}' WHERE  DONOR_ID='{$id}'";
 $con->query($sql);
 header("location:admin_view_donor.php?id={$id}");
 
?>