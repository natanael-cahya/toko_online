<table class="table table-bordered" id="dtt" border="1" cellpadding="8">

    <thead>

        <tr>

            <th>Nama Buku</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah Beli</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($tempe)) {
            foreach ($tempe as $data) {
                echo "<tr>";
                echo "<td>" . $data->judul_buku . "</td>";
                echo "<td>" . $data->stok . "</td>";
                echo "<td>" . $data->harga . "</td>";
                $zz = $data->stok;
                ?>
                
                <td><select name="jum" class="form-control">
                    <?php for($i=1;$i<=$zz;$i++){ ?>
                    <option><?= $i ?></option>
                    <?php } ?>
                </select></td>
                
                
                
                <input type="hidden" name="kdd" value="<?= uniqid(); ?>">
                <input type="hidden" name="id_buku" value="<?= $data->id_buku ?>">
                <input type="hidden" name="id_k" value="<?= $this->session->userdata('id_kasir'); ?>">
                <input type="hidden" name="tot" value="<?= $data->harga  ?>">
                <input type="hidden" name="tgl" value="<?= date('Y-m-d'); ?>">
                <td><input type="submit" class="btn btn-primary" name="ok" value="add"></td>
                
             
                <tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
        }
        ?>
    </tbody>
</table>