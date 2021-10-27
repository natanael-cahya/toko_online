<script>window.print();</script>
<link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
<br>
<div class="container-fluid mt-3">

    <table class="table table-bordered">
      
        <thead>
       
        <tr>  <?php foreach($belanja as $m) { $z = $m->tgl_belanja; $wk = new DateTime($z); }?>
            <th colspan="9" class="text-center"><h4>Laporan Belanja Stok Bulan <?= date_format($wk,"m"); ?></h4></th>
        </tr>
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">NAMA BARANG</th>
            <th class="text-center">JUMLAH BELI</th>
            
            <th class="text-center">TANGGAL BELANJA</th>
            <th class="text-center">PENANGGUNG JAWAB</th>
            <th class="text-center">SUPPLIER</th>
            <th class="text-center">HARGA BELI</th>
            
        </tr>
</thead>
<tbody>
        <?php
        $no=1;
        $sum = 0;
        foreach($belanja as $m) : $d = new DateTime($m->tgl_belanja); ?>
        <tr class="text-center">
            <td style="text-align:center;"><?php echo $no++ ?></td>
            <td><?php echo $m->nama_barangb ?></td>
            <td><?= $m->jumlah_belanja ?></td>
            
            <td><?= date_format($d,'d-m-Y') ?></td>
            <td><?= $m->nama_kasir ?></td>
            <td><?= $m->nama_supplier ?></td>
            <td>Rp. <?= number_format($m->harga_beli) ?></td>
            
        </tr>
       
        <?php $sum+=$m->harga_beli; endforeach; ?>
        <tr>
            <td colspan="6">TOTAL PENGELUARAN</td><td class="text-center">Rp. <?= number_format($sum) ?></td>
        </tr>
 </tbody>
        
    </table>
</div>

