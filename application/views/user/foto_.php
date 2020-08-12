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
              <li class="breadcrumb-item">
							<a href="<?php echo site_url('galeri_foto'); ?>">Dokumentasi Foto</a>
						  </li>
						  <li class="breadcrumb-item active"><?php echo $foto[0]->kategori; ?></li>
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
					<h1 class="title-header text-center" style="font-weight: 900"><?php echo strtoupper($foto[0]->kategori); ?></h1><br>
					<div class="value-content">
						<div class="row">
							<?php foreach($foto as $no => $row): ?>
							<div class="col-md-2" style="padding: 0">
								<div class="panel-konten" style="margin-bottom: 23px">
									<a target="_blank" href="<?php echo $row->foto; ?>" title="<?php echo $row->judul; ?>"  data-fancybox="gallery" data-caption="<?php echo $row->judul; ?>"><div class="panel-thumb fancybox img-thumbnail" style="background-image: url(<?php echo $row->foto; ?>)"></div></a>
									<!-- <div style="padding-top: 5px;font-size: 16px;text-align: center;font-family: Roboto-Bold;"><?php echo $row->judul; ?></div> -->
								</div>
							</div>
							<?php endforeach; ?>
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
