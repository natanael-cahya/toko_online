<div class="container-fluid">
  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang">
    <i class="fas fa-plus fa-sm"></i> tambah barang
  </button>

  <table class="table table-bordered" id="dt">
    <thead>
      <tr>
        <th class="text-center">NO</th>
        <th class="text-center">GAMBAR</th>
        <th class="text-center">NAMA BUKU</th>
        <th class="text-center">PENERBIT</th>
        <th class="text-center">KETERANGAN</th>
        <th class="text-center">KATEGORI</th>
        <th class="text-center">HARGA</th>
        <th class="text-center"> STOK</th>
        <th class="text-center"> QR-CODE</th>
        <th class="text-center">AKSI</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($barang as $brg) : ?>
        <tr <?= $brg->keterangan == '' ? "style='background-color:	#FFC0CB;'" : "" ?>>
          <td><?php echo $no++ ?></td>
          <td><img src="<?= base_url(); ?>/upload/book/<?= $brg->gambar ?>" width="80px" heigth="80px"></td>
          <td><?php echo $brg->judul_buku ?></td>
          <td><?= $brg->nama_penerbit ?></td>
          <td><?php echo $brg->keterangan ?></td>
          <td><?php echo $brg->nama_kategori ?></td>
          <td><?php echo $brg->harga ?></td>
          <td><?php echo $brg->stok ?></td>
          <td><img src='<?= base_url('/assets/images/'); ?><?php echo $brg->qrcode ?>' style="width: 80px; height: 80px;"></td>

          <td>
            
            <a class="btn btn-secondary btn-sm" href="<?= base_url('admin/data_barang/edit/');
                                                      echo $brg->id_buku ?>"><i class="fas fa-edit"></i></a>
            <a class="btn btn-danger btn-sm" href="<?= base_url('admin/data_barang/hapus/');
                                                    echo $brg->id_buku ?>"><i class="fas fa-trash"></i></a>

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
        <h5 class="modal-title" id="exampleModalLabel">INPUT PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/data_barang/tambah_aksi'); ?>" name="f1" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>NAMA BARANG</label>
            <input type="text" name="judul_buku" class="form-control">
          </div>
          <div class="form-group">
            <label>KETERANGAN</label>
            <textarea name="keterangan" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>KATEGORI</label>
            <select name="kategori" class="form-control">
              <?php foreach ($kat as $k) { ?>
                <option value="<?= $k->id ?>"><?= $k->nama_kategori ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>HARGA</label>
            <input type="number" name="harga" class="form-control">
          </div>
          <div class="form-group">
            <label>STOK</label>
            <input type="number" name="stok" class="form-control">
          </div>
          <div class="form-group">
            <label>GAMBAR PRODUK</label><br>
            <input type="file" name="berkas" class="form-control">
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
