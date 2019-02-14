<?php 
include "../include/db.php" ;
include "include/function.php" ;
include "../include/aleart.php" ;
confirm();
$admin=$_SESSION['admin_name'];
$get_id=$_GET['id'];
if (!$get_id) {
  header("location: all_admin.php");
 die();
}
$sql="SELECT * FROM `admin` WHERE id='$get_id'";
$run_sql=mysqli_query($conn,$sql);
while ($rows=mysqli_fetch_array($run_sql)) {
 $lastdate=$rows['date'];
 $name=$rows['name'];
 $email=$rows['email'];
  $phone=$rows['phone'];
  $nid=$rows['nid'];
  $division=$rows['division'];
  $blood_group=$rows['group'];
  $birthday=$rows['birthday'];
  $photo=$rows['photo'];
  
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
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   <?php include "header.php" ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    <?php include "side_nav.php" ?>
     
    
      <!-- partial -->
       <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Profile
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="all_donor.php">All Donor</a></li>
                <li class="breadcrumb-item active" aria-current="page">view donor profile</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="border-bottom text-center pb-4">
                       <a href="admin/<?php echo $photo ?>" target="_blank"><img src="admin/<?php echo $photo ?>"" alt="profile" class="img-lg rounded-circle mb-3"/></a>
                       
                        
                      </div>
                     
                      
                      <div class="py-4">
                        <?php echo error(); echo successmassage(); ?>
                       
                         
                        <p class="clearfix">
                          <span class="float-left">
                            Last Update
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $lastdate; ?>
                          </span>
                        </p>
                        
                          <p class="clearfix">
                          <span class="float-left">
                            name
                          </span>
                          <span class="float-right text-muted">
                           <?php echo $name; ?>
                            
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Phone
                          </span>
                          <span class="float-right text-muted">
                           <?php echo $phone; ?>
                           </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Mail
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $email; ?>
                           </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            NID
                          </span>
                          <span class="float-right text-muted">
                             <?php echo $nid; ?>
                           </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Division
                          </span>
                          <span class="float-right text-muted">
                             <?php echo $division; ?>
                              </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Blood Group
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $blood_group; ?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Birthday
                          </span>
                          <span class="float-right text-muted">
                           <?php echo $birthday; ?>
                          </span>
                        </p>
                      
                      </div>
                      <a href="<?php echo $phone ?>"><button class="btn btn-primary btn-block">Call Now</button></a>
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3><?php echo $name; ?></h3>
                          <div class="d-flex align-items-center">
                            <h5 class="mb-0 mr-2 text-muted"><?php echo $division; ?></h5>
                            <select id="profile-rating" name="rating" autocomplete="off">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                        </div>
                        <div>
                          
                        </div>
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                        <ul class="nav profile-navbar">
                         
                          <li class="nav-item">
                            <a class="nav-link active" href="#">
                              <i class="fas fa-file"></i>
                              activity
                            </a>
                          </li>
                          
                        </ul>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
      
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
  <script src="js/data-table.js"></script>
  <!-- End custom js for this page-->
  <script src="js/profile-demo.js"></script>
</body>



</html>
