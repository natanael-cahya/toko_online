<html>
	<head>
		<title>print</title>
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
	</head>
	<body>
		<script>window.print();</script>
		<div class="container mt-2">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<center>
                        <?php date_default_timezone_set("Asia/Bangkok"); ?>
						<p>ENDLESS BOOK STORE</p>
						<p>Jl.Kampung Baru No.277 Kraksaan , Kab.Probolinggo</p>
						<p>Tanggal : <?php  echo date("j F Y, G:i");?></p>
                        <?php foreach($nota as $t){ $tx=$t->nama_kasir; $ts=$t->nama_konsumen; } ?>
						<p>Kasir : <?php echo $tx ?></p>
                        <p>Konsumen : <?php echo $ts ?></p>
                        
					</center>
					<table class="table table-bordered" style="width:100%;">
						<tr>
							<td>No.</td>
							<td>Buku</td>
							<td>Jumlah</td>
							<td>Total</td>
						</tr>
                        
						<?php $sum=0; $no=1; foreach($nota as $isi){?>
						<tr>
							<td><?php echo $no;?></td>
							<td><?php echo $isi->judul_buku;?></td>
							<td><?php echo $isi->jumlah_belii;?></td>
							<td><?php echo $isi->total;?></td>
						</tr>
						<?php
                        
                        $sum+=$isi->total; 
                        $no++; 
                        }?>
					</table>
					<div class="pull-right">
					
						Total : Rp.<?php echo number_format($sum);?>,-
						<br/>
						Bayar : Rp.<?php echo number_format($this->uri->segment(5));?>,-
						<br/>
						Kembali : Rp.<?php echo number_format($this->uri->segment(6));?>,-
					</div>
					<div class="clearfix"></div>
					<center>
                        <br>
						<p>Terima Kasih Telah berbelanja di toko kami !</p>
					</center>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</body>
</html>
