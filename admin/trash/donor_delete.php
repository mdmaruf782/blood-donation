<?php 
include "../../include/db.php" ;
include "../../include/function.php" ;
include "../../include/aleart.php" ;
$get_id=$_GET['id'];

if (!$get_id) {
	header("location: ../all_donor.php");
	die();
}
else{
	$sql="SELECT * FROM `donor list` WHERE id='$get_id'";
	$run_sql=mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($run_sql)) {
		$get_photo=$row['photo'];
	}
	if (unlink("../../donor/$get_photo")) {
		$delete="DELETE FROM `donor list` WHERE `donor list`.`id` = '$get_id'";
		$run_delete=mysqli_query($conn,$delete);
		if ($run_delete) {
			$_SESSION['successmassage']= "Donor delete Successfully";
			header("location: ../all_donor.php");
		}
	}
	else{
		$delete="DELETE FROM `donor list` WHERE `donor list`.`id` = '$get_id'";
		$run_delete=mysqli_query($conn,$delete);
		if ($run_delete) {
			$_SESSION['successmassage']= "Donor delete Successfully";
			header("location: ../all_donor.php");
		}

	}
	

}


 ?>