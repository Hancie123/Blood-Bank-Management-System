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
<div class="container" style="margin-top:70px;">
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class='text-primary'><i class="fa fa-bank"></i> Add City </h3><hr>    
			<div class="row">
				<div class="col-md-6">
				<?php 
				if(isset($_POST["city_submit"]))
				{
					$sql="INSERT INTO city (CITY_NAME,STATE_ID) VALUES ('".$_POST["cityname"]."',".$_POST["statename"].")";
					$con->query($sql);
					
				}
				
				?>
				
					<p id='out' class='text-success'></p>
					<form role="form" action="admin_city.php" method="post">
						<div class="form-group text-primary">
							<label for="City">City Name</label>
							<input id="City" required type="text" class="form-control" name="cityname">
						</div>
						<div class="form-group text-primary">
							<label for="state">Select State</label>
							<select name="statename" required class="form-control">
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
							<input type="submit" class="btn btn-primary" name='city_submit' value="Add City">
						</div>
						
					</form>
				</div>
				<div class="col-md-6">
					<?php 
						$sql="Select city.CITY_NAME, state.STATE_NAME, city.CITY_ID
From state Inner Join
  city On city.STATE_ID = state.STATE_ID  ORDER BY city.CITY_ID DESC  LIMIT 0,5";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
								echo "<table class='table table-striped' >";
									echo "<tr>
											<th>Sno</th>
											<th>City</th>
											<th>State</th>
											<th>Delete</th>
										</tr>";
										$i=0;
										while($row=$result->fetch_assoc())
										{
											$i++;
											echo"<tr>";
												echo "<td>$i</td>";
												echo "<td>".$row["CITY_NAME"]."</td>";
												echo "<td>".$row["STATE_NAME"]."</td>";
												echo "<td><a href='admin_del_city.php?id=".$row["CITY_ID"]."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a></td>";
											echo"</tr>";
										}
								echo "</table>";
						}
						
					?>
					<a href='admin_view_city.php' class='btn btn-primary'><i class='fa fa-edit'></i> View All</a>
				</div>
			</div>
		
		
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
  
	</body>
</html>