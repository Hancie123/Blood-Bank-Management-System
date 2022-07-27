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
		
			<h3 class="text-primary"><i class="fa fa-bed"></i>  Need Blood</h3><hr> 
<div class="col-md-6 col-md-offset-3">
	
			<form role="form">
				<div class="form-group text-primary">
					<label>Search Text</label>
					<input type="text" id="q" class="form-control">
				</div>
			</form>
		</div>
		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
					
			<?php 
				$sql="Select * from request_blood";
				load_patient($sql,$con);
			?>
			</div>
		</div>
		</div>
	</div>
</div>
	 <?php include("admin_footer.php"); ?>
	  <script>
	$(document).ready(function()
	{
		$("#q").keyup(function(){
				var txt=$("#q").val();
				$.post('admin_rser.php',{q:txt},function(data){
					$("#feedback").html(data);
				});
			
		});
	
	});
  </script>

	</body>
</html>