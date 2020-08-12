<img src="<?php echo $berita->thumb; ?>" hidden />
<div style="background-imagek: url('<?php echo $berita->thumb; ?>'); background-size: cover;background-position: center;background-attachment: fixed;">
	<div style="background-color: rgba(0,0,0,0.5);">
		<div class="container">
			<div class="container-konten">
				<div class="row">
					<div class="col-md-12">
						<h1 class="header-content">PROFIL</h1>
						<ol class="breadcrumb">
						  <li class="breadcrumb-item">
							<a href="#">Beranda</a>
						  </li>
						  <li class="breadcrumb-item">
							<a href="#">Profil</a>
						  </li>
						  <li class="breadcrumb-item active"><?php echo $detail->judul; ?></li>
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
        <div class="col-md-4">
					<div style="border-right: 1px solid #f6f6f6;border-bottom: 1px solid #f6f6f6;margin-bottom: 17px">
	          <div class="list-group" style="text-align: left;margin-bottom: 12px;">
	            <div style="font-family: bold, sans-serif, Arial;font-weight: Bold;font-size: 19px;padding-left: 18px;margin-bottom: 12px;">
	              PROFIL
	            </div>
							<?php
								foreach($data as $row):
									$replace = "/[^a-zA-Z0-9]/";
									$judul = preg_replace($replace, '-', strtolower($row->judul));

							?>
								<a style="font-family: Roboto-Regular;font-size: 15px;line-height: 20px;border: 0;" href="<?php echo site_url('profil/index/'.$row->id.'/'.$judul.'.html'); ?>" class="list-group-item download-file list-group-item-action judul-event <?php echo $row->judul==$detail->judul?"active":""; ?>">
	                <i class="fa fa-angle-double-right" aria-hidden="true" style="color: #007bff;font-weight: Bold"></i> &nbsp;&nbsp;&nbsp;<?php echo $row->judul; ?>
								</a>
							<?php endforeach; ?>
							<a style="font-family: Roboto-Regular;font-size: 15px;line-height: 20px;border: 0;" href="<?php echo site_url('profil/pegawai/struktur'); ?>" class="list-group-item download-file list-group-item-action judul-event">
								<i class="fa fa-angle-double-right" aria-hidden="true" style="color: #007bff;font-weight: Bold"></i> &nbsp;&nbsp;&nbsp;Struktur Organisasi
							</a>
							<a style="font-family: Roboto-Regular;font-size: 15px;line-height: 20px;border: 0;" href="<?php echo site_url('profil/pegawai/data'); ?>" class="list-group-item download-file list-group-item-action judul-event">
								<i class="fa fa-angle-double-right" aria-hidden="true" style="color: #007bff;font-weight: Bold"></i> &nbsp;&nbsp;&nbsp;Data Pegawai
							</a>
						</div>
					</div>

        </div>
				<div class="col-md-8">
					<h1 class="title-header"><?php echo $detail->judul; ?></h1>
					<div class="tanggal-content">
					</div>
					<div class="value-content">
						<?php echo $detail->isi; ?>
					</div>
					<div class="mu-blog-share">
						<ul class="mu-social-media mu-blog-share-nav" style="padding-left: 0; margin-bottom: 7px;">
							<li><h3>Share on :</h3></li>
							<li><a href="http://www.facebook.com/sharer.php?u=<?php //echo site_url('berita/id/'.$berita->id.'/'.$judul.'.html'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a class="mu-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="mu-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a class="mu-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a class="mu-youtube" href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
					<div id="fb-root"></div>
					<div class="fb-comments" data-href="<?php //echo site_url('berita/id/'.$berita->id); ?>" data-width="330px" data-numposts="10"></div>
				</div>
			</div>
		</div>
	</div>
</div>
