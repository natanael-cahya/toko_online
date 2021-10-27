<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4><i class="fa fa-search"></i> Cari Barang</h4>
        <form action="" class="form-inline" method="post">
          <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Cari tempe</label>
            <input type="text" id="keyword" class="form-control">
          </div>

          <button type="button" name="z" class="btn btn-info mb-2" id="btn-search">Cari</button>
          <a href="<?php echo base_url('/kasir/trade'); ?>" class="ml-2 mb-2">Reset</a>
      </div>

      </form>
    </div>
  </div>
  
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Hasil Pencarian</h5>
       
        <form name="fgz"  method="post" action="<?= base_url('kasir/trade/tb_temp'); ?>">
        <?php foreach($trade as $par){ $para = $par->id_transaksi;  ?>
        <input type="hidden" name="par" value="<?= $para ?>">
        <?php } ?>
        <div id="view">
        
          <?php if(isset($_POST['z'])){ $this->load->view('kasir/tabel_barang', array('tempe' => $tempe)); }else{} // Load file view.php dan kirim data siswanya 
          ?>
          
        </div>
        </form>
       
      </div>
    </div>
  </div>
</div>






<br><br>
<div class="container-fluid">

  <table class="table table-bordered" id="dt">

    <thead>

      <tr>
        <th colspan="9" class="text-center">
          <h4>Keranjang Belanja</h4>
          <?php foreach($trade as $a){ $kdx = $a->id_transaksi; }?>
          <a href="<?= base_url('kasir/trade/hapus_all/'); if(empty($kdx)){echo"";}else{echo $kdx;} ?>" class="float-right btn btn-danger">Reset Keranjang</a>
          <?php  ?>
        </th>
      </tr>
      <tr>
        <th class="text-center">NO</th>
        <th class="text-center">NAMA BARANG</th>
        <th class="text-center">JUMLAH</th>
        <th class="text-center">HARGA</th>
        <th class="text-center">TANGGAL BELI</th>
        <th class="text-center">KASIR</th>
        <th class="text-center">AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $sum=0;
      foreach ($trade as $m) : ?>
        <tr class="text-center">
          <td style="text-align:center;"><?php echo $no++ ?></td>
          <td><?= $m->nama_brg ?></td>
          <td><?= $m->jumlah_belii ?></td>
          <td><?= $m->total ?></td>
          <td><?= $m->tgl_belii ?></td>
          <td><?= $m->nama_kasir ?></td>
          <td>

            <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit<?= $m->id_detail ?>"><i class="fas fa-edit"></i></a>
            <a class="btn btn-danger btn-sm" href="<?= base_url('kasir/trade/hapus/');
                                                    echo $m->id_detail ?>"><i class="fas fa-trash"></i></a>

          </td>
        </tr>
        
        <?php $sum+=$m->total; endforeach; ?>
    </tbody>

  </table>
  <hr>
   <form method="post" action="<?= base_url('kasir/trade/tb_nota'); ?>">
  <table border='0' width="90%" class="ml-4" cellspacing="2">
  </tr>
      <td colspan="3">Id Konsumen : <input type="text" name="id_kon" class="form-control" required><br></td>
      </tr>
  <tr style="width:100%">
  <td style="width:50%;"> Total Pembelian : <input type="text" class="form-control mr-2" value="<?php echo $sum; ?>" id="totall" readonly></td><td style='width:50%;'>&nbsp;&nbsp;Bayar :&nbsp;&nbsp;<input type="text" required class="form-control ml-2" id="bayarr" name="by" onchange="kmb()"></td>
 
      
  <?php foreach($trade as $g){ ?>
    <input type="hidden" name="kdd" value="<?= $g->id_transaksi ?>">
    <input type="hidden" name="id_brg[]" value="<?= $g->id_brg ?>">
    <input type="hidden" name="id_kasir" value="<?= $g->id_kasir ?>">
    <input type="hidden" name="jumbe[]" value="<?= $g->jumlah_belii ?>">
    <input type="hidden" name="tot[]" value="<?= $g->total ?>">
    <input type="hidden" name="tgl_b" value="<?= $g->tgl_belii ?>">
    <?php } ?>
    <td><br><button type="submit" class="btn btn-primary ml-5"  >Bayar</button></td> 
    
  
  </form>
      </tr>
      <tr >
  <td style='width:50%;'>Kembalian : <input type="text" class="form-control" id="km" name="kb" readonly></td><td style='width:50%;' colspan="2"><br><button class="btn btn-info ml-5">Cetak Nota</button> </td>
      </tr>
</table>

<br><br>
</div>


<?php
foreach ($trade as $m) {
?>
  <!-- Modal -->
  <div class="modal fade" id="edit<?= $m->id_detail ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDIT PEMBELIAN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('kasir/data_belanja/update'); ?>" name="f1" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>NAMA BARANG</label>
              <input type="hidden" name="ide" value="<?= $m->id_detail ?>">
              <input type="text" name="namae" class="form-control" value="<?= $m->nama_brg ?>">
            </div>

            <div class="form-group">
              <label>JUMLAH BELANJA</label>
              <input type="number" name="jbe" class="form-control" value="<?= $m->jumlah_belii ?>">
            </div>

            <div class="form-group">
              <label>TANGGAL</label>
              <input type="text" name="tgle" class="form-control" value="<?= $m->tgl_belii ?>">
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

<script type="text/javascript">
  function kmb(){
       var satu = document.getElementById('bayarr').value; 
			var dua = document.getElementById('totall').value;
			var total = parseInt(satu) - parseInt(dua);
      if (!isNaN(total)) {
			document.getElementById('km').value =  total;
      }
  }
  </script>
