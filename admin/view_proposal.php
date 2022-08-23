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
	<title>View Proposals</title>
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
				<legend><font><h3><i class="fas fa-cogs"></i> Admin Control Panel: View Proposals</font></h3> </legend>

				
				<table class="table table-striped">
					<tr>
						<th>S/N</th>
						<th>Name</th>
						<th>Email</th>
						<th>Make</th>
						<th>Capacity</th>
						<th>Value</th>
						<th>No. of Seat</th>
						<th>Vehicle Use</th>
					</tr>
<?php  

$sql="SELECT * FROM proposal ORDER BY id DESC ";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

$i=1;

while($rows=mysql_fetch_assoc($result)){

?>
					<tr>
						<td><?php echo $i++;  ?></td>
						<td><?php echo $rows['lastname']." ".$rows['firstname'];  ?></td>
						<td><?php echo $rows['email'];  ?></td>
						<td><?php echo $rows['make'];  ?></td>
						<td><?php echo $rows['capacity'];  ?></td>
						<td>&#x20a6 <?php echo $rows['value'];  ?></td>
						<td><?php echo $rows['no_of_seat'];  ?> Years</td>
						<td><?php echo $rows['use_of_vehicle'];  ?></td>
					</tr>
<?php 
}

?>
					<tr>
						<td colspan="6"><b>Total No. of Proposals: <?php echo $count;  ?></b></td>
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