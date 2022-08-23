<?php
include('connect.php');

session_start();

if(isset($_SESSION['user_id'])){
	header("location:index.php");
}



?>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<script type="text/javascript" language="javascript" src="jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="bootstrap.min.js"></script>
	<style type="text/css">
		
		.col-md-6{
			-webkit-box-shadow: 0px 0px 52px 0px rgba(0,0,0,0.55);
-moz-box-shadow: 0px 0px 52px 0px rgba(0,0,0,0.55);
box-shadow: 0px 0px 52px 0px rgba(0,0,0,0.55);
border-radius: 10px;
		}
		input:hover{
			box-shadow: 0px 0px 52px 0px rgba(0,0,0,0.2);
		}
	</style>
	<title>Sign Up</title>
</head>

<body>

<div class="container">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		

		<div>
			<h3 align="center">Thank you for Registering with us!</h3>
			
<h3 align="center"><br>Payment Guideline</h3>

			<ol><b>Monthly:</b> The full annual cost is broken out over 12 monthly installments that are billed to your credit card each month.</ol>
			<ol><b>Annually:</b> The full annual cost to your credit card.</ol>
</li>
			<div>
			<h3>Benefits to You</h3>

<b>Agents, Brokers, and Account Support Staff</b><br>

    Quickly create a set of specifications tailored to fit the needs of virtually any organization when bidding commercial property and liability insurance programs.<br>

<b>Risk Managers, Financial Executives, & Insurance Buyers</b><br>

    Prepare comprehensive and effective insurance specifications by customizing the model specifications.
    Save time developing specifications by customizing the template.
    Get insightful and practical advice about the pros and cons of different approaches to competitively bidding your program.<br>

<b>Consultants</b><br>

    Prepare comprehensive and effective insurance specifications by customizing the model specifications.
    Save time developing specifications by customizing the template.<br>
</div>

		</div>

		<div align="center">
			<a href="login.php" class="btn btn-info">Login</a>  <a href="login.php"> Back  <i class="fas fa-arrow-left"></i></a>
		</div><br>
	</div>
</div>


</body>