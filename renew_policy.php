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
                     <legend>Renew/Initiate Policy</legend>
                     <form class="form-group" action="" method="post">
                        <table class="table table-condensed">
                           <tr>
                              <td>
                                 Transaction ID<br> <input type="text" name="trans_id" class="form-control">
                              </td>
                           </tr> 
                           <tr>
                              <td>
                                 Name<br> <input type="text" name="name" class="form-control">
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 E-Mail<br> <input type="email" name="email" class="form-control">
                              </td>
                           </tr>
                           <tr>
                              <td>
                                Vehicle Reg. No<br> <input type="text" name="vehicle_regnum" class="form-control">
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 Duration (in Years)<br> <input type="number" name="duration" class="form-control">
                              </td>
                           </tr>
                           <tr>
                              <td colspan=""><input type="submit" class="btn btn-info" name="sub_policy" value="Submit" > </td><td>   <input type="reset" value="Clear All" class="btn btn-warning"></td>
                           </tr>
                        </table>
                     </form>

<?php
if(isset($_POST['sub_policy'])){

   $user_id=$_SESSION['user_id'];

   $trans_id=$_POST['trans_id'];
   $name=$_POST['name'];
   $email=$_POST['email'];
   $vehicle_regnum=$_POST['vehicle_regnum'];
   $duration=$_POST['duration'];
   $pass=mt_rand();
   $ref_id=substr($pass, 1, 7);

  

   $sql="INSERT INTO policy(user_id, trans_id, name, email, vehicle_regnum, duration, status, ref_id)VALUES('$user_id', '$trans_id', '$name', '$email', '$vehicle_regnum', '$duration', 'pending', '$ref_id') "; 
   $result=mysql_query($sql);

   if($result){
       //Temporary Certificate
   $_SESSION['trans_id']=$trans_id;
   $_SESSION['name']=$name;
   $_SESSION['email']=$email;
   $_SESSION['vehicle_regnum']=$vehicle_regnum;
   $_SESSION['duration']=$duration;
   $_SESSION['ref_id']=$ref_id;
      echo "<script>alert('Your Policy renewal applicatiuon has been submitted!');</script>";
      echo "<script>window.open('print.php', '_self');</script>";
   }else{
       echo "<script>alert('ERROR: Your Policy renewal applicatiuon was not submitted. Pls try again!');</script>";
      //echo mysql_error();
      echo "<script>window.open('renew_policy.php', '_self');</script>";
   }

}
?>
          </fieldset>
<fieldset>
   <legend>Policies</legend>
   <table class="table table-condensed table-striped">
      <tr>
         <th>S/N</th>
         <th>Transaction ID</th>
         <th>Duration (Years)</th>
         <th>Reference ID</th>
         <th>Status</th>
      </tr>
<?php
$user_id=$_SESSION['user_id'];
$sql2="SELECT * FROM policy WHERE user_id='$user_id' ORDER BY id DESC ";
$result2=mysql_query($sql2);
$i=1;
while($rows=mysql_fetch_assoc($result2)){
?>
      <tr>
         <td><?php echo $i++; ?></td>
         <td><?php echo $rows['trans_id']; ?></td>
         <td><?php echo $rows['duration']; ?></td>
         <td><?php echo $rows['ref_id']; ?></td>
         <td>
            <?php 
            $status=$rows['status'];

            if($status=='pending'){
               echo '<a class="btn btn-danger">Pending</a>';
            }else{
               echo '<a class="btn btn-success">Approved</a>';
            }
            ?>
            
         </td>
      </tr>
   <?php
}
   ?>
   </table>
</fieldset>


		</div>
	</div>
</div>
</div>


</body>