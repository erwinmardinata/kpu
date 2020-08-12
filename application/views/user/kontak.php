<div>
	<div style="background-color: rgba(0,0,0,0.1);">
		<div class="container">
			<div class="container-konten">
				<div class="row">
					<div class="col-md-12">
						<h1 class="header-content">KONTAK</h1>
						<ol class="breadcrumb">
						  <li class="breadcrumb-item">
							<a href="#">Beranda</a>
						  </li>
						  <li class="breadcrumb-item active">Kontak</li>
						</ol>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="background-color: #FFF; padding: 25px 0;">
	<div class="container">
		<div class="container-konten">
			<div class="row">
				<div class="col-md-12">
					<h1 class="title-header">KONTAK</h1><hr>
					<div class="value-content">
            <iframe src="<?php echo $data->googlemap; ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <h1 class="title-header" style="text-align: center;padding: 35px 0 15px 0;">BUKU TAMU</h1><hr>
            <form method="POST" action="<?php echo site_url('Kontak/kirim_bukutamu'); ?>">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" name="nama" style="border-radius: 0;" class="form-control" placeholder="Nama" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" name="email" style="border-radius: 0;" class="form-control" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
								<input type="text" name="judul" style="border-radius: 0;" class="form-control" placeholder="Judul" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="pesan" style="border-radius: 0;" rows="5" placeholder="Pesan" required></textarea>
								<input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>" style="border-radius: 0;" class="form-control" placeholder="Judul">
              </div>
              <button type="submit" style="border-radius: 0;" class="btn btn-primary">KIRIM</button>
            </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	echo $this->session->flashdata('notif');
?>
