<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <?php
    if (strpos($title, 'Dashboard')  !== false) {
        $icon = "fa-home";
    }

    if ($title == 'List Pekerjaan') {
        $icon = "fa-tasks";
    }

    if ($title == 'List Pengiriman') {
        $icon = "fa-truck";
    }

    if ($title == 'Order Baru') {
        $icon = "fa-shopping-cart";
    }

    if ($title == 'Order Diproses') {
        $icon = "fa-tachometer-alt";
    }

    if ($title == 'Semua Order') {
        $icon = "fa-chart-area";
    }

    if ($title == 'Pelanggan') {
        $icon = "fa-user";
    }

    if ($title == 'Laporan') {
        $icon = "fa-file-alt";
    }

    if ($title == 'Produk') {
        $icon = "fa-tags";
    }

    if ($title == 'Registrasi') {
        $icon = "fa-users-cog";
    }

    ?>
    <i class="fas fa-fw <?= $icon; ?> fa-2x my-auto"></i>
    <h1 class="h3 text-gray-800 ml-3 text-center my-auto"><?= $title; ?></h1>

    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['username']; ?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url('/public/img/default-profile.jpg'); ?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>
</nav>