<!-- Main Sidebar Container -->
<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>/admin/index3.html" class="brand-link">
        <img src="<?= base_url() ?>/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Seatap & Tridaya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Pejuang Kemanusiaan</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url() ?>/dashboard" class="nav-link <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : '') ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>/donasi" class="nav-link <?= ($uri->getSegment(1) == 'donasi' ? 'active' : '') ?>">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>
                            Donasi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>/blogs" class="nav-link <?= ($uri->getSegment(1) == 'blogs' ? 'active' : '') ?>">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Blogs
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>/users" class="nav-link <?= ($uri->getSegment(1) == 'users' ? 'active' : '') ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Pengguna
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?= base_url() ?>/logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <div class="sidebar-custom">
        <a href="/logout" class="btn btn-link"><i class="fas fa-sign-out-alt"></i></a>
        <a href="/logout" class="btn btn-secondary hide-on-collapse pos-right">Logout</a>
    </div>
    <!-- /.sidebar -->
</aside>