<?php 
include "../../include/db.php" ;
include "../../include/function.php" ;
include "../../include/aleart.php" ;

$get_id=$_GET['id'];
if (!$get_id) {
	header('location: ../add_new_slider.php');
}
elseif($get_id){
	$sql="SELECT * FROM `slider` WHERE id='$get_id'";
	$run_sql=mysqli_query($conn,$sql);
	while ($rows=mysqli_fetch_array($run_sql)) {
		$get_photos=$rows['image'];
	}
	 if (unlink("../../images/$get_photos")) {
	 	
	 
		$delete_id="DELETE FROM `slider` WHERE `slider`.`id` = '$get_id'";
		$run_delete=mysqli_query($conn,$delete_id);
		if ($run_delete) {
			 $_SESSION['successmassage']= "Slider Delted successfully";
			 header("location: ../add_new_slider.php ");
		}
		else{
			header("location: ../add_new_slider.php ");
		}
	
	}
	else{
		$delete_id="DELETE FROM `slider` WHERE `slider`.`id` = '$get_id'";
		$run_delete=mysqli_query($conn,$delete_id);
		$_SESSION['successmassage']= "Query Delted successfully";
		header("location: ../add_new_slider.php");
	}

}

else{
	header("location: ../add_new_slider.php");
}



 ?>