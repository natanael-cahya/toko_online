<script>window.print();</script>
<link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
<div class="container-fluid mt-4">

    <table class="table table-bordered" id="dt">
      
        <thead>
       
        <tr>  <?php  foreach($trade as $m) { $z = $m->tgl_belii; $wk = new DateTime($z); } ?>
            <th colspan="12" class="text-center"><h4>Laporan Penjualan Bulan <?= date_format($wk,"m"); ?></h4></th>
        </tr>
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">NAMA KONSUMEN</th>
            <th class="text-center">NAMA BUKU</th>
            <th class="text-center">JUMLAH</th>
            
            <th class="text-center">TANGGAL BELI</th>
            <th class="text-center">KASIR</th>
            <th class="text-center">KURIR</th>
            <th class="text-center">ALAMAT KIRIM</th>
            <th class="text-center">PEMBAYARAN</th>
            <th class="text-center">HARGA</th>
        </tr>
</thead>
<tbody>
        <?php
        $no=1;
        $sum =0;
        foreach($trade as $m) : ?>
        <tr class="text-center">
            <td style="text-align:center;"><?php echo $no++ ?></td>
            <td><?= $m->nama_konsumen ?></td>
            <td><?= $m->judul_buku ?></td>
            <td><?= $m->jumlah_belii ?></td>
            
            <td><?= $m->tgl_belii ?></td>
            <td><?= $m->nama_kasir == '' ? '-': $m->nama_kasir ?></td>
            <td><?= $m->kurir ?></td>
            <td><?= $m->alamat_kirim ?></td>
            <td><?= $m->metode_pembayaran ?></td>
            <td>Rp. <?= number_format($m->total) ?></td>
           
        </tr>
        <?php $sum+=$m->total; endforeach; ?>
        <tr>
            <td colspan="9">OMSET </td><td class="text-center">Rp. <?= number_format($sum) ?></td>
        </tr>
        <tr><?php $sum2 = 0; foreach($belanja as $m) { $sum2+=$m->harga_beli; } $bersih = $sum-$sum2;?>
            <td colspan="9">PENGELUARAN BULAN  <?= date_format($wk,"m"); ?></td><td class="text-center">Rp. <?= number_format($sum2) ?></td>
        </tr>
        <tr>
            <td colspan="9">PENDAPATAN BERSIH </td><td class="text-center">Rp. <?= number_format($bersih) ?></td>
        </tr>
 </tbody>
        
    </table>
</div>
