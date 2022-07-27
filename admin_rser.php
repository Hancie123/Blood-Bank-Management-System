<?php 
include("config.php");
include("admin_function.php");

if(isset($_POST["q"])&&$_POST["q"]!="")
{
	$key=$_POST["q"];
	 $sql="SELECT * FROM request_blood WHERE NAME LIKE '%".$key."%' OR BLOOD LIKE '%".$key."%' OR HOSP LIKE '%".$key."%' OR CITY LIKE '%".$key."%' OR PIN LIKE '%".$key."%' OR DOC LIKE '%".$key."%' OR RDATE LIKE '%".$key."%' OR CNAME LIKE '%".$key."%' OR EMAIL LIKE '%".$key."%' OR CON1 LIKE '%".$key."%' OR CON2 LIKE '%".$key."%' OR REASON LIKE '%".$key."%' OR CDATE LIKE '%".$key."%'";
	load_patient($sql,$con);
	
}
else if($_POST["q"]=="")
{
	$sql="Select * from request_blood";
				load_patient($sql,$con);
}

?>


