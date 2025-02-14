<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link" id="userDropdown" role="button"
                    aria-haspopup="true" aria-expanded="false" 
                    href="<?php echo base_url('index.php/auth/logout') ?>">

                    <!-- <a class="nav-link" href="<?php echo base_url('Home');?>"> -->
                    <!-- <a href="<?php echo base_url('auth/logout') ?>">Logout</a> -->
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span>
                    
                </a>
                <!-- Dropdown - User Information -->
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->