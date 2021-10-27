<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BUKU</h3>
<br><br>
    <?php foreach($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">

            <div class="for-group">
                <label>NAMA BUKU</label>
                <input type="text" name="judul_buku" class="form-control"
                value="<?php echo $brg->judul_buku ?>">
            </div>

            <div class="for-group">
                <label>KETERANGANN</label>
                <input type="hidden" name="id_buku" class="form-control"
                value="<?php echo $brg->id_buku ?>">
                <textarea name="keterangan" class="form-control"
                value="<?php echo $brg->keterangan ?>"></textarea>
            </div>

            <div class="for-group">
                <label>KATEGORI</label>
                <input type="text" name="kategori" class="form-control"
                value="<?php echo $brg->kategori ?>">
                <select class="form-control">
                    <?php foreach($kat as $y){ ?>
                    <option><?= $y->nama_kategori ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="for-group">
                <label>HARGA</label>
                <input type="number" name="harga" class="form-control"
                value="<?php echo $brg->harga ?>">
            </div>

            <div class="for-group">
                <label>STOK</label>
                <input type="text" name="stok" class="form-control"
                value="<?php echo $brg->stok ?>">
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
    
    <?php endforeach; ?>
        
</div>