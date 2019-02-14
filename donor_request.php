<?php 
 include "include/db.php"; 
include "include/function.php";
include "include/aleart.php";

if (isset($_POST['submit'])) {
    $permision=array('jpg','jpeg');
   $name=$_POST['Name'];
   $email=$_POST['Email'];
   $phone=$_POST['Phone'];
   $division=$_POST['Division'];
   $birthday=$_POST['date'];
   $nid=$_POST['nid'];
   $group=$_POST['group'];
   $message=$_POST['message'];
   $img=$_FILES['photo']['name'];
   $img_size=$_FILES['photo']['size'];
   $tmp=$_FILES['photo']['tmp_name'];

   $div=explode('.', $img);
   $ext=strtolower(end($div));
   $unque_img=substr(md5(time()), 0,10).'.'.$ext;
   $path="donor/".$unque_img;

 
  
   if ($img_size > 20000000) {
       $_SESSION['error']= "Photo size should be less then 2 MB";
       header('location: index.php');
   }
   elseif (in_array($ext, $permision) === false) {
       $_SESSION['error']= "Photo only jpeg and jpg format";
       header('location: index.php');
   }

   else{
   move_uploaded_file($tmp, $path);
   $query="INSERT INTO `donor list` (`date`, `name`, `email`, `phone`, `nid`, `division`, `blood_group`, `birthday`, `photo`, `status`, `massage`) VALUES ('$date', '$name', '$email', '$phone','$nid', '$division', '$group', '$birthday', '$unque_img', 'request','$message')";
    $run_sql=mysqli_query($conn,$query);
    if ($run_sql) {
    	$_SESSION['successmassage']= "Your request successfully sent";
    	 header('location: index.php');
    }
   }
}


 ?>