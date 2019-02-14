<?php include '../include/db.php'; ?>
<?php include 'include/function.php'; ?>
<?php include '../include/aleart.php'; ?>

<?php 
$_SESSION['admin_id']=null;
session_destroy();
header("location: login.php");

 ?>