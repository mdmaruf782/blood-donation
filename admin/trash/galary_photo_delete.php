<?php 
include "../../include/db.php" ;
include "../../include/function.php" ;
include "../../include/aleart.php" ;

$get_id=$_GET['id'];
if (!$get_id) {
	header('location: ../add_new_galary.php');
}
elseif($get_id){
	$sql="SELECT * FROM `galary` WHERE id='$get_id'";
	$run_sql=mysqli_query($conn,$sql);
	while ($rows=mysqli_fetch_array($run_sql)) {
		$get_photos=$rows['loader_name'];
	}
	unlink("../../images/$get_photos") ;
		$delete_id="DELETE FROM `galary` WHERE `galary`.`id` = '$get_id'";
		$run_delete=mysqli_query($conn,$delete_id);
		if ($run_delete) {
			 $_SESSION['successmassage']= "Post Delted successfully";
			 header("location: ../add_new_galary.php ");
		}
		else{
			header("location: ../add_new_galary.php ");
		}
	


}

else{
	header("location: ../add_new_galary.php ");
}



 ?>