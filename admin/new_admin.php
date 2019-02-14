<?php
include "../include/db.php" ;
include "include/function.php" ;
include "../include/aleart.php" ;
confirm();
$admin=$_SESSION['admin_name'];
if (isset($_POST['submit'])) {

$name=$_POST['name'];//  get  form data  our form-name
$email=$_POST['email'];//  get  form data  our form-email
$number=$_POST['number'];//  get  form data  our form-number
$Division=$_POST['Division'];//  get  form data  our form-division name
$group=$_POST['group'];//get form data  our form-group
$Birthday=$_POST['Birthday'];//  get  form data our form-birthday
$nid=$_POST['nid'];//get form our form-birthday
$username=$_POST['username'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];

//for img function
$array=array('jpg','jpeg');//for permision extension
$img=$_FILES['photo']['name']; //get image name from our form img
$tmp=$_FILES['photo']['tmp_name'];//
$div=explode('.', $img);
$ext=strtolower(end($div)); //for extention get lower
$unque_img=substr(md5(time()), 0,10).'.'.$ext;//for ganerate  unque name
$path="admin/".$unque_img;//for our upload loaction path
//end img function
$assoc_email="SELECT * FROM `admin` WHERE email='$email' OR phone='$number' OR nid='$nid'";
$run_assoc=mysqli_query($conn,$assoc_email);
$found=mysqli_fetch_assoc($run_assoc);

//searching username
$code=substr(md5($username), 0,10);
$assoc_username="SELECT * FROM `admin` WHERE username='$code'";
$run_assoc_username=mysqli_query($conn,$assoc_username);
$found_username=mysqli_fetch_assoc($run_assoc_username);
//end searching username
if (empty($name) || empty($email) || empty($number) || empty($Division) || empty($group) || empty($Birthday) || empty($nid) || empty($img) ) {
$_SESSION['error']= "all file are required";
}

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL )) {
$_SESSION['error']= "insert a valid email";
}
elseif ($found) {
$_SESSION['error']= "this email address / phone / NID no allready exists";
}
elseif (in_array($ext, $array) === false) {
$_SESSION['error']= "insert image file only jpg and jpeg format";
}
elseif ($found_username) {
 $_SESSION['error']= "username allready exists";
}
elseif ($password !== $repassword) {
  $_SESSION['error']= "Password not match";
}

else{
if (move_uploaded_file($tmp, $path)) {
  $pass_code=substr(md5($password), 0,10);
  $username_code=substr(md5($username), 0,10);

$sql="INSERT INTO `admin` (`date`, `admin`, `name`, `email`, `phone`, `division`, `group`, `birthday`, `nid`, `username`, `password`, `photo`) VALUES ('$date', '$admin', 
'$name', '$email', '$number', '$Division', '$group', '$Birthday', '$nid', '$username_code', '$pass_code', '$unque_img')";
$run_sql=mysqli_query($conn,$sql);
if ($run_sql) {
$_SESSION['successmassage']= "Successfully Admin Added";
}
else{
$_SESSION['error']= "something wrong";
}
}
else{
$_SESSION['error']= "something wrong";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Melody Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
    
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    
  </head>
  <body>
    <Documentation class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include "header.php" ; ?>
    <!-- partial -->
    //
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php include "side_nav.php" ; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add new Admin</h4>   <?php echo error(); echo successmassage(); ?>
                  <form id="example-vertical-wizard" method="post"  enctype="multipart/form-data">
                    <div>
                      
                      <h3>Admin Info</h3>
                      <section>
                        
                        <div class="form-group">
                          <label for="userName">Name *</label>
                          <input id="userName" name="name" type="text" class="required form-control " required="required">
                        </div>
                        <div class="form-group">
                          <label for="userName">Email *</label>
                          <input id="email" name="email" type="email" class="required form-control"  required="required">
                        </div>
                        <div class="form-group">
                          <label for="confirm">Phone Number *</label>
                          <input  name="number" type="text" class="required form-control"  required="required">
                          
                        </div>
                        <div class="form-group">
                          <label for="address">NID NO</label>
                          <input id="nid" name="nid" type="text" class="form-control"  required="required">
                          
                        </div>
                      </section>
                      <h3>Profile</h3>
                      <section>
                        <h4>Profile</h4>
                        <div class="form-group">
                          <label for="photo">Donor Photo *</label>
                          <input id="photo" name="photo" type="file" class="required form-control"  required="required">
                        </div>
                        <div class="form-group ">
                          <div class="select-style">
                            <label for="" class="pull-left text-danger" style="color: #EF3D32">Select your Division</label>
                            <select class="form-control" name="Division" required="required">
                              <option value="Chittagong">Chittagong</option>
                              <option value="Dhaka">Dhaka</option>
                              <option value="Barisal">Barisal</option>
                              <option value="Khulna">Khulna</option>
                              <option value="Rajshahi">Rajshahi</option>
                              <option value="Rangpur">Rangpur</option>
                              <option value="Sylhet">Sylhet</option>
                            </select>
                          </div>
                        </div>
                        <div class="select-style">
                          <label for="" class="pull-left text-danger" style="color: #EF3D32">Blood Group</label>
                          <select class="form-control" name="group"  required="required">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="address">Birthday</label>
                          <input id="address" name="Birthday" type="date" class="form-control" required="required">
                          
                        </div>
                        
                      </section>
                      <h3>Account</h3>
                      <section>
                        
                        <div class="form-group">
                          <label for="userName">UserName</label>
                          <input id="userName" name="username" type="text" class="required form-control " required="required">
                        </div>
                        <div class="form-group">
                          <label for="userName">Password</label>
                          <input id="email" name="password" type="password" class="required form-control"  required="required">
                        </div>
                        <div class="form-group">
                          <label for="confirm">Repassword</label>
                          <input  name="repassword" type="password" class="required form-control"  required="required">
                          
                        </div>
                        
                      </section>
                      <h3>Finish</h3>
                      <section>
                        <center> <h4>Finish</h4></center>
                        <div class="form-check">
                          <center> <label class="form-check-label">
                            
                            Are  ready to Submit?
                            click To submit Button
                          </label></center>
                          <button type="submit" name="submit" class="btn btn-danger col-sm-12">Submit</button>
                        </div>
                      </section>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="js/settings.js"></script>
<script src="js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/wizard.js"></script>
<!-- End custom js for this page-->
</body>
</html>