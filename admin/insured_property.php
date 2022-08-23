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
	<title>Insured Properties</title>
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
				<legend><font><h3><i class="fas fa-cogs"></i> Admin Control Panel: View Claims</font></h3> </legend>

				
				<table class="table table-striped">
					<tr>
						<th>S/N</th>
						<th>Name</th>
						<th>Occupation</th>
						<th>Address</th>
						<th>License No.</th>
						<th>Vehicle Reg. No</th>
					</tr>
<?php  

$sql="SELECT * FROM claim ORDER BY id DESC ";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

$i=1;

while($rows=mysql_fetch_assoc($result)){

?>
					<tr>
						<td><?php echo $i++;  ?></td>
						<td><?php echo $rows['fullname'];  ?></td>
						<td><?php echo $rows['occupation'];  ?></td>
						<td><?php echo $rows['address'];  ?></td>
						<td><?php echo $rows['d_license_no'];  ?></td>
						<td><?php echo $rows['v_regnum'];  ?></td>
					</tr>
<?php 
}

?>
					<tr>
						<td colspan="6"><b>Total No. of Claims: <?php echo $count;  ?></b></td>
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