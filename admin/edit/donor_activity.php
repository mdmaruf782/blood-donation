<?php 
include "../../include/db.php" ;
include "../include/function.php" ;
include "../../include/aleart.php" ;
confirm();
$admin=$_SESSION['admin_name'];
$get_id=$_GET['id'];
if (!$get_id) {
	header("location: ../all_donor.php");
	die();
}
else{
	$sql="SELECT * FROM `donor list` WHERE id='$get_id'";
	$run_sql=mysqli_query($conn,$sql);
	while ($rows=mysqli_fetch_array($run_sql)) {
		$status=$rows['status'];
		
	}
	if ($status== "request") {
			$request="UPDATE `donor list` SET `admin` = '$admin', `date` = '$date',  `status` = 'active' WHERE `donor list`.`id` = '$get_id'";
			$run_request=mysqli_query($conn,$request);
			if ($run_request) {
				 $_SESSION['successmassage']= "Donor active";
			 	header("location: ../all_donor.php");
			}
		}
		elseif ($status == "active") {
			$deactive="UPDATE `donor list` SET `admin` = '$admin', `date` = '$date',  `status` = 'deactivate' WHERE `donor list`.`id` = '$get_id'";
			$run_deactive=mysqli_query($conn,$deactive);
			if ($run_deactive) {
				 $_SESSION['successmassage']= "Donor deactivated successfully";
				 header("location: ../all_donor.php");
			}
			
		}
		elseif ($status == "deactivate") {
			$active="UPDATE `donor list` SET `admin` = '$admin', `date` = '$date',  `status` = 'active' WHERE `donor list`.`id` = '$get_id'";
			$run_active=mysqli_query($conn,$active);
			if ($run_active) {
				 $_SESSION['successmassage']= "Donor activated successfully";
			 	header("location: ../all_donor.php");
			}
		}
		else{
			 $_SESSION['error']= "Something Wrong";
			 	header("location: ../all_donor.php");
		}
}


 ?>