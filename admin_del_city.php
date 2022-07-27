<?php
include("config.php");
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$sql="DELETE FROM city WHERE CITY_ID=$id";
	$con->query($sql);
	echo "<script>
		alert('City Deleted');
		window.open('admin_city.php','_self');
	</script>";
}
?>