<?php include "../include/db.php" ;
include "include/function.php" ;
include "../include/aleart.php" ;
confirm();
$admin=$_SESSION['admin_name'];
if (isset($_POST['submit'])) {
$name=$_POST['title'];
$phone=$_POST['phone'];
$Discription=$_POST['Discription'];
$img=$_FILES['img']['name'];
$tmp=$_FILES['img']['tmp_name'];
$path="../images/".$img;
move_uploaded_file($tmp, $path);
$sql="INSERT INTO `slider` (`date`, `admin`, `title`, `discription`, `number`, `image`) VALUES ('$date', '$admin', '$name',
'$Discription', '$phone', '$img')";
$run=mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/summernote/dist/summernote-bs4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
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
              add new slider post
              </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Slider</a></li>
                  <li class="breadcrumb-item active" aria-current="page">slider form</li>
                </ol>
              </nav>
            </div>
            
            
            <div class="row grid-margin">
              <div class="col-lg-12">
                
                <div class="card">
                  <form method="post" enctype="multipart/form-data">
                    
                    <div class="card-body">
                      <h4 class="card-title">Image</h4>
                      <input type="file" name="img" class="form-control col-sm-12" required="required">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">title</h4>
                      <input type="text" name="title" class="form-control col-sm-12" placeholder="enter title name" required="required">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Phone Number</h4>
                      <input type="text" name="phone" class="form-control col-sm-12" placeholder="enter title name" required="required">
                    </div>
                    <div class="card-body" >
                      <h4 class="card-title">Discription</h4>
                      <textarea id="simpleMde" name="Discription" required="required">
                      </textarea>
                    </div>
                    <div class="card-body">
                      
                      <input type="submit" name="submit" class="form-control col-sm-12" value="submit" style="background: red;color: #fff">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent post</h4>
                  <h4 class="card-title">Total Slideshow  <?php $slider_id="SELECT count(id) AS total FROM `slider` ";
                  $slider_id_run=mysqli_query($conn,$slider_id);
                  $id_assoc=mysqli_fetch_assoc($slider_id_run);
                  $total_slider=$id_assoc['total'];
                  echo $total_slider;
                  ?></h4>
                  <?php echo error();echo successmassage(); ?>
                  <div class="owl-carousel owl-theme loop">
                    <?php
                    $get_slider="SELECT * FROM `slider`";
                    $run_get_slider=mysqli_query($conn,$get_slider);
                    while ($rows=mysqli_fetch_array($run_get_slider)) {
                    
                    ?>
                    <div class="item">
                      <img src="../images/<?php echo $rows['image'] ; ?>" alt="image" style="height: 200px;"/>
                      <a href="trash/delete_slider.php?id=<?php echo $rows['id'] ; ?>" onclick="go()"><button class="btn btn-danger col-sm-12">Delete</button></a>
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="#" target="_blank">CodeFighter</a>. All rights reserved.</span>
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
    <!-- plugin js for this page -->
    <script src="vendors/tinymce/tinymce.min.js"></script>
    <script src="vendors/tinymce/themes/modern/theme.js"></script>
    <script src="vendors/summernote/dist/summernote-bs4.min.js"></script>
    <!-- plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/editorDemo.js"></script>
    <script src="js/owl-carousel.js"></script>
    <script src="js/toastDemo.js"></script>
    
    <!-- End custom js for this page-->
  </body>
</html>