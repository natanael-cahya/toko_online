<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">IZZI BOOK STORE</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link active" href="<?php echo base_url('admin/dashboard_admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_barang') ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Buku</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_kategori') ?>">
                    <i class="fas fa-fw fa-layer-group"></i>
                    <span>Kategori Buku</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/transaksi_konsumen') ?>">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Riwayat Transaksi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/trade') ?>">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Transaksi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_belanja') ?>">
                    <i class="fas fa-fw fa-cart-plus"></i>
                    <span>Belanja Stok</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_kasir') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Kasir</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_konsumen') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Konsumen</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_supplier') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Supplier</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/laporan/laporan_belanja') ?>">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Laporan Belanja</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/laporan/laporan_penjualan') ?>">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Laporan Penjualan</span></a>
            </li>
        

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        

                      
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url(); ?>upload/karyawan/zzz.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Pengaturan
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('login/logout'); ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->