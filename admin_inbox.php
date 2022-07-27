<?php
session_start();
include("config.php");
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
			<h3 class="text-primary"><i class="fa fa-envelope"></i> Inbox </h3><hr>    
			
<?php 
$sql="SELECT * FROM messages ORDER BY ID DESC";
$result=$con->query($sql);
if($result->num_rows>0)
{
	echo '<ul class="list-group">';
		while($row=$result->fetch_assoc())
		{
			if($row['STATUS']=='1')
			{
				echo '<li class="list-group-item active">
						<span>
							<b><i class="fa fa-envelope-square"> </i>      	'.$row["NAME"].'</b>: '.substr($row["MESSAGE"],0,50).'....
						</span>
						<span   class="pull-right">
							<i>'.$row['LOGS'].'</i>&nbsp;
							<a href="view_mess.php?id='.$row['ID'].'" class="btn btn-primary  btn-xs">View</a>
							<a href="admin_mess_del.php?id='.$row['ID'].'"  class="btn btn-danger btn-xs">Delete</a>
						</span>

					</li>';
			}
			else
			{
				echo '<li class="list-group-item">
						<span>
							<b><i class="fa fa-envelope-square
"></i> '.$row["NAME"].'</b>: '.substr($row["MESSAGE"],0,50).'....
						</span>
						<span   class="pull-right">
							<i>'.$row['LOGS'].'</i>&nbsp;
							<a href="view_mess.php?id='.$row['ID'].'" class="btn btn-primary btn-xs">View</a>
							<a href="admin_mess_del.php?id='.$row['ID'].'"  class="btn btn-danger btn-xs">Delete</a>
						</span>
				</li>';
			}
			echo"<br>";
		}
	echo'</ul>';
}
else
{
	echo "<div class='alert alert-info mess'>No More Messages</div>";
}

					
					
					
					
					
					
					?>
		
		</div>
	</div>
</div>
	 <?php include("admin_footer.php"); ?>
	</body>
</html>