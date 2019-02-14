<?php 
include "../../include/db.php" ;
include "../../include/function.php" ;
include "../../include/aleart.php" ;

$get_id=$_GET['id'];
if (!$get_id) {
	header('location: ../loaders.php');
}
elseif($get_id){
	$sql="SELECT * FROM `ui` WHERE id='$get_id'";
	$run_sql=mysqli_query($conn,$sql);
	while ($rows=mysqli_fetch_array($run_sql)) {
		$get_photos=$rows['loader_name'];
	}
	unlink("../../loader/$get_photos") ;
		$delete_id="DELETE FROM `ui` WHERE `ui`.`id` = '$get_id'";
		$run_delete=mysqli_query($conn,$delete_id);
		if ($run_delete) {
			 $_SESSION['successmassage']= "Loader Delted successfully";
			 header("location: ../loaders.php ");
		}
		else{
			header("location: ../loaders.php ");
		}
	


}

else{
	header("location: ../loaders.php ");
}



 ?>