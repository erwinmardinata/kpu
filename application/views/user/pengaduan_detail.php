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
						  <li class="breadcrumb-item">
							<a href="<?php echo site_url('pengaduan/data'); ?>">Daftar Pengaduan</a>
						  </li>
						  <li class="breadcrumb-item active"><?php echo $data->judul_pengaduan; ?></li>
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
					<h1 class="title-header"><?php echo $data->judul_pengaduan; ?></h1>
					<div class="tanggal-content">
						<i class="fa fa-calendar" aria-hidden="true"></i>
						<?php
							$day = date('D', strtotime($data->tanggal));
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

							$tgl = explode("-", $data->tanggal);
							$bln = $tgl[1];

							$tanggal = $dayList[$day].', '.$tgl[2].' '.$bulan[$bln].' '.$tgl[0];

							echo $tanggal;
							$profil_web1 = $this->db->get('profil_web')->row();

						?>&nbsp;&nbsp;
						<i class="fa fa-user" aria-hidden="true"></i> <?php echo $data->nama_pengadu; ?>&nbsp;&nbsp;
					</div>
					<div class="value-content">
					       <?php echo $data->isi; ?>
					</div>
					<?php
						$cek = $this->db->where('id_pengaduan', $data->id)->get('balas_pengaduan')->result()
					?>
					<div style="padding: 15px 0px;">
						<ul class="list-group">
						  <li class="list-group-item" style="font-family: Roboto-Bold;border-top: 3px solid #007bff;padding: 9px;">Tindak Lanjut Pengaduan<span style="float: right"><span class="badge badge-secondary"><?php echo COUNT($cek); ?></span></span></li>
						  <li class="list-group-item" style="padding: 9px;">
								<?php
									if(!$cek) {
								?>
								<div class="alert alert-warning" role="alert">
								  Belum ada tanggapan dari Admin
								</div>
								<?php
									} else {
										foreach($cek as $row):
								?>
								<span style="font-size: 15px;font-family: Roboto-Bold;">Admin - <?php echo $profil_web1->nama; ?></span>
								<span style="float: right"><small><?php echo $row->waktu; ?></small></span>
									<div class="media">
									  <img src="<?php echo base_url('assets/image/logo/logo-sumbawa.png'); ?>" class="mr-3" alt="Sumbawa" style="width: 35px;height: 50px">
									  <div class="media-body" style="font-size: 14px">
											<div class="alert alert-dark" role="alert">
											<?php echo $row->balasan; ?>
										</div>
									  </div>
									</div>
							<?php endforeach; } ?>
							</li>
						</ul>
					</div>
					<div id="fb-root"></div>
					<div class="fb-comments" data-href="<?php echo site_url('pengaduan/id/'.$data->id); ?>" data-width="100%" data-numposts="10"></div>
					<br>
					<div class="mu-blog-share">
						<ul class="mu-social-media mu-blog-share-nav" style="padding-left: 0; margin-bottom: 7px;">
							<li><h3>Share on :</h3></li>
							<?php
								$replace = "/[^a-zA-Z0-9]/";
								$judul = preg_replace($replace, '-', strtolower($data->judul_pengaduan));
							?>
							<li><a href="http://www.facebook.com/sharer.php?u=<?php echo site_url('berita/id/'.$data->id.'/'.$judul.'.html'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a class="mu-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="mu-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a class="mu-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a class="mu-youtube" href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
					<br>
					<div class="row" style="clear: both">
						<div class="col-md-12">
							<div class="list-group" style="text-align: left">
								<li class="list-group-item" style="margin:0;background-color: #f6f6f6; border: 0;border-top: 3px solid #007bff"><h5 class="mb-1"><strong><i class="fa fa-list" aria-hidden="true"></i> Pengaduan Lainnya</strong></h5></li>
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
