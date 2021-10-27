<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" 
    data-target="#tambah_barang">
        <i class="fas fa-plus fa-sm"></i> tambah Member
    </button>

    <table class="table table-bordered" id="dt">
        <thead>
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">FOTO</th>
            <th class="text-center">NAMA KONSUMEN</th>
            <th class="text-center">KELAMIN</th>
            <th class="text-center">ALAMAT</th>
            <th class="text-center">NO HP</th>
            <th class="text-center">AKSI</th>
        </tr>
</thead>
<tbody>
        <?php
        $no=1;
        foreach($member as $m) : ?>
        <tr class="text-center">
            <td style="text-align:center;"><?php echo $no++ ?></td>
            <td><img src="<?= base_url('upload/member/'); ?><?php echo $m->foto ?>" width="80px" height="80px"></td>
            <td><?php echo $m->nama_konsumen ?></td>
            <td><?= $m->jk ?></td>
            <td><?php echo $m->alamat ?></td>
            <td><?php echo $m->no_hp ?></td>
           <td>
              
               <a class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#edit<?= $m->kd_konsumen ?>" ><i class="fas fa-edit"></i></a>
               <a class="btn btn-danger btn-sm" href="<?= base_url('admin/data_konsumen/hapus/');echo $m->kd_konsumen ?>"><i class="fas fa-trash"></i></a>

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
        <h5 class="modal-title" id="exampleModalLabel" >INPUT DATA KONSUMEN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/data_konsumen/tambah_aksi'); ?>" name="f1" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label>NAMA KONSUMEN</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>JENIS KELAMIN</label>
                <select name="jk" class="form-control">
                    <option>Laki - Laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>USERNAME</label>
                <input type="text" name="user" class="form-control">
            </div>
            <div class="form-group">
                <label>PASSWORD</label>
                <input type="password" name="pw" class="form-control">
            </div>
            <div class="form-group">
                <label>ALAMAT</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label>NO HP</label>
                <input type="text" name="nope" class="form-control">
            </div>
            <div class="form-group">
                <label>FOTO DIRI</label>
                <input type="file" name="foto" class="form-control">
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
foreach($member as $m){
?>
<!-- Modal -->
<div class="modal fade" id="edit<?= $m->kd_konsumen ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="exampleModalLabel" >EDIT KATEGORI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/data_konsumen/update'); ?>" name="f1" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label>NAMA KATEGORI</label>
                <input type="hidden" name="ide" value="<?= $m->kd_konsumen ?>">
                <input type="text" name="namae" class="form-control" value="<?= $m->nama_konsumen ?>">
            </div>
            <div class="form-group">
                <label>JENIS KELAMIN</label>
                <select name="jke" class="form-control">
                    <option <?= $m->jk == 'Laki - laki' ? "selected" :"" ?>>Laki - Laki</option>
                    <option <?= $m->jk == 'Perempuan' ? "selected" :"" ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>USERNAME</label>
                <input type="text" name="usere" value="<?= $m->usernamem ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>PASSWORD</label>
                <input type="password" name="pwe" class="form-control" placeholder="biarkan kosong jika tak ingin Ganti">
            </div>
            <div class="form-group">
                <label>ALAMAT</label>
                <input type="text" name="alamate" class="form-control" value="<?= $m->alamat ?>">
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