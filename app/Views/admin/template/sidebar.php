<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('dashboard'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
            <?php if (in_groups('teknisi') == false) { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('post'); ?>">
                <i class="bi bi-person"></i>
                <span>Post</span>
            </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-heading">User Manajemen</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('users'); ?>">
                <i class="bi bi-person"></i>
                <span>All User</span>
            </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('group'); ?>">
                <i class="bi bi-person"></i>
                <span>Group User</span>
            </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-heading">Pegawai</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data Pegawai</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('admin'); ?>">
                        <i class="bi bi-circle"></i><span>Admin</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('teknisi'); ?>">
                        <i class="bi bi-circle"></i><span>Teknisi AC</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-heading">Sales</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('sales/cuciac'); ?>">
                        <i class="bi bi-circle"></i><span>Cuci AC</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('sales/bongkarac'); ?>">
                        <i class="bi bi-circle"></i><span>Bongkar Pasang AC</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('sales/serviceac'); ?>">
                        <i class="bi bi-circle"></i><span>Service AC</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
    <?php } ?>
    <?php if (in_groups('teknisi') == true) { ?>
        <li class="nav-heading">Sales</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('teknis/cuciac'); ?>">
                        <i class="bi bi-circle"></i><span>Cuci AC</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('teknis/bongkarac'); ?>">
                        <i class="bi bi-circle"></i><span>Bongkar Pasang AC</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('teknis/serviceac'); ?>">
                        <i class="bi bi-circle"></i><span>Service AC</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
    <?php } ?>



    </ul>

</aside><!-- End Sidebar-->