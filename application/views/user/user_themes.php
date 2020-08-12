<!doctype html>
<?php

	$profil_web = $this->db->get('profil_web')->row();

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="<?php echo $profil_web->nama; ?>">
    <meta name="description" content="<?php echo $deskripsi!=''?$deskripsi:$profil_web->deskripsi; ?>">
    <meta name="keywords" content="<?php echo $profil_web->keyword; ?>">
		<meta name="og:image" content="<?php echo $image!=''?base_url($image):base_url($profil_web->logo); ?>"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@DiskominfotikSumbawa" />
		<meta name="twitter:title" content="<?php echo $title; ?>" />
		<meta name="twitter:description" content="<?php echo $deskripsi!=''?$deskripsi:$profil_web->deskripsi; ?>" />
		<meta name="twitter:image" content="<?php echo $image!=''?base_url($image):base_url($profil_web->logo); ?>" />
    <link rel="shortcut icon" href="<?php echo base_url('assets/image/logo/logo-sumbawa.png'); ?>" />
		<title><?php echo $title; ?> | <?php echo $profil_web->nama; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/owlcarousel/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fancybox-master/dist/jquery.fancybox.min.css">
		<link href="<?php echo base_url(); ?>assets/sweet_alert/dist/sweetalert.css" type="text/css" rel="stylesheet" media="all">
		<link href="<?php echo base_url(); ?>assets/alertifyjs/css/alertify.min.css" rel="stylesheet" >
		<link href="<?php echo base_url(); ?>assets/alertifyjs/css/themes/default.min.css" rel="stylesheet" >
		<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/hierarchy/css/hierarchy-view.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/hierarchy/css/main.css"> -->
		<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
		<!-- <script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script> -->
		<script src="<?php echo base_url(); ?>assets/owlcarousel/owl.carousel.js"></script>
		<script src="<?php echo base_url(); ?>assets/sweet_alert/dist/sweetalert.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/fancybox-master/dist/jquery.fancybox.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/alertifyjs/alertify.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script>
		<script src="<?php echo base_url(); ?>assets/highcharts/modules/series-label.js"></script>
		<script src="<?php echo base_url(); ?>assets/highcharts/modules/exporting.js"></script>
		<script src="<?php echo base_url(); ?>assets/apexcharts/dist/apexcharts.min.js"></script>
		<style media="screen">
		.navbar-toggler:not(:disabled):not(.disabled) {
				cursor: pointer;
				margin-right: 10px;
			}
		</style>
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.1';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>

  </head>
  <body style="background-image: url(<?php echo $profil_web->bg; ?>)">
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary fixed-top" style="background: #00d631;">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url(); ?>" style="color: #fff"><img src="<?php echo $profil_web->logo; ?>" style="width: 250px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo site_url(); ?>">BERANDA <span class="sr-only">(current)</span></a>
                        </li>
												<li class="nav-item dropdown <?php echo $subtitle=="informasi"?"active":""; ?>">
													<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> PROFIL KECAMATAN </a>
													<div class="dropdown-menu" aria-labelledby="navbarDropdown">
														<?php
															$cek = $this->db->order_by('id', 'ASC')->get('profil')->result();
															foreach($cek as $row):
																$replace = "/[^a-zA-Z0-9]/";
																$judul = preg_replace($replace, '-', strtolower($row->judul));
														?>
														<a class="dropdown-item submenu1" href="<?php echo site_url('profil/index/'.$row->id.'/'.$judul.'.html'); ?>"><?php echo $row->judul; ?></a>
														<?php endforeach; ?>
														<a class="dropdown-item submenu1" href="<?php echo site_url('profil/pegawai/struktur'); ?>">Struktur Organisasi</a>
														<a class="dropdown-item submenu1" href="<?php echo site_url('profil/pegawai/data'); ?>">Data Pegawai</a>
													</div>
												</li>
												<li class="nav-item dropdown <?php echo $subtitle=="informasi"?"active":""; ?>">
													<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> INFORMASI </a>
													<ul class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
														<?php
															$cek = $this->db->order_by('id', 'ASC')->get('kategori_info')->result();
															foreach($cek as $row):
														?>
														<li class="dropdown-submenu submenu1"><a class="dropdown-item dropdown-toggle" href="#"><?php echo $row->kategori; ?></a>
															<ul class="dropdown-menu submenu2">
																<?php
																	$cek2 = $this->db->where('id_kategori', $row->id)->order_by('id', 'ASC')->get('info')->result();
																	foreach($cek2 as $row):
																		$replace = "/[^a-zA-Z0-9]/";
																		$judul = preg_replace($replace, '-', strtolower($row->judul));

																?>
																<li class="dropdown-submenu"><a class="dropdown-item" href="<?php echo site_url('informasi/id/'.$row->id.'/'.$judul.'.html'); ?>"><?php echo $row->judul; ?></a></li>
																<?php endforeach ?>
															</ul>
														</li>
														<?php endforeach; ?>
													</ul>
												</li>
												<li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('berita'); ?>">BERITA/ARTIKEL</a>
                        </li>
												<li class="nav-item dropdown <?php echo $subtitle=="galeri"?"active":""; ?>">
													<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													  DATA PAJAK
													</a>
													<div class="dropdown-menu" aria-labelledby="navbarDropdown">
													  <a class="dropdown-item submenu1" href="<?php echo site_url('pajak'); ?>">Tabel</a>
													  <a class="dropdown-item submenu1" href="<?php echo site_url('pajak/get_grafik'); ?>">Grafik</a>
													</div>
												</li>
												<li class="nav-item dropdown <?php echo $subtitle=="galeri"?"active":""; ?>">
													<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													  DOKUMENTASI
													</a>
													<div class="dropdown-menu" aria-labelledby="navbarDropdown">
													  <a class="dropdown-item submenu1" href="<?php echo site_url('galeri_foto/'); ?>">Foto</a>
													  <a class="dropdown-item submenu1" href="<?php echo site_url('galeri_video/'); ?>">Video</a>
													</div>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="<?php echo site_url('kontak'); ?>">KONTAK</a>
												</li>
                        <li class="nav-item">
                            <a class="nav-link" href="#carii" data-toggle="collapse" aria-controls="jobseeker" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
										</ul>
                </div>
            </div>
        </div>
				<div class="collapse-menu" style="top: 77px">
					<div class="collapse" id="carii">
						<div class="bg-dark p-4 text-center">
							<form>
								<div class="form-row">
									<div class="col-md-8 offset-md-2">
										<div class="row">
											<div class="col-md-11">
												<input type="text" class="form-control" placeholder="Cari">
											</div>
											<div class="col-md-1">
												<button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
    </nav>


	<?php echo $content; ?>
	<div style="clear: both"></div>
	<footer class="navbar-primary bg-secondary" style="padding: 35px 0; font-size: 13px">
		<div class="container">
			<div class="footer-atas">
				<div sclass="col-md-10 offset-md-1">
					<div class="row">
						<div class="col-md-5">
							<div class="title-footer">
								<img src="<?php echo $profil_web->logo; ?>" style="width: 100%; margin-top: -12px">
							</div>
							<ul class="menu-footer">
									<?php echo $profil_web->deskripsi; ?><br><br>
								<li>
									<i class="fa fa-map-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $profil_web->alamat; ?>
								</li>
								<li>
									<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; <?php echo $profil_web->telp; ?>
								</li>
								<li>
									<i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $profil_web->email; ?>
								</li>
								<li>
									<i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; <?php echo $profil_web->url; ?>
								</li>
							</ul>
						</div>
            <div class="col-md-4">
							<div class="title-footer">
								POLLING
							</div>
							<ul class="menu-footer">
                <li>
                  Bagaimana tanggapan anda dengan tampilan website ini ?
                </li>
								<li>
									&nbsp;
								</li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="rd" id="exampleRadios1" value="a">
                    <label class="form-check-label" for="exampleRadios1">
                      Sangat Bagus
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="rd" id="exampleRadios1" value="b">
                    <label class="form-check-label" for="exampleRadios1">
                      Bagus
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="rd" id="exampleRadios1" value="c">
                    <label class="form-check-label" for="exampleRadios1">
                      Kurang Bagus
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="rd" id="exampleRadios1" value="d">
                    <label class="form-check-label" for="exampleRadios1">
                      Jelek
                    </label>
                  </div>
									<br>
									<button type="button" id="vote" class="btn btn-primary" style="border-radius: 0;font-size: 11px;font-family: Roboto-Bold;">Kirim Poling</button>
									<a href="<?php echo site_url('poling'); ?>" class="btn btn-success" style="border-radius: 0;font-size: 11px;font-family: Roboto-Bold;">Lihat Poling</a>
                </li>
							</ul>
						</div>
						<script>
						$(function() {
								 $("#vote").click(function() {
								 // validate and process form here
								 var rd;

								 if ($("input[name='rd']:checked").length > 0){
										 rd = $('input:radio[name=rd]:checked').val();
								 }
								 else{
										 // alert("Anda belum memilih salah satu");
										 swal(
                       'Anda belum memilih salah satu',
                       '',
                       'error'
                     )

										 return false;
								 }

								 $.ajax({
										url: "<?php echo site_url('Home/insert_poling/'); ?>" + rd,
										type: "POST",
										data: rd,
										cache: false,
										async: false,
										dataType: "json",
										success: function(data) {
											return alert(rd);
										}
								 });

							 });
						});
						</script>

						<div class="col-md-3">
							<div class="title-footer">
								LINK
							</div>
							<ul class="menu-footer">
								<li><a href="<?php echo site_url(); ?>">Beranda</a></li>
								<li><a href="<?php echo site_url('profil/index/10/sejarah.html'); ?>">Profil</a></li>
								<li><a href="<?php echo site_url('informasi/id/3/rencana-kerja-2019.html'); ?>">Informasi</a></li>
								<li><a href="<?php echo site_url('berita'); ?>">Berita</a></li>
								<li><a href="<?php echo site_url('geleri_foto'); ?>">Dokumentasi</a></li>
								<li><a href="<?php echo site_url('kontak'); ?>">Kontak</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div style="background: #007bff">
		<div class="container" style="padding: 0 95px;">
			<p class="text-footer">&copy; <?php echo date('Y'); ?> <?php echo $profil_web->nama; ?></p>
		</div>
	</div>
	<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script> -->
	<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery-2.2.3.min.js"></script> -->
	<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/eislider/js/jquery.eislideshow.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/eislider/js/jquery.easing.1.3.js"></script> -->
  </body>
</html>
