<?php 
include "../include/db.php" ;
include "include/function.php" ;
include "../include/aleart.php" ;
confirm();
$admin=$_SESSION['admin_name'];
$get_id=$_GET['id'];
if (!$get_id) {
  header("location: inbox.php");
 die();
}
$sql="SELECT * FROM `massage` WHERE id='$get_id'";
$run_sql=mysqli_query($conn,$sql);
while ($rows=mysqli_fetch_array($run_sql)) {
 $lastdate=$rows['date'];
 $name=$rows['name'];
 $email=$rows['email'];
  $phone=$rows['phone'];
  $subject=$rows['subject'];
  $get_msg=$rows['massage'];
 
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
                    <div class="col-lg-12">
                      
                     
                      
                        <div class="py-12">
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
                       <center>message</center>
                      <p><?php echo $get_msg; ?></p>
                      </div>
                      <a data-toggle="collapse" data-target="#demo"><button class="btn btn-primary btn-block">Reply</button></a>
                      <div id="demo" class="collapse">
                        <textarea  name="content">
                        
                        </textarea>
                  </div>
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
  <script type="text/javascript">
    
    CKEDITOR.replace('content');
  </script>
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
  <script src="js/editorDemo.js"></script>
  

</body>



</html>
