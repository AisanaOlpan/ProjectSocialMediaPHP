<?php global $user;?>
    <nav class="navbar_custom navbar navbar-expand navbar-light bg-white border ">
        <div class="col-sm-12  d-flex flex-lg-row flex-md-row flex-sm-column justify-content-between">
            <div class="d-flex justify-content-between col-lg-8 col-sm-12">
                <!-- <a class="navbar-brand" href="?"> -->
                    <!-- <img src="assets/images/pictogram.png" alt="" height="28"> -->
                    <!-- <i class="bi bi-list"></i> -->
                <!-- </a> -->
                <!-- <ul class="navbar-nav"> -->
      <!-- <li class="nav-item"> -->
        <!-- <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="bi bi-list"></i></a> -->

                <form class="d-flex" id="searchform">
                    <input class="form-control me-2" type="search" id="search" placeholder="looking for someone.."
                        aria-label="Search" autocomplete="off">
<div class="bg-white text-end rounded border shadow py-3 px-4 mt-5" style="display:none;position:absolute;z-index:+99;" id="search_result" data-bs-auto-close="true">
<button type="button" class="btn-close" aria-label="Close" id="close_search"></button>
<div id="sra" class="text-start">
<p class="text-center text-muted">enter name or username</p>

</div>
</div>
                </form>

            </div>


            <ul class="navbar-nav flex-fill flex-row justify-content-evenly mb-lg-1 mb-sm-0">

                <li class="nav-item">
                    <a class="nav-link text-dark" href="?"><i class="bi bi-house-door-fill"></i></a>
                </li>
                <li class="nav-item">
                    
                    <a class="nav-link text-dark" data-bs-toggle="modal" data-bs-target="#addpost" href="#"><i class="bi bi-plus-square-fill"></i></a>
                </li>
                <!--  -->
                <!-- <li class="nav-item">
                    
                    <a class="nav-link text-dark" href="courses/loggedin.php?login=success" ><i class="bi bi-book-fill"></i></a>
                </li> -->
                <!--  -->
                <li class="nav-item">
                  
                    
                    <?php
if(getUnreadNotificationsCount()>0){
    ?>
 <a class="nav-link text-dark position-relative" id="show_not" data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample">
                    <i class="bi bi-bell-fill"></i>
  <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger">
   <small><?=getUnreadNotificationsCount()?></small>
  </span>
</a>

    <?php
}else{
    ?>
  <a class="nav-link text-dark" data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample"><i class="bi bi-bell-fill"></i></a>
    <?php
}
                    ?>
                   

                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="offcanvas" href="#message_sidebar" href="#"><i class="bi bi-chat-right-dots-fill"></i>  <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger" id="msgcounter">
  
  </span></a>
                </li>
                <li class="nav-item dropdown dropstart">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="30" width="30" class="rounded-circle border">
                    </a>
                    <ul class="dropdown-menu position-absolute top-100 end-50" aria-labelledby="navbarDropdown">
                    <!-- <li><a class="dropdown-item" href="?u=<?=$user['username']?>"><i class="bi bi-person"></i> My Profile</a></li>

                        <li><a class="dropdown-item" href="?editprofile"><i class="bi bi-pencil-square"></i> Edit Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li> -->
                        <li><a class="dropdown-item" href="assets/php/actions.php?logout"><i class="bi bi-box-arrow-in-left"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>


        </div>
    </nav>

    <!-- Main Sidebar Container -->
  <!-- <aside class="main-sidebar sidebar-dark-primary elevation-4"> -->
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      <img src="../images/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pictogram</span>
    </a> -->

    <!-- <div class="sidebar"> -->
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div> -->


   

      <!-- Sidebar Menu -->
      <!-- <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> -->
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item">
            <a href="?dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?edit_profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               Edit Profile
              </p>
            </a>
          </li>
       
        </ul>
      </nav> -->
      <!-- /.sidebar-menu -->
    <!-- </div> -->
    <!-- /.sidebar -->
  <!-- </aside> -->



  <!-- jQuery -->
<!-- <script src="admin/plugins/jquery/jquery.min.js"></script>

<script src="admin/dist/js/adminlte.js"></script> -->


