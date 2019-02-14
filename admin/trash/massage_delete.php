<?php 
include "../../include/db.php" ;
include "../../include/function.php" ;
include "../../include/aleart.php" ;

$get_id=$_GET['id'];
if (!$get_id) {
	header('location: ../inbox.php');
}


else{
	$delete_id="DELETE FROM `massage` WHERE `massage`.`id` = '$get_id'";
		$run_delete=mysqli_query($conn,$delete_id);
		$_SESSION['successmassage']= "Message Delted successfully";
		header("location: ../inbox.php");
	
}



 ?>