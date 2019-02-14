<?php
include "../include/db.php" ;
include "include/function.php" ;
include "../include/aleart.php" ;
confirm();
$admin=$_SESSION['admin_name'];
if (isset($_POST['submit'])) {
$permision=array('jpeg','jpg');
$img=$_FILES['img']['name'];
$size=$_FILES['img']['size'];
$tmp=$_FILES['img']['tmp_name'];
$div=explode('.', $img);
$ext=strtolower(end($div));
$unquie_name=substr(md5(time()), 0,10).'.'.$ext;
$path="../images/".$unquie_name;
if (empty($img)) {
$_SESSION['error']= "file can't be empty";
}
elseif (in_array($ext, $permision) === false) {
$_SESSION['error']= "File is not GIF format Please upload GIF format file";
}
else{
move_uploaded_file($tmp, $path);
$sent_file="INSERT INTO `galary` (`date`, `admin`, `Photo`) VALUES ('$date', '$admin', '$unquie_name')";
$run_sent_file=mysqli_query($conn,$sent_file);
if ($run_sent_file) {
$_SESSION['successmassage']= "Uploaded successfully ";
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
    
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php include "side_nav.php" ; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <?php echo error(); echo successmassage(); ?>
                <div class="card-body">
                  <h4 class="card-title">Your so fresh input file — Default version</h4>
                  <form method="post" enctype="multipart/form-data">
                    <input type="file" class="dropify"  name="img" /><br>
                    <button class="btn btn-success col-sm-12" name="submit" type="submit">upload</button>
                  </form>
                </div>
              </div>
              
              
              
              
            </div>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <h4 class="card-title">Total Post <?php
                    $count_id="SELECT count(id) as total FROM `galary`";
                    $run_count=mysqli_query($conn,$count_id);
                    $id_assoc=mysqli_fetch_assoc($run_count);
                    echo $id_assoc['total'];
                    echo "<br>"?></h4><br>
                    <div class="row portfolio-grid">
                      
                      
                      <?php
                      $post_get="SELECT * FROM `galary`";
                      $run_get_post=mysqli_query($conn,$post_get);
                      while ($rows=mysqli_fetch_array($run_get_post)) {
                      
                      ?>
                      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <figure class="effect-text-in">
                          <img src="../images/<?php echo $rows['Photo'] ?>" alt="image" style="height: 200px;"/>
                          <figcaption>
                          <h4><?php echo $rows['date']; ?></h4>
                          <p>Admin Name: <?php echo $rows['admin']; ?><br>
                            
                            <a href="trash/galary_photo_delete.php?id=<?php echo $rows['id'] ?>" ><button class="col-sm-12 btn btn-danger">Delete</button></a>
                          </p>
                          
                          </figcaption>
                        </figure>
                      </div>
                      
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div></div>
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
</Documentation>
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
<script src="js/dropify.js"></script>
<script src="js/alerts.js"></script>
<script src="js/avgrund.js"></script>
<!-- End custom js for this page-->
</body>
</html>