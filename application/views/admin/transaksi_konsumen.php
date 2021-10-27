
<div class="container-fluid">
<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" 
    data-target="#tambah_barang">
        <i class="fas fa-plus fa-sm"></i> Tambah Belanja
    </button>
    <table class="table table-bordered" id="dt">
      
        <thead>
       
        <tr>  
            <th colspan="12" class="text-center"><h4>Riwayat Transaksi</h4></th>
        </tr>
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">NAMA KONSUMEN</th>
            <th class="text-center">NAMA BUKU</th>
            <th class="text-center">JUMLAH</th>
            <th class="text-center">HARGA</th>
            <th class="text-center">TANGGAL BELI</th>
            <th class="text-center">KASIR</th>
            <th class="text-center">KURIR</th>
            <th class="text-center">ALAMAT KIRIM</th>
            <th class="text-center">PEMBAYARAN</th>
            <th class="text-center">Status</th>
        </tr>
</thead>
<tbody>
        <?php
        $no=1;
        foreach($trade as $m) : ?>
        <tr class="text-center">
            <td style="text-align:center;"><?php echo $no++ ?></td>
            <td><?= $m->nama_konsumen ?></td>
            <td><?= $m->judul_buku ?></td>
            <td><?= $m->jumlah_belii ?></td>
            <td><?= $m->total ?></td>
            <td><?= $m->tgl_belii ?></td>
            <td><?= $m->nama_kasir == '' ? '-': $m->nama_kasir ?></td>
            <td><?= $m->kurir ?></td>
            <td><?= $m->alamat_kirim ?></td>
            <td><?= $m->metode_pembayaran ?></td>
            <td><?php if($m->bukti == ""){ echo"<i class='fa fa-clock'></i>";}else if($m->bukti == "-"){echo"OFFLINE BUYER";}else{echo"<i class='fa fa-check'></i>";} ?></td>
          
        </tr>
        <?php endforeach; ?>
 </tbody>
        
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="exampleModalLabel" >INPUT PEMBELIAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/transaksi_konsumen/tambah_aksi'); ?>" name="f1" method="post" enctype="multipart/form-data" >
        <div class="form-group">
                <label>NAMA KONSUMEN</label>
                <input type="text" name="namak" class="form-control">
            </div>    
        <div class="form-group">
                <label>NAMA BARANG</label>
                <input type="text" name="namab" class="form-control">
            </div>
            <div class="form-group">
            
                <label>JUMLAH BELI</label>
               <input type="number" name="jb" class="form-control">
       
        </div>
        <div class="form-group">
                <label>STOK</label>
                <input type="text" name="max" class="form-control" readonly>
            </div>
           
            <div class="form-group">
                <label>TANGGAL BELI</label>
                <input type="date" name="tb" class="form-control">
            </div>
            <div class="form-group">
                <label>KASIR</label>
                <input type="hidden" name="ks" value="<?= $this->session->userdata('id_kasir') ?>">
                <input type="text" name="" class="form-control" value="<?= $this->session->userdata('username') ?>" readonly>
            </div>
            
          

            
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php
foreach($trade as $m){
?>
<!-- Modal -->
<div class="modal fade" id="edit<?= $m->id_transaksi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="exampleModalLabel" >EDIT PEMBELIAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/data_belanja/update'); ?>" name="f1" method="post" enctype="multipart/form-data" >
        <div class="form-group">
                <label>NAMA BARANG</label>
                <input type="hidden" name="ide" value="<?= $m->id_transaksi ?>">
                <input type="text" name="namae" class="form-control" value="<?= $m->judul_buku ?>">
            </div>
           
            <div class="form-group">
                <label>JUMLAH BELANJA</label>
                <input type="number" name="jbe" class="form-control" value="<?= $m->jumlah_beli ?>">
            </div>
         
            <div class="form-group">
                <label>TANGGAL</label>
                <input type="text" name="tgle" class="form-control" value="<?= $m->tgl_pembelian ?>">
            </div>
            <div class="form-group">
                <label>PENANGGUNG JAWAB</label>
                <input type="hidden" name="pje" value="<?= $m->id_kasir ?>">
                <input type="text" name="" class="form-control" value="<?= $m->nama_kasir ?>" readonly>
            </div>
            
           
            
            
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php } ?>