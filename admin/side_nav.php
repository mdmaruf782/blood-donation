
<div class="theme-setting-wrapper">
  <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
  <div id="theme-settings" class="settings-panel">
    <i class="settings-close fa fa-times"></i>
    <p class="settings-heading">SIDEBAR SKINS</p>
    <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
    <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
    <p class="settings-heading mt-2">HEADER SKINS</p>
    <div class="color-tiles mx-0 px-4">
      <div class="tiles primary"></div>
      <div class="tiles success"></div>
      <div class="tiles warning"></div>
      <div class="tiles danger"></div>
      <div class="tiles info"></div>
      <div class="tiles dark"></div>
      <div class="tiles default"></div>
    </div>
  </div>
</div>

<div id="right-sidebar" class="settings-panel">
  <i class="settings-close fa fa-times"></i>
  <ul class="nav nav-tabs" id="setting-panel" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
    </li>
  </ul>
  <div class="tab-content" id="setting-content">
    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
      <div class="add-items d-flex px-3 mb-0">
        <form class="form w-100">
          <div class="form-group d-flex">
            <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
            <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task-todo">Add</button>
          </div>
        </form>
      </div>
      <div class="list-wrapper px-3">
        <ul class="d-flex flex-column-reverse todo-list">
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Team review meeting at 3.00 PM
              </label>
            </div>
            <i class="remove fa fa-times-circle"></i>
          </li>
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Prepare for presentation
              </label>
            </div>
            <i class="remove fa fa-times-circle"></i>
          </li>
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Resolve all the low priority tickets due today
              </label>
            </div>
            <i class="remove fa fa-times-circle"></i>
          </li>
          <li class="completed">
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Schedule meeting for next week
              </label>
            </div>
            <i class="remove fa fa-times-circle"></i>
          </li>
          <li class="completed">
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Project review
              </label>
            </div>
            <i class="remove fa fa-times-circle"></i>
          </li>
        </ul>
      </div>
      <div class="events py-4 border-bottom px-3">
        <div class="wrapper d-flex mb-2">
          <i class="fa fa-times-circle text-primary mr-2"></i>
          <span>Feb 11 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
        <p class="text-gray mb-0">build a js based app</p>
      </div>
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="fa fa-times-circle text-primary mr-2"></i>
          <span>Feb 7 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
        <p class="text-gray mb-0 ">Call Sarah Graves</p>
      </div>
    </div>
    <!-- To do section tab ends -->
    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
      <div class="d-flex align-items-center justify-content-between border-bottom">
        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
      </div>
      <ul class="chat-list">
        <li class="list active">
          <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">19 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
          <div class="info">
            <div class="wrapper d-flex">
              <p>Catherine</p>
            </div>
            <p>Away</p>
          </div>
          <div class="badge badge-success badge-pill my-auto mx-2">4</div>
          <small class="text-muted my-auto">23 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Daniel Russell</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">14 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
          <div class="info">
            <p>James Richardson</p>
            <p>Away</p>
          </div>
          <small class="text-muted my-auto">2 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="images/faces/face5.png" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Madeline Kennedy</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">5 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Sarah Graves</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">47 min</small>
        </li>
      </ul>
    </div>
    <!-- chat tab ends -->
  </div>
</div>

<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image">
          <img src="admin/<?php echo $picture ?>" alt="image"/>
        </div>
        <div class="profile-name">
          <p class="name">
            Welcome <?php echo $admin_name; ?>
          </p>
          <p class="designation">
            Super Admin
          </p>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="fa fa-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="loaders.php">
        <i class="fas fa-spinner menu-icon"></i>
        <span class="menu-title">loader</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add_new_slider.php">
        <i class="fas fa-sliders-h menu-icon"></i>
        <span class="menu-title">Slider</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
        <i class="fas fa-tint menu-icon"></i>
        <span class="menu-title">Blood Donor</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="page-layouts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="add_new_donor.php"><i class="far fa-plus-square"></i>&nbsp&nbsp Add new donor</a></li>
          
          
          <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="all_donor.php"><i class="fas fa-clipboard-list"></i>&nbsp&nbsp All Donor List</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item d-none d-lg-block">
      <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
        <i class="fas fa-file-signature menu-icon"></i>
        <span class="menu-title">Post</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="sidebar-layouts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="add_new_galary.php"><i class="fas fa-camera"></i>&nbsp&nbspGalary Photo</a></li>
          <li class="nav-item"> <a class="nav-link" href="add_new_slider.php"><i class="fas fa-sliders-h "></i>&nbsp&nbspSlider</a></li>
          
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
       <i class="fas fa-user-circle menu-icon"></i>
        <span class="menu-title">Admin</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="new_admin.php"><i class="fas fa-user-plus"></i>&nbsp&nbspAdd New Admin</a></li>
          <li class="nav-item"> <a class="nav-link" href="all_admin.php"><i class="fas fa-users-cog"></i>&nbsp&nbspAdmin List</a></li>
          
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="inbox.php">
        <i class="far fa-envelope menu-icon"></i>
        <span class="menu-title">inbox</span> &nbsp&nbsp <h5 class="text-danger" style="margin-top: 15px;"><?php echo $total; ?></h5>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="log_out.php">
        <i class="fas fa-sign-out-alt menu-icon"></i>
        <span class="menu-title">Logout.php</span>
      </a>
    </li>
  </ul>
</nav>