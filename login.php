<?php
include('connect.php');

session_start();

if(isset($_SESSION['user_id'])){
	header("location:index.php");
}



?>
<head>
	<title>User Login</title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<script type="text/javascript" language="javascript" src="jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="bootstrap.min.js"></script>
	<style type="text/css">
		
		.col-md-4{
			-webkit-box-shadow: 0px 0px 52px 0px rgba(0,0,0,0.55);
-moz-box-shadow: 0px 0px 52px 0px rgba(0,0,0,0.55);
box-shadow: 0px 0px 52px 0px rgba(0,0,0,0.55);
border-radius: 10px;
		}
		input:hover{
			box-shadow: 0px 0px 52px 0px rgba(0,0,0,0.2);
		}
	</style>
</head>

<body>

<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3 align="center">Welcome! <br>SUNU Insurance Company, Kaduna</h3>
<div align="center"><img src="log.jpg" class="img-circle" width="150" align="center"></div>

		<form class="form-group" method="post">
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				<input type="text" class="form-control" placeholder="Enter Username" name="username">
			</div><br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
				<input type="password" class="form-control" placeholder="Enter Password" name="password">
			</div><br>
			<div align="center">
				<input type="submit" class="btn btn-primary" name="sub_login" value="Login">
			</div><br>
			<div>
				Not Registered? <a href="register.php" class="btn btn-warning" style="color: white;">Sign Up</a> <a href="alogin.php" class="btn btn-primary">Admin Login</a>
			</div>
					
			
		</form>
	</div>
</div>
<?php
if(isset($_POST['sub_login'])){
	session_start();

	include('connect.php');

	$username=$_POST['username'];
	$password=$_POST['password'];

	//echo $email." <br>";
	/*echo $password." <br>";

	if($db_conn){
		echo "DB COnnect Success! <br>";
	}
	echo "It worked!";
  */

	$username=stripslashes($username);
	$password=stripslashes($password);

	$sql="SELECT * FROM users WHERE username='$username' AND password='$password' ";
	$result=mysql_query($sql);

	$count=mysql_num_rows($result);

	if($count==1){
		$_SESSION['username']=$username;

		$rows=mysql_fetch_assoc($result);

		$_SESSION['user_id']=$rows['id'];
		$_SESSION['name']=$rows['name'];

		echo "<script>window.open('index.php', '_self')</script>";

		//echo "<script>window.open('index.php', '_self')</script>";

		echo "<br>".$_SESSION['user_id'];
		echo "<br>".$_SESSION['username'];

	}else{
		echo "<script>alert('Incorrect Username or Password! Please try again!')</script>";
	}

}
?>

</body>