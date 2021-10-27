<div class="container-fluid">
<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" 
    data-target="#tambah_barang">
        <i class="fas fa-plus fa-sm"></i> Buku baru
    </button>
    <button class="btn btn-sm btn-info mb-3" data-toggle="modal" 
    data-target="#tambah_stok">
        <i class="fas fa-plus fa-sm"></i> Belanja Stok
    </button>
    <table class="table table-bordered" id="dt">
      
        <thead>
       
        <tr>  
            <th colspan="9" class="text-center"><h4>RIWAYAT BELANJA BUKU</h4></th>
        </tr>
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">FOTO</th>
            <th class="text-center">NAMA BARANG</th>
            <th class="text-center">JUMLAH BELI</th>
            <th class="text-center">HARGA BELI</th>
            <th class="text-center">TANGGAL BELANJA</th>
            <th class="text-center">PENANGGUNG JAWAB</th>
            <th class="text-center">SUPPLIER</th>
            <th class="text-center">AKSI</th>
        </tr>
</thead>
<tbody>
        <?php
        $no=1;
        foreach($belanja as $m) : ?>
        <tr class="text-center">
            <td style="text-align:center;"><?php echo $no++ ?></td>
            <td><img src="<?= base_url('upload/book/'); echo $m->img ?>" width="80px" height="100px"></td>
            <td><?php echo $m->nama_barangb ?></td>
            <td><?= $m->jumlah_belanja ?></td>
            <td><?= $m->harga_beli ?></td>
            <td><?= $m->tgl_belanja ?></td>
            <td><?= $m->nama_kasir ?></td>
            <td><?= $m->nama_supplier ?></td>
           <td>
              
              
               <a class="btn btn-danger btn-sm" href="<?= base_url('admin/data_belanja/hapus/');echo $m->id_belanja ?>"><i class="fas fa-trash"></i></a>

           </td>
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
        <h5 class="modal-title" id="exampleModalLabel" >INPUT BELANJA STOK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/data_belanja/tambah_aksi'); ?>" name="f1" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label>NAMA BARANG</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>FOTO BARANG</label>
                <input type="file" name="foto" class="form-control">
            </div>
           
            <div class="form-group">
                <label>JUMLAH BELANJA</label>
                <input type="number" name="jb" class="form-control">
            </div>
         
            <div class="form-group">
                <label>HARGA BELI</label>
                <input type="number" name="hb" class="form-control">
            </div>
            <div class="form-group">
                <label>TANGGAL</label>
                <input type="date" name="tgl" class="form-control">
            </div>
            <div class="form-group">
                <label>PENANGGUNG JAWAB</label>
                <input type="hidden" name="pj" value="<?= $this->session->userdata('id_kasir') ?>">
                <input type="text" name="" class="form-control" value="<?= $this->session->userdata('username') ?>" readonly>
            </div>
            <div class="form-group">
                <label>SUPPLIER</label>
                <select name="sup" class="form-control">
                  <option value="">- Pilih Supplier -</option>
                <?php foreach($sup as $s){ ?>  
                <option value="<?= $s->id_supplier ?>"><?= $s->nama_supplier ?></option>
                <?php } ?>
              </select>
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
foreach($belanja as $m){
?>
<!-- Modal -->
<div class="modal fade" id="edit<?= $m->id_belanja ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="exampleModalLabel" >EDIT KARYAWAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/data_belanja/update'); ?>" name="f1" method="post" enctype="multipart/form-data" >
        <div class="form-group">
                <label>NAMA BARANG</label>
                <input type="hidden" name="ide" value="<?= $m->id_belanja ?>">
                <input type="hidden" name="imge" value="<?= $m->img ?>">
                <input type="text" name="namae" class="form-control" value="<?= $m->nama_barangb ?>">
            </div>
           
            <div class="form-group">
                <label>JUMLAH BELANJA</label>
                <input type="text" name="jbe" class="form-control" value="<?= $m->jumlah_belanja ?>">
            </div>
         
            <div class="form-group">
                <label>TANGGAL</label>
                <input type="text" name="tgle" class="form-control" value="<?= $m->tgl_belanja ?>">
            </div>
            <div class="form-group">
                <label>PENANGGUNG JAWAB</label>
                <input type="hidden" name="pje" value="<?= $m->id_karyawan ?>">
                <input type="text" name="" class="form-control" value="<?= $m->nama_karyawan ?>" readonly>
            </div>
            <div class="form-group">
                <label>SUPPLIER</label>
                <select name="supe" class="form-control">
                <?php foreach($sup as $s){ ?>  
                <option <?= $m->id_supplier == $s->id_supplier ? "selected" : "" ?> value="<?= $s->id_supplier ?>"><?= $s->nama_supplier ?></option>
                <?php } ?>
              </select>
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


<!-- tb_stok -->
<div class="modal fade" id="tambah_stok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="exampleModalLabel" >TAMBAH STOK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <table class="" border='1' width="100%">
                <tr>
                  <th class="text-center">Nama Buku</th>
                  <th class="text-center">Harga beli</th>
                  <th class="text-center">Stok</th>
                  <th class="text-center">#</th>
                </tr>
                <?php foreach($brg as $b){ ?>
                <tr class="text-center">
                  <td><?= $b->judul_buku ?></td>
                  <td><?= $b->harga_stok ?></td>
                  <td><?= $b->stok ?></td>
                  <td><button  data-toggle="modal" data-target="#tb_stok<?= $b->id_buku ?>" class="btn btn-primary">Pilih</button></td>
                </tr>
                <?php } ?>
                </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    
    </div>
  </div>
</div>

<?php foreach($brg as $b){ ?>
<div class="modal fade" id="tb_stok<?= $b->id_buku ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="exampleModalLabel" >TAMBAH STOK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/data_belanja/tb_stokk'); ?>" name="f1" method="post" enctype="multipart/form-data" >
        <div class="form-group">
        <label>Judul Buku</label>
        <input type="hidden" name="idx" value="<?= $b->id_buku ?>">
        <input type="hidden" name="nb" value="<?= $b->judul_buku ?>">
        <input type="hidden" name="img" value="<?= $b->gambar ?>">
        <input type="hidden" name="tgl_belanja" value="<?= date('Y-m-d') ?>">
        <input type="hidden" name="id_kasir" value="<?= $this->session->userdata('id_kasir') ?>">
        
          <input readonly name="nm" type="text" value="<?= $b->judul_buku ?>" class="form-control">
        </div>
        <div class="form-group">
          <label>Jumlah Kulak</label>
          <input type="number" name="jk" class="form-control" placeholder="Jumlah Beli /Pcs">
        </div>
        <div class="form-group">
        <label>Harga Beli</label>
          <input type="number" name="harga_beli" value="<?= $b->harga_stok ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
        <label>Stok Sekarang</label>
          <input type="number" name="stk" value="<?= $b->stok ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
          <select class="form-control" name="sup">
          <option value="">- Pilih Supplier -</option>
                <?php foreach($sup as $s){ ?>  
                <option value="<?= $s->id_supplier ?>"><?= $s->nama_supplier ?></option>
                <?php } ?>
          </select>
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