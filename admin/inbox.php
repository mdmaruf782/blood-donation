<?php 
include "../include/db.php" ;
include "include/function.php" ;
include "../include/aleart.php" ;
confirm();
$admin=$_SESSION['admin_name'];
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
             All Donor List
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">All admin</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> All Admin List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <?php echo successmassage(); echo error(); ?>
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Read</th>
                            <th>Date</th>
                            <th>Name</th>

                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            
                          
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $query="SELECT * FROM `massage` ORDER BY id DESC";
                        $run=mysqli_query($conn,$query);
                        if ($run) {
                       $i=0;
                        while ($rows=mysqli_fetch_array($run)) {
                        $i++;

                         ?>

                        <tr>
                            <td><?php echo $i; ?></td>
                           
                            <td><?php echo $rows['admin']; ?></td>
                            <td><?php echo $rows['date']; ?></td>
                            

                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['email']; ?></td>
                            <td><?php echo $rows['phone']; ?></td>
                            <td><?php echo $rows['subject']; ?></td>

                          
                            <td>
                             <a href="full_massage.php?id=<?php echo $rows['id'] ; ?>">
                              <button class="btn btn-outline-primary">View</button>
                              </a>
                              
                               <a href="trash/massage_delete.php?id=<?php echo $rows['id'] ; ?>"> 
                                <button class="btn btn-outline-primary"><i class="far fa-trash-alt"></i></button>
                              </a>
                              
                            </td>
                        </tr>

                        
                        <?php }  } ?>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="#" target="_blank">CodeFigther</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
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
</body>



</html>
