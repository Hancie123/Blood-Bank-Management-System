<?php
include("config.php");
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$sql="DELETE FROM state WHERE STATE_ID=$id";
	$con->query($sql);
	echo "<script>
		alert('State Deleted');
		window.open('admin_state.php','_self');
	</script>";
}
?>