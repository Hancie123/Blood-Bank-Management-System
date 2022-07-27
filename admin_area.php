<?php
session_start();
include("config.php");
include("admin_function.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("admin_head.php");?>
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container"  style='margin-top:70px' >
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class='text-primary'><i class="fa fa-bank"></i> Add Area </h3><hr>    
			<div class="row">
				<div class="col-md-6">
				<?php 
				if(isset($_POST["area_submit"]))
				{
				 $sql="INSERT INTO area(CITY_ID,STATE_ID,AREA_NAME) VALUES ('".$_POST["CITY"]."','".$_POST["statename"]."','".$_POST["areaname"]."')";
					$con->query($sql);
					
				}
				
				?>
				
					<p id='out' class='text-success'></p>
					<form role="form" action="admin_area.php" method="post">
				
					<div class="form-group text-primary">
							<label for="STATE">Select State</label>
							<select name="statename" id="STATE" required class="form-control">
								<option value="">Select State</option>
								<?php
									$sql="SELECT STATE_ID,STATE_NAME FROM state ORDER BY STATE_NAME ASC";
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
										echo "<option value='{$row['STATE_ID']}'>{$row['STATE_NAME']}	</option>";
										}
									}
								?>
							</select>
						</div>
						
						
						<div class="form-group">
								
								<span id="city_feed"></span>
							

                          </div>
						  
						  <div class="form-group text-primary">
							<label for="area">Area Name</label>
							<input id="area" required type="text" class="form-control" name="areaname">
						</div>
						
						<div class="form-group">
							<input type="submit" class="btn btn-primary" name='area_submit' value="Add Area">
						</div>
						
					</form>
				</div>
				<div class="col-md-6">
					<?php 
						$sql="

Select state.STATE_NAME, city.CITY_NAME, area.AREA_NAME, area.AREA_ID
From area Inner Join
state On area.STATE_ID = state.STATE_ID Inner Join
city On area.CITY_ID = city.CITY_ID
ORDER BY AREA_ID desc LIMIT 0,5";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
								echo "<table class='table table-striped' >";
									echo "<tr>
											<th>Sno</th>
											<th>State Name</th>
											<th>City Name</th>
											<th>Area Name</th>
											<th>Delete</th>
										</tr>";
										$i=0;
										while($row=$result->fetch_assoc())
										{
											$i++;
											echo"<tr>";
												echo "<td>$i</td>";
												echo "<td>".$row["STATE_NAME"]."</td>";
												echo "<td>".$row["CITY_NAME"]."</td>";
												echo "<td>".$row["AREA_NAME"]."</td>";
												echo "<td><a href='admin_del_area.php?id=".$row["AREA_ID"]."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a></td>";
											echo"</tr>";
										}
								echo "</table>";
						}
						
					?>
					<a href='admin_view_area.php' class='btn btn-primary'><i class='fa fa-edit'></i> View All</a>
				</div>
			</div>
		
		
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
  <script>
  $(document).ready(function(){
	  
	  $("#STATE").change(function(){
		  var id= $("#STATE").val();
		  $.post('load_city.php',{sid:id},function(data){
			 // alert(data);
			  $("#city_feed").html(data);
		  });
	  });
  });
  </script>
	</body>
</html>