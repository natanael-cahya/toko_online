<form method="post" name="awe" action="<?= base_url('admin/laporan/cetak_belanja'); ?>">
<div class="card w-50 mx-auto">
<div class="card-header text-center font-weight-bold bg-warning">
    Pilih Opsi Laporan Belanja Stok
  </div>
  <div class="card-body bg-info">
   <table align="center">
        <tr>
            <td>
                <label class="text-white">Bulan :</label>
                <select class="form-control" name="bln">
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            </td>
            <td>
                <label class="text-white">Tahun :</label>
                <select class="form-control" name="th">
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center"><button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button></td>
        </tr>
    </table>
    
  </div>
</div>
</form>