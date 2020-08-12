<div>
	<div style="background-color: rgba(0,0,0,0.1);">
		<div class="container">
			<div class="container-konten">
				<div class="row">
					<div class="col-md-12">
						<h1 class="header-content">DOKUMENTASI</h1>
						<ol class="breadcrumb">
						  <li class="breadcrumb-item">
							<a href="#">Beranda</a>
						  </li>
						  <li class="breadcrumb-item active">Dokumentasi Foto</li>
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
					<h1 class="title-header text-center" style="font-weight: 900">DOKUMENTASI FOTO KEGIATAN</h1>
					<p style="text-align: center;margin: 41px 0px;font-size: 14px;">Berikut adalah Foto Kegitan yang dilakukan oleh <?php

						$profil_web = $this->db->get('profil_web')->row();
						echo $profil_web->nama;
					?></p>
					<div class="value-content">
						<div class="container">
							<div class="row">
								<?php foreach($foto as $no => $row): ?>
								<div class="col-md-3" style="padding: 0;">
									<a href="<?php echo site_url('galeri_foto/id/'.$row->id_kategori_foto); ?>" title="<?php echo $row->kategori; ?>" style="color: #FFF;font-family: Roboto-Bold;">
										<div class="panel-konten" style="margin-bottom: 23px;border: 1px solid #DDD;">
											<div class="panel-thumb fancybox" style="background-image: url(<?php echo $row->foto; ?>)">
											</div>
											<div style="padding: 5px;font-size: 14px;position: absolute;bottom: 25px;background: rgba(0,0,0,0.5);width: 99%;"><?php echo $row->kategori; ?></div>
										</div>
									</a>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
					<br>
					<br>
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
				</div>
			</div>
		</div>
	</div>
</div>
<script>
//$(".fancybox").fancybox({
//		'transitionIn'	:	'elastic',
//		'transitionOut'	:	'elastic',
//		'speedIn'		:	600,
//		'speedOut'		:	200,
//		'overlayShow'	:	false
//	});
</script>
