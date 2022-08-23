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
                     <legend>Make a Proposal</legend>
                     <form class="form-group" name="make_proposal" action="" method="post">
                        <table class="table table-condensed">
                           <tr>
                              <th colspan="3">HOLDER'S INFORMATION</th>
                           </tr>
                           <tr>
                              <td>Firstname<br>
                                 <input type="text" class="form-control" name="firstname">
                              </td>
                              <td>Lastname<br>
                              <input type="text" class="form-control" name="lastname">
                           </td>
                           <td>Occupation<br>
                              <input type="text" class="form-control" name="occupation">
                           </td>
                           </tr> 
                           <tr>
                              <td colspan="2">Address<br>
                                 <textarea class="form-control" name="address" placeholder="Enter Address...."></textarea>
                              </td>
                              
                           </tr>
                           <tr>
                              <th>VEHICLE DETAILS</th>
                           </tr>
                           <tr>
                              <td>Make<br>
                                 <input type="text" class="form-control" name="make">
                              </td>
                              <td>Model<br>
                                 <input type="text" class="form-control" name="model">
                              </td>
                              <td>Capacity<br>
                                 <input type="text" class="form-control" name="capacity">
                              </td>
                           </tr>
                           <tr>
                              <td>No of Seats<br>
                                 <input type="text" class="form-control" name="no_of_seat">
                              </td>
                              <td>Value (in NGN)<br>
                                 <input type="text" class="form-control" name="value">
                              </td>
                              <td>Use of Vehicle<br>
                                 <input type="text" class="form-control" name="use_of_vehicle">
                              </td>
                           </tr>
                           <tr>
                              <th colspan="3">SITE INFORMATION</th>
                           </tr>
                           <tr>
                              <td colspan="2">E-mail  <input type="email" class="form-control" name="email">
                              </td>
                           </tr>
                           <tr>
                              <td colspan=""><input type="submit" class="btn btn-info" name="sub_proposal" value="Submit Proposal" > </td><td>   <input type="reset" value="Clear All" class="btn btn-warning"></td>
                           </tr>
                        </table>
                     </form>

<?php
if(isset($_POST['sub_proposal'])){

   $user_id=$_SESSION['user_id'];

   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $occupation=$_POST['occupation'];
   $address=$_POST['address'];
   $make=$_POST['make'];
   $model=$_POST['model'];
   $capacity=$_POST['capacity'];
   $no_of_seat=$_POST['no_of_seat'];
   $value=$_POST['value'];
   $use_of_vehicle=$_POST['use_of_vehicle'];
   $email=$_POST['email'];

   $sql="INSERT INTO proposal(user_id, firstname, lastname, occupation, address, make, model, capacity, no_of_seat, value, use_of_vehicle, email)VALUES('$user_id', '$firstname', '$lastname', '$occupation', '$address', '$make', '$model', '$capacity', '$no_of_seat', '$value', '$use_of_vehicle', '$email') "; 
   $result=mysql_query($sql);

   if($result){
      echo "<script>alert('Your Proposal has been submitted!');</script>";
      echo "<script>window.open('make_proposal.php', '_self');</script>";
   }else{
       echo "<script>alert('ERROR: Your Proposal was not submitted, please try again!');</script>";
      echo "<script>window.open('make_proposal.php', '_self');</script>";
   }

}
?>
          </fieldset>


		</div>
	</div>
</div>
</div>


</body>