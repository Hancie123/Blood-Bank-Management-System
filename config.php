<?php 

$con=new mysqli("localhost","root","","blood_bank");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>