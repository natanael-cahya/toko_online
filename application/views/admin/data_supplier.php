<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" 
    data-target="#tambah_barang">
        <i class="fas fa-plus fa-sm"></i> tambah Supplier
    </button>

    <table class="table table-bordered" id="dt">
        <thead>
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">NAMA SUPPLIER</th>
            <th class="text-center">NAMA PENERBIT</th>
            <th class="text-center">NO HP</th>
            <th class="text-center">AKSI</th>
        </tr>
</thead>
<tbody>
        <?php
        $no=1;
        foreach($supplier as $m) : ?>
        <tr class="text-center">
            <td style="text-align:center;"><?php echo $no++ ?></td>
            <td><?php echo $m->nama_supplier ?></td>
            <td><?= $m->nama_penerbit ?></td>
            <td><?php echo $m->no_hp ?></td>
           <td>
              
               <a class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#edit<?= $m->id_supplier ?>" ><i class="fas fa-edit"></i></a>
               <a class="btn btn-danger btn-sm" href="<?= base_url('admin/data_supplier/hapus/');echo $m->id_supplier ?>"><i class="fas fa-trash"></i></a>

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
        <h5 class="modal-title" id="exampleModalLabel" >INPUT DATA SUPPLIER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/data_supplier/tambah_aksi'); ?>" name="f1" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label>NAMA SUPPLIER</label>
                <input type="text" name="nama" class="form-control">
            </div>
           
            <div class="form-group">
                <label>NAMA PERUSAHAAN</label>
                <input type="text" name="np" class="form-control">
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
foreach($supplier as $m){
?>
<!-- Modal -->
<div class="modal fade" id="edit<?= $m->id_supplier ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="exampleModalLabel" >EDIT SUPPLIER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/data_supplier/update'); ?>" name="f1" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label>NAMA SUPPLIER</label>
                <input type="hidden" name="ide" value="<?= $m->id_supplier ?>">
                <input type="text" name="namae" class="form-control" value="<?= $m->nama_supplier ?>">
            </div>
           
            <div class="form-group">
                <label>NAMA PERUSAHAAN</label>
                <input type="text" name="npe" value="<?= $m->nama_perusahaan ?>" class="form-control">
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