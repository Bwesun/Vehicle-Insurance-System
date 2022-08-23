<?php
//index.php
include('connect.php');

session_start();

if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}


?>
<head>
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
			<?php
$id=$_SESSION['user_id'];

$sql="SELECT * FROM users WHERE id='$id' ";
$result=mysql_query($sql);

$i=1;
$rows=mysql_fetch_assoc($result)

?>
			<fieldset>
				<legend><font><h3><i class="fas fa-address-card"></i> <?php echo $_SESSION['username']."'s Profile"; ?></font></h3> </legend>

				<table class="tab table table-condensed table-striped navbar-justify">
					

					<tr id="tr">
						<td><?php echo "<b>S/N:</b> ".$i++;?></td>
						<td><?php echo "<b>Name:</b> ".$rows['fullname'];  ?></td>
					</tr>
					<tr>
						<td><?php echo "<b>Email:</b> ".$rows['email'];  ?></td>
						<td><?php echo "<b>Phone Number:</b> ".$rows['phone'];  ?></td>
					</tr>
					<tr>
						<td colspan="2"><?php echo "<b>Address:</b> ".$rows['address'];  ?></td>
					</tr>
					
					
				</table>
			</fieldset>

		</div>
	</div>
	</div>
</div>


</body>