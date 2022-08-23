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
				<legend><font><h3><i class="fas fa-cogs"></i> Admin Control Panel</font></h3> </legend>

				<a href="view_claim.php" class="btn btn-default">View Claims</a>   <a class="btn btn-default" href="view_policy.php">View Policies</a>  <a class="btn btn-default" href="view_proposal.php">View Proposals</a>  <a class="btn btn-default" href="view_proposal.php">Insured Properties</a>
				
			</fieldset>

		</div><br>
		<?php
include('footer.php');
?>
	</div>

	</div>

</div>


</body>