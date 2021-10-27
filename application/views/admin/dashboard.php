<div class="container-fluid">
<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                       Pendapatan Selama ini</div>
                       <?php $sum=0; foreach($duit as $d){ $sum+=$d->total; } ?>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<?= number_format($sum); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Jumlah Konsumen</div>
                       
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($kons); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kasir
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= count($kas); ?></div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Jumlah Transaksi Selama Ini</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($tr); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-shopping-basket fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Content Row -->

<div class="card">
  <div class="card-header">
    INFORMASI AKUN
  </div>
  <div class="card-body">
      <?php foreach($kasi as $a){ ?>
    <h5 class="card-title">Selamat Datang <?= $a->nama_kasir ?></h5>
    <?php } ?>
    <p class="card-text">Have a nice day , Tanggal > <?= date('d-m-Y') ?> </p>
    <a href="#" class="btn btn-info">Anda Login Sebagai <?= $this->session->userdata('username'); ?></a>
  </div>
</div>
</div>
</div>