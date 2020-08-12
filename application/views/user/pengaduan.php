<div>
	<div style="background-color: rgba(0,0,0,0.5);">
		<div class="container">
			<div class="container-konten">
				<div class="row">
					<div class="col-md-12">
						<h1 class="header-content">Pengaduan</h1>
						<ol class="breadcrumb">
						  <li class="breadcrumb-item">
							<a href="#">Beranda</a>
						  </li>
						  <li class="breadcrumb-item active">Kirim Pengaduan</li>
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
				<div class="col-md-8">
					<h1 class="title-header">Kirim Pengaduan</h1><hr>
          <form method="post" action="<?php echo site_url('pengaduan/kirim'); ?>">
						<div class="form-group">
              <label for="name">Nama *)</label>
              <input type="text" name="nama_pengadu" class="form-control" style="border-radius: 0" required>
            </div>
						<div class="form-group">
              <label for="name">Email *)</label>
              <input type="text" name="email" class="form-control" style="border-radius: 0" required>
            </div>
            <div class="form-group">
              <label for="name">Judul Pengaduan *)</label>
              <input type="text" name="judul_pengaduan" class="form-control" style="border-radius: 0" required>
            </div>
            <div class="form-group">
              <label for="name">Isi Pengaduan *)</label>
              <textarea name="isi" rows="10" class="form-control" style="border-radius: 0" required></textarea>
              <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" style="border-radius: 0"><i class="fa fa-send" aria-hidden="true"></i> Kirim</button>
              <button type="reset" class="btn btn-danger" style="border-radius: 0">Batal</button>
              <a href="<?php echo site_url('pengaduan/data'); ?>" class="btn btn-secondary" style="border-radius: 0"><i class="fa fa-list" aria-hidden="true"></i> Daftar Pengaduan</a>
            </div>
          </form>

					<div class="mu-blog-share">
						<ul class="mu-social-media mu-blog-share-nav" style="padding-left: 0; margin-bottom: 7px;">
							<li><h3>Share on :</h3></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="mu-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="mu-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a class="mu-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a class="mu-youtube" href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
          <br>
          <br>
          <div class="row" style="clear: both">
						<div class="col-md-12">
							<div class="list-group" style="text-align: left">
								<li class="list-group-item" style="margin:0;background-color: #f6f6f6; border: 0;border-top: 3px solid #007bff"><h5 class="mb-1"><strong><i class="fa fa-list" aria-hidden="true"></i> Pengaduan Terbaru</strong></h5></li>
								<?php
									foreach($pengaduan as $row):
										$replace = "/[^a-zA-Z0-9]/";
										$judul = preg_replace($replace, '-', strtolower($row->judul_pengaduan));

								?>
								<a href="<?php echo site_url('pengaduan/id/'.$row->id.'/'.$judul.'.html'); ?>" class="list-group-item download-file list-group-item-action">
									<?php echo $row->judul_pengaduan; ?>
									<div class="tanggal-content">
										<i class="fa fa-calendar" aria-hidden="true"></i>
											<?php

												$day = date('D', strtotime($row->tanggal));
												$dayList = array(
													'Sun' => 'Minggu',
													'Mon' => 'Senin',
													'Tue' => 'Selasa',
													'Wed' => 'Rabu',
													'Thu' => 'Kamis',
													'Fri' => 'Jumat',
													'Sat' => 'Sabtu'
												);

												$bulan = array(
													'01' => 'Januari',
													'02' => 'Februari',
													'03' => 'Maret',
													'04' => 'April',
													'05' => 'Mei',
													'06' => 'Juni',
													'07' => 'Juli',
													'08' => 'Agustus',
													'09' => 'September',
													'10' => 'Oktober',
													'11' => 'November',
													'12' => 'Desember'
												);

												$tgl = explode("-", $row->tanggal);
												$bln = $tgl[1];

												$tanggal = $dayList[$day].', '.$tgl[2].' '.$bulan[$bln].' '.$tgl[0];

												echo $tanggal;

											?>&nbsp;&nbsp;
										<i class="fa fa-user" aria-hidden="true"></i> <?php echo $row->nama_pengadu; ?>&nbsp;&nbsp;
									</div>
								</a>
								<?php endforeach; ?>
							</div>
						</div>
					</div>

				</div>

				<div class="col-md-4">
					<div class="list-group" style="text-align: left">
						<li class="list-group-item" style="background-color: #f6f6f6; border: 0;border-top: 3px solid #007bff"><h5 class="mb-1"><strong><i class="fa fa-list" aria-hidden="true"></i> Berita Populer</strong></h5></li>
						<?php
							foreach($berita_lain as $row):
								$replace = "/[^a-zA-Z0-9]/";
								$judul = preg_replace($replace, '-', strtolower($row->judul));

						?>
						<li class="list-group-item" style="border: 0;padding: 0px 6px">
							<div class="panel-konten2">
								<div class="panel-thumb2" style="background-image: url(<?php echo $row->thumb; ?>);"></div>
								<div class="panel-desk-konten2">
									<div style="font-size: 12px;color: #999;"><i class="fa fa-calendar" aria-hidden="true"></i>
									<?php
										$day = date('D', strtotime($row->date));
										$dayList = array(
											'Sun' => 'Minggu',
											'Mon' => 'Senin',
											'Tue' => 'Selasa',
											'Wed' => 'Rabu',
											'Thu' => 'Kamis',
											'Fri' => 'Jumat',
											'Sat' => 'Sabtu'
										);

										$bulan = array(
											'01' => 'Januari',
											'02' => 'Februari',
											'03' => 'Maret',
											'04' => 'April',
											'05' => 'Mei',
											'06' => 'Juni',
											'07' => 'Juli',
											'08' => 'Agustus',
											'09' => 'September',
											'10' => 'Oktober',
											'11' => 'November',
											'12' => 'Desember'
										);

										$tgl = explode("-", $row->date);
										$bln = $tgl[1];

										$tanggal = $dayList[$day].', '.$tgl[2].' '.$bulan[$bln].' '.$tgl[0];

										echo $tanggal;
									?>
									</div>
									<h1 class="judul-konten2"><a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>" style="color: #000"><?php echo $row->judul; ?></a></h1>
								</div>
							</div>
						</li>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	echo $this->session->flashdata('notif');
?>
