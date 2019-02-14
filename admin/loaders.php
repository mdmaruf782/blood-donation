<?php
include "../include/db.php" ;
include "include/function.php" ;
include "../include/aleart.php" ;
confirm();
$admin=$_SESSION['admin_name'];
if (isset($_POST['submit'])) {
  $permision=array('gif','png');
  $img=$_FILES['loader']['name'];
  $size=$_FILES['loader']['size'];
  $tmp=$_FILES['loader']['tmp_name'];
  
  $div=explode('.', $img);
  $ext=strtolower(end($div));
  $unquie_name=substr(md5(time()), 0,10).'.'.$ext;
  $path="../loader/".$unquie_name;
  if (empty($img)) {
   $_SESSION['error']= "file can't be empty";
  }
  elseif (in_array($ext, $permision) === false) {
    $_SESSION['error']= "File is not GIF format Please upload GIF format file";
  }
 else{
  move_uploaded_file($tmp, $path);

  $sent_file="INSERT INTO `ui` (`date`, `admin`, `loader_name`, `status`) VALUES ('$date', '$admin', '$unquie_name', 'deactivate')";
  $run_sent_file=mysqli_query($conn,$sent_file);
  if ($run_sent_file) {
   $_SESSION['successmassage']= "Uploaded successfully if you want to active this loader just click active button";
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <html>
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
     
    </head>
    <body>
      <div class="container-scroller">
        <?php include "header.php" ?>
        
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_settings-panel.html -->
          
          <?php include "side_nav.php" ; ?>
          
          
          
          
          <!-- partial -->
          <div class="main-panel"> 
            
            <div class="content-wrapper">
              <div class="page-header">
                <h3 class="page-title">
                Loaders
                </h3>

                <nav aria-label="breadcrumb">

                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Loaders</li>
                  </ol>
                </nav>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Loaders</h4>
                      
                    </div>
                    <div class="row">

                      <div class="col-lg-12 grid-margin stretch-card">

                        <div class="card">
                          <?php echo error(); echo successmassage(); ?>
                          <div class="card-body">
                            <h4 class="card-title">Your so fresh input file — Default version</h4>
                            <form method="post" enctype="multipart/form-data">
                              <input type="file" class="dropify"  name="loader" /><br>
                              <button class="btn btn-success col-sm-12" name="submit" type="submit">upload</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <?php 
                      $query="SELECT * FROM `ui`";
                      $run_query=mysqli_query($conn,$query);
                      while ($rows=mysqli_fetch_array($run_query)) {
                        $status=$rows['status'];
                       ?>
                      <div class="col-sm-4 grid-margin stretch-card" style="border:1px solid lightgray;border-radius: 5px;">
                        <div class="card-body">
                          <div class="row">
                            <img src="../loader/<?php echo $rows['loader_name'] ?>" style="height: 100px;width: 90%;" class="col-sm-12">

                            <button class="col-sm-12 btn <?php 
                            if( $status=="deactivate"){
                              echo "btn-warning";
                            }
                            else{
                              echo "btn-success";
                            }
                             ?>"><?php echo $rows['status']; ?></button>
                           

                            <a href="edit/active_loader.php?id=<?php echo $rows['id'] ; ?>" class="col-sm-6" style="margin-top: 5px;"><button class="btn btn-success col-sm-12" >active</button></a>
                            <a href="trash/delete_loader.php?id=<?php echo $rows['id'] ; ?>" class="col-sm-6" style="margin-top: 5px;"><button class="btn btn-danger  col-sm-12"  >delete</button></a>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
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
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
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
<script src="js/dropify.js"></script>


 
</body>
</html>