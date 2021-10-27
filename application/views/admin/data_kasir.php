<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" 
    data-target="#tambah_barang">
        <i class="fas fa-plus fa-sm"></i> tambah Karyawan
    </button>

    <table class="table table-bordered" id="dt">
        <thead>
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">NAMA KARYAWAN</th>
            <th class="text-center">USERNAME</th>
            <th class="text-center">ALAMAT</th>
            <th class="text-center">NO HP</th>
            <th class="text-center">AKSI</th>
        </tr>
</thead>
<tbody>
        <?php
        $no=1;
        foreach($karyawan as $m) : ?>
        <tr class="text-center">
            <td style="text-align:center;"><?php echo $no++ ?></td>
            <td><?php echo $m->nama_kasir ?></td>
            <td><?= $m->username ?></td>
            <td><?= $m->alamat ?></td>
            <td><?php echo $m->no_hp ?></td>
           <td>
              
               <a class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#edit<?= $m->id_kasir ?>" ><i class="fas fa-edit"></i></a>
               <a class="btn btn-danger btn-sm" href="<?= base_url('admin/data_kasir/hapus/');echo $m->id_kasir ?>"><i class="fas fa-trash"></i></a>

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
        <h5 class="modal-title" id="exampleModalLabel" >INPUT DATA KARYAWAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/data_kasir/tambah_aksi'); ?>" name="f1" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label>NAMA KARYAWAN</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>USERNAME</label>
                <input type="text" name="user" class="form-control">
            </div>
            <div class="form-group">
                <label>PASSWORD</label>
                <input type="password" name="pass" class="form-control">
            </div>
           
            <div class="form-group">
                <label>ALAMAT</label>
                <input type="text" name="alamat" class="form-control">
            </div>
         
            <div class="form-group">
                <label>NO HP</label>
                <input type="text" name="nope" class="form-control">
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
foreach($karyawan as $m){
?>
<!-- Modal -->
<div class="modal fade" id="edit<?= $m->id_kasir ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="exampleModalLabel" >EDIT KARYAWAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/data_kasir/update'); ?>" name="f1" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label>NAMA KARYAWAN</label>
                <input type="hidden" name="ide" value="<?= $m->id_kasir ?>">
                <input type="text" name="namae" class="form-control" value="<?= $m->nama_kasir ?>">
            </div>
            <div class="form-group">
                <label>USERNAME</label>
                <input type="text" name="user" value="<?= $m->username ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>PASSWORD</label>
                <input type="password" name="pass" value="" class="form-control" placeholder="Biarkan Kosong jika Tak ingin Ubah Password">
            </div>
            <div class="form-group">
                <label>ALAMAT</label>
                <input type="text" name="alamate" value="<?= $m->alamat ?>" class="form-control">
            </div>
           
            <div class="form-group">
                <label>NO HP</label>
                <input type="text" name="nopee" class="form-control" value="<?= $m->no_hp ?>">
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