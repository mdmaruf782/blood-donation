<?php 
$picture=$_SESSION['admin_profile'];
$admin_name=$_SESSION['admin_name'];
$admin=$_SESSION['admin_name'];

 ?>
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="../index.php"><img src="images/logo.png" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="../index.php"><img src="images/logo.png" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
    <span class="fas fa-bars"></span>
    </button>
    
    <ul class="navbar-nav navbar-nav-right">
      
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="fas fa-bell mx-0"></i>
          <?php
          $noti_count="SELECT count(id) AS total FROM `donor list` WHERE status='request'";
          $run_noti_count=mysqli_query($conn,$noti_count);
          $noti_fetch=mysqli_fetch_assoc($run_noti_count);
          $notifications=$noti_fetch['total'];
          ?>
          <span class="count"><?php echo $notifications; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          
          <a class="dropdown-item">
            <p class="mb-0 font-weight-normal float-left">
              <?php
              if ($notifications) {
              echo "You have ".$notifications." new notifications";
              }
              ?>
            </p>
            <span class="badge badge-pill badge-warning float-right">View all</span>
          </a>
          <?php
          $request_id="SELECT * FROM `donor list` WHERE status='request'";
          $run_request_id=mysqli_query($conn,$request_id);
          while ($get_not=mysqli_fetch_array($run_request_id)) {
          
          
          ?>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item" href="all_donor.php">
            <div class="preview-thumbnail">
              <div class="preview-icon ">
                <img src="../donor/<?php echo $get_not['photo']; ?>" class="mx-0">
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-medium"><?php echo $get_not['name']; ?></h6>
              <p class="font-weight-light small-text">
                Sent Donor request
              </p>
            </div>
          </a>
          <?php } ?>
          
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-envelope mx-0"></i>
          <span class="count"><?php 
          $msg_query="SELECT count(id) as total FROM `massage` WHERE status='unread'";
          $run_msg_query=mysqli_query($conn,$msg_query);
          $count_masg=mysqli_fetch_assoc($run_msg_query);
          $total=$count_masg['total'];
          echo $total;
           ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
          <?php 
          $massage="SELECT * FROM `massage` WHERE status='unread'";
          $run_massage=mysqli_query($conn,$massage);
          while ($msg=mysqli_fetch_array($run_massage)) {
           
           ?>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item" href="inbox.php?id=<?php echo $msg['id'] ; ?>">
            <div class="preview-thumbnail">
             <i class="far fa-user text-primary" ><?php echo $msg['name'] ?></i>
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-medium">
              <span class="float-right font-weight-light small-text"><?php echo $msg['date']; ?></span>
              </h6>
              <p class="font-weight-light small-text">
                <?php if (strlen($msg['massage'])>10) {
                 $msg_len=$msg['massage'];
                 $masg_len=substr($msg_len, 0,10).'...';
                 echo $masg_len;
                }
                else{
                   echo $msg['massage'];
                }
                ?>
              </p>
            </div>
          </a>
        
     <?php } ?>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="admin/<?php echo $picture ?>" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="fas fa-cog text-primary"></i>
            Settings
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="log_out.php">
            <i class="fas fa-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li>
      <li class="nav-item nav-settings d-none d-lg-block">
        <a class="nav-link" href="#">
          <i class="fas fa-ellipsis-h"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
    <span class="fas fa-bars"></span>
    </button>
  </div>
</nav>