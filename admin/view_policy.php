<?php
//index.php
include('connect.php');

session_start();

if(!isset($_SESSION['admin_user']))
{
	header("location:../alogin.php");
}


?>
<head>
	<title>View Policies</title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<script type="text/javascript" language="javascript" src="jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="bootstrap.min.js"></script>
	<style type="text/css">
		
		.col-md-9{
			-webkit-box-shadow: 0px 0px 52px 0px rgba(0,0,0,0.55);
-moz-box-shadow: 0px 0px 52px 0px rgba(0,0,0,0.55);
box-shadow: 0px 0px 52px 0px rgba(0,0,0,0.55);
border-radius: 10px;
padding-bottom: 20px;
		}
	</style>
</head>

<body>

<div class="container">
	<div class="col-md-1"></div>
	<div class="col-md-9">
		<?php
		include('head.php');
		?>
		<div>

			<fieldset>
				<legend><font><h3><i class="fas fa-cogs"></i> Admin Control Panel: Unapproved View Policies</font></h3> </legend>

				
				<table class="table table-striped">
					<tr>
						<th>S/N</th>
						<th>Name</th>
						<th>Email</th>
						<th>Transaction ID</th>
						<th>Reference ID</th>
						<th>Duration</th>
						<th>Vehicle Reg. No</th>
					</tr>
<?php  

$sql="SELECT * FROM policy WHERE status='pending' ORDER BY id DESC ";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

$i=1;

while($rows=mysql_fetch_assoc($result)){

?>
					<tr>
						<td><?php echo $i++;  ?></td>
						<td><?php echo $rows['name'];  ?></td>
						<td><?php echo $rows['email'];  ?></td>
						<td><?php echo $rows['trans_id'];  ?></td>
						<td><?php echo $rows['ref_id'];  ?></td>
						<td><?php echo $rows['duration'];  ?> Years</td>
						<td><?php echo $rows['vehicle_regnum'];  ?></td>
						<td>
							<form method="post">
								<input type="hidden" name="id" value="<?php echo $rows['id'];  ?>">
								<input type="submit" class="btn btn-success" name="sub" value="Approve">
							</form>
						</td>
					</tr>
<?php 
}

if(isset($_POST['sub'])){

	$id=$_POST['id'];

	$sql2="UPDATE policy SET status='Approved' WHERE id='$id' ";
	$result=mysql_query($sql2);

	if($result){
		echo "<script>alert('Policy Approved!');</script>";
		echo "<script>window.open('view_policy.php','_self');</script>";
	}else{
		echo "<script>alert('ERROR: Policy Failed to Approve!');</script>";
		echo "<script>window.open('view_policy.php','_self');</script>";
	}
}

?>
					<tr>
						<td colspan="6"><b>Total No. of Policies: <?php echo $count;  ?></b></td>
					</tr>
				</table>
				
			</fieldset>

		</div><br>
		<?php
include('footer.php');
?>
	</div>

	</div>

</div>


</body>