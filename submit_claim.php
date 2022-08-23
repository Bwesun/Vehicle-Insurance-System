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

			<fieldset>
                        <legend><font>Submit Claim</font></legend>
                        <form method="post">
                           <table class="table form-group">
                              <tr>
                                 <td colspan="3"><b>POLICY HOLDER INFORMATION</b></td>
                              </tr>
                              <tr>
                                 <td>Full Name<br>
                                    <input type="text" class="form-control" name="name"></td>
                                 <td>Occupation<br>
                                    <input type="text" class="form-control" name="occupation"></td>
                                 <td>Address<br>
                                    <textarea class="form-control" name="address"></textarea></td>
                              </tr>

                              <tr>
                                 <td colspan="3"><b>DRIVER INFORMATION AT TIME OF ACCIDENT</b></td>
                              </tr>
                              <tr>
                                 <td>Name<br>
                                    <input type="text" name="a_name" class="form-control"></td>
                                 <td>Occupation<br>
                                    <input type="text" name="a_occupation" class="form-control"></td>
                                 <td>Date of Birth<br>
                                    <input type="date" name="a_date" class="form-control"></td>
                              </tr>
                              <tr>
                                 <td>Address<br>
                                    <textarea class="form-control" name="a_address"></textarea></td>
                                 <td>Licesnse No.<br>
                                    <input type="text" name="license_no" class="form-control"></td>
                                 <td>License No. Expiry<br>
                                    <input type="text" name="license_no_exp" class="form-control"></td>
                              </tr>

                              <tr>
                                 <td colspan="3"><b>VEHICLE INFORMATION</b></td>
                              </tr>
                              <tr>
                                 <td>Reg. No.<br>
                                    <input type="text" name="regno" class="form-control"></td>
                                 <td>Make<br>
                                    <input type="text" name="make" class="form-control"></td>
                                 <td>Sitting Capacity<br>
                                    <input type="number" name="capacity" class="form-control"></td>
                              </tr>
                              <tr>
                                 <td>Ownership<br>
                                    <input type="text" name="ownership" class="form-control"></td>
                                 <td>Cover Provided<br>
                                    <input type="text" name="cover_provided" class="form-control"></td>
                                 <td>Vehicle use<br>
                                    <input type="text" name="vehicle_use" class="form-control"></td>
                              </tr>
                              <tr>
                                 <td colspan="3"><input type="submit" name="sub_reg" value="Submit Claim" class="btn btn-info"></td>
                              </tr>
                           </table>
                        </form>

<?php
if(isset($_POST['sub_reg'])){

include('connect.php');

$name=$_POST['name'];	
$occupation=$_POST['occupation'];	
$address=$_POST['address'];	
$a_name=$_POST['a_name'];	
$a_occupation=$_POST['a_occupation'];	
$a_date=$_POST['a_date'];	
$a_address=$_POST['a_address'];	
$license_no=$_POST['license_no'];	
$license_no_exp=$_POST['license_no_exp'];	
$regno=$_POST['regno'];	
$make=$_POST['make'];	
$capacity=$_POST['capacity'];	
$ownership=$_POST['ownership'];	
$cover_provided=$_POST['cover_provided'];	
$vehicle_use=$_POST['vehicle_use'];	

$sql="INSERT INTO claim(fullname, occupation, address, d_name, d_occupation, d_dob, d_address, d_license_no, d_license_exp, v_regnum, v_make, v_sitting_capacity, v_ownership, v_cover_provided, vehicle_use)VALUES('$name', '$occupation', '$address', '$a_name', '$a_occupation', '$a_date', '$a_address', '$license_no', '$license_no_exp', '$regno', '$make', '$capacity', '$ownership', '$cover_provided', '$vehicle_use') ";
$result=mysql_query($sql);

if($result){
	echo "<script>alert('Your Claim has been Submitted!')</script>";
}else{
	echo "<script>alert('ERROR: Your Claim was not Submitted!')</script>";
}
//echo $sql."<br>".mysql_error();

}

?>

                     </fieldset>

		</div>
	</div>
	</div>
</div>


</body>