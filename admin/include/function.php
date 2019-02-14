<?php 





$date = strftime("%Y-%m-%d");

 
function get_admin(){
	if (isset($_SESSION['admin_id'])) {
		return true;
	}
}
function confirm(){
	if (!get_admin()) {
		header("location: login.php");
	}
}


 
 

 ?>