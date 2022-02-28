<?php $role = $_SESSION['role'] ?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('admin/'); ?>">
        <div class="sidebar-brand-icon">
            <img class="img-profile rounded-circle" width="140" src="<?php echo base_url('/assets/logo/company-logo.svg'); ?>">
        </div>
    </a>
    <a class="text-light align-items-center justify-content-center mx-auto mb-2" href="<?php echo site_url('admin/'); ?>">
        <div class="sidebar-brand-text mx-3"><sup></sup>Cimande Rolling Door</div>
    </a>

    <hr class="sidebar-divider my-0">


    <li class="nav-item <?php if (strpos($title, 'Dashboard') !== false) echo "active"; ?>">

        <a class="nav-link" href="<?php if ($role == 1) echo site_url('admin/');
                                    elseif ($role == 2) echo site_url('kontruksi/');
                                    elseif ($role == 3) echo site_url('driver/') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <?php if ($role == 2) : ?>
        <li class="nav-item <?php if ($title == 'List Pekerjaan') echo "active"; ?>">
            <a class="nav-link" href="<?php echo site_url('kontruksi/listpekerjaan'); ?>">
                <i class="fas fa-fw fa-tasks"></i>
                <span>List Pekerjaan</span></a>
        </li>
    <?php endif ?>


    <?php if ($role == 3) : ?>
        <li class="nav-item <?php if ($title == 'List Pengiriman') echo "active"; ?>">
            <a class="nav-link" href="<?php echo site_url('driver/listpengiriman'); ?>">
                <i class="fas fa-fw fa-truck"></i>
                <span>List Pengiriman</span></a>
        </li>
    <?php endif ?>



    <?php if ($role == 1) : ?>
        <li class="nav-item <?php if ($title == 'Order Baru') echo "active"; ?>">
            <a class="nav-link" href="<?php echo site_url('admin/orderbaru'); ?>">
                <i class="fas fa-fw fa-shopping-cart"></i>
                <span>Order Baru</span></a>
        </li>


        <li class="nav-item <?php if ($title == 'Order Diproses') echo "active"; ?>">
            <a class="nav-link" href="<?php echo site_url('admin/orderdiproses'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Order Diproses</span></a>
        </li>



        <li class="nav-item <?php if ($title == 'Semua Order') echo "active"; ?>">
            <a class="nav-link" href="<?php echo site_url('admin/semuaorder'); ?>">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Semua Order</span></a>
        </li>


        <li class="nav-item <?php if ($title == 'Pelanggan') echo "active"; ?>">
            <a class="nav-link" href="<?php echo site_url('admin/pelanggan'); ?>">
                <i class="fas fa-fw fa-user"></i>
                <span>Pelanggan</span></a>
        </li>


        <li class="nav-item <?php if ($title == 'Laporan') echo "active"; ?>">
            <a class="nav-link" href="<?php echo site_url('admin/laporan'); ?>">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Laporan</span></a>
        </li>


        <li class="nav-item <?php if ($title == 'Produk') echo "active"; ?>">
            <a class="nav-link" href="<?php echo site_url('admin/produk'); ?>">
                <i class="fas fa-fw fa-tags"></i>
                <span>Produk</span></a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">



        <li class="nav-item <?php if ($title == 'Registrasi') echo "active"; ?>">
            <a class="nav-link" href="<?php echo site_url('admin/registrasi'); ?>">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Registrasi</span></a>
        </li>

    <?php endif ?>

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->