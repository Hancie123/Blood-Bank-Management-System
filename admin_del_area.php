<?php
include("config.php");
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$sql="DELETE FROM area WHERE AREA_ID=$id";
	$con->query($sql);
	echo "<script>
		alert('Area Deleted');
		window.open('admin_area.php','_self');
	</script>";
}
?>