<?php
include "../include/db.php" ;
include "include/function.php" ;
include "../include/aleart.php" ;

function login($user,$pass){
    global $conn;

    $query="SELECT * FROM `admin` WHERE username='$user' AND password='$pass'";
    $run=mysqli_query($conn,$query);
    if ($admin=mysqli_fetch_assoc($run)) {
        return $admin;
    }
    else{
        return null;
    }
}


if (isset($_POST['submit'])) {
    $username= substr(md5($_POST['username']), 0,10);
    $password=substr(md5($_POST['password']), 0,10);


    if (empty($username) || empty($password)) {
         $_SESSION["error"]= "all field are required";
    }
    else{
        $found_admin=login($username,$password);
        $_SESSION['admin_id']=$found_admin['id'];
        $_SESSION['admin_name']=$found_admin['name'];
        $_SESSION['admin_profile']=$found_admin['photo'];
        if ($found_admin) {
           
            header("location:index.php");
             $_SESSION['successmassage']="welcome to admin panel :)";
        }
        else{
             $_SESSION["error"]= "login faild";
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
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-transparent text-left p-5 text-center">
              <img src="logo.png" class="lock-profile-img" alt="img">
               <?php echo error(); ?>
              <form class="pt-5" method="post">
                <?php echo error(); ?>
                <div class="form-group">
                  <label for="examplePassword1">Username</label>
                  <input type="text" class="form-control text-center" id="examplePassword1" placeholder="username" name="username" required="required">
                </div>
                <div class="form-group">
                  <label for="examplePassword1">Password</label>
                  <input type="password" class="form-control text-center" id="examplePassword1" placeholder="Password" name="password" required="required">
                </div>
                <div class="mt-5">
                <button class="btn btn-block btn-success btn-lg font-weight-medium" name="submit">submit</button>
                </div>
                <div class="mt-3 text-center">
                  <a href="#" class="auth-link text-white">Sign in using a different account</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
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
</body>


</html>


