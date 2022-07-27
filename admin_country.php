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
			<h3 class='text-primary'><i class="fa fa-bank"></i> Add Country </h3><hr>    
			<div class="row">
				<div class="col-md-6">
				<?php 
				if(isset($_POST["country_submit"]))
				{
					$sql="INSERT INTO country (COUNTRY_NAME) VALUES ('".$_POST["countryname"]."')";
					$con->query($sql);
					
				}
				
				?>
				
					<p id='out' class='text-success'></p>
					<form role="form" action="admin_country.php" method="post">
						<div class="form-group text-primary">
							<label for="countryname">Country Name</label>
							<input id="countryname" required type="text" class="form-control" name="countryname">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" name='country_submit' value="Add Country">
						</div>
						
					</form>
				</div>
				<div class="col-md-6">
					<?php 
						$sql="SELECT * FROM country ORDER BY COUNTRY_ID desc LIMIT 0,5 ";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
								echo "<table class='table table-striped' >";
									echo "<tr>
											<th>Sno</th>
											<th>Country Name</th>
											<th>Delete</th>
										</tr>";
										$i=0;
										while($row=$result->fetch_assoc())
										{
											$i++;
											echo"<tr>";
												echo "<td>$i</td>";
												echo "<td>".$row["COUNTRY_NAME"]."</td>";
												echo "<td><a href='admin_del_country.php?id=".$row["COUNTRY_ID"]."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a></td>";
											echo"</tr>";
										}
								echo "</table>";
						}
						
					?>
					
					<a href='admin_view_country.php' class='btn btn-primary'><i class='fa fa-edit'></i> View All</a>
				</div>
			</div>
		
		
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
  
	</body>
</html>