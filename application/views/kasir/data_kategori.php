<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" 
    data-target="#tambah_barang">
        <i class="fas fa-plus fa-sm"></i> tambah Kategori
    </button>

    <table class="table table-bordered" id="dt">
        <thead>
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">NAMA KATEGORI</th>
            <th class="text-center">AKSI</th>
        </tr>
</thead>
<tbody>
        <?php
        $no=1;
        foreach($kategori as $kat) : ?>
        <tr>
            <td style="text-align:center;"><?php echo $no++ ?></td>
           
            <td><?php echo $kat->nama_kategori ?></td>
           <td>
              
               <a class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#edit<?= $kat->id ?>" ><i class="fas fa-edit"></i></a>
               <a class="btn btn-danger btn-sm" href="<?= base_url('admin/data_kategori/hapus/');echo $kat->id ?>"><i class="fas fa-trash"></i></a>

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
        <h5 class="modal-title" id="exampleModalLabel" >INPUT KATEGORI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/data_kategori/tambah_aksi'); ?>" name="f1" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label>NAMA KATEGORI</label>
                <input type="text" name="nama_kat" class="form-control">
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
foreach($kategori as $kat){
?>
<!-- Modal -->
<div class="modal fade" id="edit<?= $kat->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="exampleModalLabel" >EDIT KATEGORI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/data_kategori/update'); ?>" name="f1" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label>NAMA KATEGORI</label>
                <input type="hidden" name="id" value="<?= $kat->id ?>">
                <input type="text" name="nama_kat" class="form-control" value="<?= $kat->nama_kategori ?>">
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