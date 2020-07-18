<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #841F85">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('welcome/index') ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('assets/img/'); ?>logo_ug.png" width="50" height="50" class="d-inline-block align-center" alt="">
        </div>
        <div class="sidebar-brand-text mx-3" style="font-size: larger">LABSI</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3 mb-3">

    <!-- Heading -->
    <div class="sidebar-heading">
        Welcome to LABSI
    </div>

    <!-- Nav Item - Home -->
    <li class="nav-item <?= $this->uri->segment(2) == 'index' || $this->uri->segment(2) == '' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('welcome/index') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Nav Item - Pengumuman -->
    <li class="nav-item <?= $this->uri->segment(2) == 'pengumuman' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('welcome/pengumuman') ?>">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Pengumuman</span></a>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?= $this->uri->segment(2) == 'sop'
                            || $this->uri->segment(2) == 'faq'
                            || $this->uri->segment(2) == 'contact' ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder-open"></i>
            <span>LABSI</span>
        </a>
        <div id="collapseTwo" class="collapse <?= $this->uri->segment(2) == 'sop'
                                                    || $this->uri->segment(2) == 'faq'
                                                    || $this->uri->segment(2) == 'contact' ? 'show' : '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= $this->uri->segment(2) == 'sop' ? 'active' : '' ?>" href="<?= base_url('welcome/sop') ?>">SOP & Peraturan</a>
                <a class="collapse-item <?= $this->uri->segment(2) == 'faq' ? 'active' : '' ?>" href="<?= base_url('welcome/faq') ?>">FAQ</a>
                <a class="collapse-item <?= $this->uri->segment(2) == 'contact' ? 'active' : '' ?>" href="<?= base_url('welcome/contact') ?>">Contact</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item <?= $this->uri->segment(2) == 'jadwal_praktikum' ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-chalkboard-teacher"></i>
            <span>Praktikum</span>
        </a>
        <div id="collapseUtilities" class="collapse <?= $this->uri->segment(2) == 'jadwal_praktikum' ? 'show' : '' ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item  <?= $this->uri->segment(2) == 'jadwal_praktikum' ? 'active' : '' ?>" href="<?= base_url('welcome/jadwal_praktikum') ?>">Jadwal Praktikum</a>

            </div>
        </div>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->