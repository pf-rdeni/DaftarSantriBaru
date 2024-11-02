<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url("backend/Pages") ?>" class="brand-link">
        <img src="<?php echo base_url('/template/backend/dist') ?>/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TPQ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
                <li class="nav-item">
                    <ul class="nav nav-treeview" style="display: block;"> <!-- none; or block -->
                        <li class="nav-item">
                            <a href=<?php echo base_url('backend/santri/createEmisStep') ?> class="nav-link">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>Daftar Santri Baru</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview" style="display: block;"> <!-- none; or block -->
                        <li class="nav-item">
                            <a href=<?php echo base_url('backend/santri/showSantriBaru') ?> class="nav-link">
                                <i class="fas fa-eye nav-icon"></i>
                                <p>Data Santri Baru</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>