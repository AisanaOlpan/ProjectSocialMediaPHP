<?php global $user;?>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-color-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background-color:#7563C7; padding-bottom:24px;">
 
      <img src="../images/icon.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="font-weight-light font_style">Preretrain</span>
    </a>

    <div class="sidebar">
   
      <!-- Sidebar Menu -->
      <nav class="mt-2_custom">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <!-- <a href="?dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p class="font_style">
                Dashboard
               
              </p>
            </a> -->
            <a class="nav-link" href="?u=<?=$user['username']?>" style="color: #FFFFFF;"><i class="bi bi-person"></i> My Profile </a>
          </li>
          <li class="nav-item">
            <!-- <a href="?edit_profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p class="font_style">
               Edit Profile
              </p>
            </a> -->
            <a class="nav-link" href="?editprofile" style="color: #FFFFFF;"><i class="bi bi-pencil-square"></i> Edit Profile </a>
          </li> 
          <li class="nav-item">
            <!-- <a href="?edit_profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p class="font_style">
               Course
              </p>
            </a> -->
            <a class="nav-link font_style" href="?courses" style="color: #FFFFFF;"><i class="bi bi-bookmark-star"></i> My Course </a>
          </li>
          <li class="nav-item">
         
            <a class="nav-link font_style" href="?all_courses" style="color: #FFFFFF;"><i class="bi bi-book"></i> All Course </a>
          </li>
          <li class="nav-item">
            <!-- <a href="?edit_profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p class="font_style">
               Friends
              </p>
            </a> -->
            <a class="nav-link font_style" href="" style="color: #FFFFFF;"><i class="bi bi-people"></i> Friends </a>
          </li>
          <li class="nav-item">
            <!-- <a href="?edit_profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p class="font_style">
               Help
              </p>
            </a> -->
            <a class="nav-link font_style" href="" style="color: #FFFFFF;"><i class="bi bi-question-circle"></i> Help </a>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>

<script src="admin/dist/js/adminlte.js"></script>