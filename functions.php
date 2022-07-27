<?php 
include("config.php");


if(isset($_POST['G_CITY_ID']))
{
$sql="Select state.STATE_ID, state.STATE_NAME, city.CITY_NAME, city.CITY_ID
From state Inner Join
city On city.STATE_ID = state.STATE_ID
Where city.CITY_ID ={$_POST['G_CITY_ID']}";

$result=$con->query($sql);
if($result->num_rows>0)
{
if($row=$result->fetch_assoc())
{
echo "<option value='{$row['STATE_NAME']}'>{$row['STATE_NAME']}</option>";
}
}

}
	
if(isset($_POST['G_STATE_ID']))
{
$sql="Select STATE_ID,STATE_NAME FROM state WHERE COUNTRY_ID=".$_POST['G_STATE_ID'];

$result=$con->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<option value='{$row['STATE_ID']}'>{$row['STATE_NAME']}</option>";
}
}

}
	
	
	


?>