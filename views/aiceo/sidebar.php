<?php
$resources_url	= "/resources/aic/";
$aic_base_url	= "/aiceo/";
$this->input->get('menu');
?>
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $aic_base_url;?>ai" class="brand-link">
      <img src="<?php echo $resources_url;?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AICEO <sup>of Opuscore&reg;</sup></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $resources_url;?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">AI Manager I</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview <?php if ($this->input->get('menu') == "dashboard" or $this->input->get('menu') == "") { echo " menu-open"; } ?>">
            <a href="<?php echo $aic_base_url;?>ai?menu=dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->input->get('menu') == "albums") { echo " menu-open"; } ?>">
            <a href="<?php echo $aic_base_url;?>albums?menu=albums" class="nav-link">
              <i class="nav-icon fas fa-record-vinyl"></i>
              <p>
                Albums
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->input->get('menu') == "track_for_albums") { echo " menu-open"; } ?>">
            <a href="<?php echo $aic_base_url;?>track_for_albums?menu=track_for_albums" class="nav-link">
              <i class="nav-icon fas fa-record-vinyl"></i>
              <p>
                Track_search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->input->get('menu') == "sound_track") { echo " menu-open"; } ?>">
            <a href="<?php echo $aic_base_url;?>sound_track?menu=sound_track" class="nav-link">
              <i class="nav-icon fas fa-record-vinyl"></i>
              <p>
                Sound Track
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->input->get('menu') == "artists") { echo " menu-open"; } ?>">
            <a href="<?php echo $aic_base_url;?>artist?menu=artists" class="nav-link">
              <i class="nav-icon fas fa-person-booth"></i>
              <p>
                Artists
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->input->get('menu') == "composers") { echo " menu-open"; } ?>">
            <a href="<?php echo $aic_base_url;?>composers?menu=composers" class="nav-link">
              <i class="nav-icon fas fa-people-carry"></i>
              <p>
                Composers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->input->get('menu') == "members") { echo " menu-open"; } ?>">
            <a href="<?php echo $aic_base_url;?>members?menu=members" class="nav-link">
              <i class="nav-icon fas fa-people-carry"></i>
              <p>
                Membership
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>          
          <li class="nav-item has-treeview <?php if ($this->input->get('menu') == "library") { echo " menu-open"; } ?>">
            <a href="?menu=library" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Library
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->input->get('menu') == "OC") { echo " menu-open"; } ?>">
            <a href="<?php echo $aic_base_url;?>onlineCourses?menu=OC" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Online Courses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>