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
<div class="container"  style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class='text-primary'><i class="fa fa-bank"></i> Add State </h3><hr>    
			<div class="row">
				<div class="col-md-6">
				<?php 
				if(isset($_POST["state_submit"]))
				{
					$sql="INSERT INTO state (STATE_NAME,COUNTRY_ID) VALUES ('".$_POST["statename"]."',".$_POST["COUNTRY"].")";
					$con->query($sql);
					
				}
				
				?>
				
					<p id='out' class='text-success'></p>
					<form role="form" action="admin_state.php" method="post">
					
						
						  <div class="form-group">
								<label class="control-label text-primary" for="COUNTRY">Country</label>
                                <select name="COUNTRY" id="COUNTRY" required class="form-control">
								<option value="">Select Country</option>
								<?php
									$sql="SELECT COUNTRY_ID,COUNTRY_NAME FROM country ORDER BY COUNTRY_NAME ASC";
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
											echo "<option value='{$row['COUNTRY_ID']}'>{$row['COUNTRY_NAME']}	</option>";
										}
									}
								?>
								</select>
                          </div>
						<div class="form-group text-primary">
							<label for="state">State Name</label>
							<input id="state" required type="text" class="form-control" name="statename">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" name='state_submit' value="Add State">
						</div>
						
					</form>
				</div>
				<div class="col-md-6">
					<?php 
						$sql="Select country.COUNTRY_NAME, state.STATE_NAME,state.STATE_ID
From state Inner Join
  country On state.COUNTRY_ID = country.COUNTRY_ID ORDER BY STATE_ID desc LIMIT 0,5 ";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
								echo "<table class='table table-striped' >";
									echo "<tr>
											<th>Sno</th>
											<th>Country Name</th>
											<th>State Name</th>
											<th>Delete</th>
										</tr>";
										$i=0;
										while($row=$result->fetch_assoc())
										{
											$i++;
											echo"<tr>";
												echo "<td>$i</td>";
												echo "<td>".$row["COUNTRY_NAME"]."</td>";
												echo "<td>".$row["STATE_NAME"]."</td>";
												echo "<td><a href='admin_del_state.php?id=".$row["STATE_ID"]."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a></td>";
											echo"</tr>";
										}
								echo "</table>";
						}
						
					?>
					
					<a href='admin_view_state.php' class='btn btn-primary'><i class='fa fa-edit'></i> View All</a>
				</div>
			</div>
		
		
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
  
	</body>
</html>