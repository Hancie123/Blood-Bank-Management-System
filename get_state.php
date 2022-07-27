<?php 
include("config.php");
	
if(isset($_POST['G_STATE_ID']))
{
$sql="Select STATE_ID,STATE_NAME FROM state WHERE COUNTRY_ID=".$_POST['G_STATE_ID'];

$result=$con->query($sql);
if($result->num_rows>0)
{
	echo '<option value="">Select State</option>';
while($row=$result->fetch_assoc())
{
echo "<option value='{$row['STATE_ID']}'>{$row['STATE_NAME']}</option>";
}
}

}
	
	
	


?>