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
		<h3 align="center"><br>Sign Up</h3>

		<form class="form-group" method="post">
			<div>
		<input type="text" class="form-control" name="name" placeholder="Enter Fullname" required><br>
		<input type="email" class="form-control" name="email" placeholder="Enter E-mail" required><br>
		<input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" required><br>
		<textarea name="add" class="form-control" placeholder="Address" required></textarea><br>
		<input type="text" class="form-control" name="occupation" placeholder="Ooccupation" required><br>
		<input type="text" class="form-control" name="user" placeholder="Username" required><br>
		<input type="text" class="form-control" name="pass" placeholder="Choose Password" required><br>
			</div>
			<div align="center">
				<input type="submit" class="btn btn-primary" name="sub_reg" value="Sign Up">
			</div><br>
			<div>
				Already Registered? <a href="login.php" class="btn btn-warning" style="color: white;">Login</a>
			</div>
					
			
		</form>
	</div>
</div>
<?php
if(isset($_POST['sub_reg'])){
	session_start();

	include('connect.php');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$add=$_POST['add'];
$occupation=$_POST['occupation'];
$user=$_POST['user'];
$pass=$_POST['pass'];
	
// Insert data into mysql 
$sql="INSERT INTO users(fullname, email, phone, address, occupation, username, password)VALUES('$name', '$email', '$phone', '$add', '$occupation', '$user', '$pass')";
//echo $sql;
$result=mysql_query($sql);

//Check whether successful
if($result){
echo "<script>alert('Registration Successful! You can now login!')</script>";
echo "<script>window.open('guide.php','_self')</script>";
}
else{
echo "<script>alert('Error: Registration Unsuccessful. Try agin!')</script>";
//echo mysql_error();
echo "<script>window.open('register.php','_self')</script>";
}

//close connection
mysql_close();
}
?>

</body>