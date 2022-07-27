<?php 
include("config.php");
include("admin_function.php");

if(isset($_POST["q"])&&$_POST["q"]!="")
{
	$key=$_POST["q"];
	 $sql="SELECT * FROM blood_donor WHERE NAME LIKE '%".$key."%' OR FATHER_NAME LIKE '%".$key."%' OR GENDER LIKE '%".$key."%' OR BLOOD LIKE '%".$key."%' OR BODY_WEIGHT LIKE '%".$key."%' OR EMAIL LIKE '%".$key."%' OR ADDRESS LIKE '%".$key."%' OR AREA LIKE '%".$key."%' OR CITY LIKE '%".$key."%' OR PINCODE LIKE '%".$key."%' OR STATE LIKE '%".$key."%' OR CONTACT_1 LIKE '%".$key."%' OR CONTACT_2 LIKE '%".$key."%' OR VOLUNTARY LIKE '%".$key."%' OR VOLUNTARY_GROUP LIKE '%".$key."%'";
	load_donor($sql,$con);
	
}
else if($_POST["q"]=="")
{
	$sql="Select * from blood_donor";
				load_donor($sql,$con);
}

?>


