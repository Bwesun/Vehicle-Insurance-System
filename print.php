<?php
session_start();

?>
<style type="text/css">
	.container{
		margin-left: 10%;
		margin-right: 10%;
		margin-top: 2%;
		border: 2px solid blue;
		border-radius: 10px;
	}
</style>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

<body>
<div class="container">
<table class="table table-striped" align="center">
	<tr>
		<td colspan="3" align="center"><H1>SUNU INSURANCE COMPANY</H1><h2>Claim Cover</h2></td>
	</tr>
	<tr>
		<td><b>Transaction ID</b></td>
		<td>:</td>
		<td><?php echo $_SESSION['trans_id']; ?></td>
	</tr>
	<tr>
		<td><b>Name</b></td>
		<td>:</td>
		<td><?php echo $_SESSION['name']; ?></td>
	</tr>
	<tr>
		<td><b>E-Mail</b></td>
		<td>:</td>
		<td><?php echo $_SESSION['email']; ?></td>
	</tr>
	<tr>
		<td><b>Vehicle Reg. No</b></td>
		<td>:</td>
		<td><?php echo $_SESSION['vehicle_regnum']; ?></td>
	</tr>
	<tr>
		<td><b>Duration</b></td>
		<td>:</td>
		<td><?php echo $_SESSION['duration']; ?></td>
	</tr>
	<tr>
		<td><b>Reference ID</b></td>
		<td>:</td>
		<td><?php echo $_SESSION['ref_id']; ?></td>
	</tr>
	<tr>
		<td colspan="3" align="center"><a href="" onclick="window.print()" class="btn btn-success">Print</a> <a href="renew_policy.php" class="btn btn-primary">Back</a></td>
	</tr>
</table>
</div>
</body>