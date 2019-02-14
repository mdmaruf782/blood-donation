<?php 
include "../../include/db.php" ;
include "../include/function.php" ;
include "../../include/aleart.php" ;
confirm();
$admin=$_SESSION['admin_name'];

$get_id=$_GET['id'];
if (!$get_id) {
		header("location: ../loaders.php");
}
$query="SELECT * FROM `ui` WHERE `status` LIKE 'activated'";
$run_query=mysqli_query($conn,$query);
while ($rows=mysqli_fetch_array($run_query)) {
 $id=$rows['id'];
}
$sql="UPDATE `ui` SET `status` = 'deactivate' WHERE `ui`.`id` = '$id'";
$run_sql=mysqli_query($conn,$sql);

if ($run_sql){

$activated_query="UPDATE `ui` SET `status` = 'activated' WHERE `ui`.`id` = '$get_id'";
$run=mysqli_query($conn,$activated_query);
if ($run) {
	 $_SESSION['successmassage']= "Loader activated successfully";
	header("location: ../loaders.php");
}

}

/*$sql="UPDATE `ui` SET `status` = 'activated' WHERE `ui`.`id` = '$get_id'";
$run_sql=mysqli_query($conn,$sql);*/

 ?>