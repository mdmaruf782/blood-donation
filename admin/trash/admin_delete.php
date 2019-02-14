<?php 
include "../../include/db.php" ;
include "../../include/function.php" ;
include "../../include/aleart.php" ;
$get_id=$_GET['id'];

if (!$get_id) {
	header("location: ../all_admin.php");
	die();
}
else{
	$sql="SELECT * FROM `admin` WHERE id='$get_id'";
	$run_sql=mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($run_sql)) {
		$get_photo=$row['photo'];
	}
	if (unlink("../admin/$get_photo")) {
		$delete="DELETE FROM ` ` WHERE `admin`.`id` = '$get_id'";
		$run_delete=mysqli_query($conn,$delete);
		if ($run_delete) {
			$_SESSION['successmassage']= "Donor delete Successfully";
			header("location: ../all_admin.php");
		}
	}
	else{
		$delete="DELETE FROM `admin` WHERE `admin`.`id` = '$get_id'";
		$run_delete=mysqli_query($conn,$delete);
		if ($run_delete) {
			$_SESSION['successmassage']= "Donor delete Successfully";
			header("location: ../all_admin.php");
		}

	}
	

}


 ?>