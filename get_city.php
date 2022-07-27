<?php 
include("config.php");
	
if(isset($_POST['G_STATE_ID']))
{
$sql="Select CITY_ID,CITY_NAME FROM city WHERE STATE_ID=".$_POST['G_STATE_ID'];

$result=$con->query($sql);
if($result->num_rows>0)
{
	echo '<option value="">Select City</option>';
while($row=$result->fetch_assoc())
{
echo "<option value='{$row['CITY_NAME']}'>{$row['CITY_NAME']}</option>";
}
}

}
	
	
	


?>