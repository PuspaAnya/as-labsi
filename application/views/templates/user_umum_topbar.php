<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-gradient-dark topbar static-top shadow" style="background-color: #000">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - Login -->
                <li class="nav-item <?= $this->uri->segment(2) == 'pengumuman' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= base_url('welcome/auth') ?>">
                        <i class="fas fa-sign-in-alt fa-sm fa-fw"></i>
                        <span>Login Asisten</span></a>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->