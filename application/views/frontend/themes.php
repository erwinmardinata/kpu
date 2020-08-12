<?php

	$profil_web = $this->db->get('profil_web')->row();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
		<title><?php echo $title; ?> | <?php echo $profil_web->nama; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/deeniyat/image/logo/deeniyat.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/deeniyat/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="<?php echo base_url(); ?>assets/deeniyat/vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/deeniyat/vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/deeniyat/vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/deeniyat/vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/deeniyat/css/style.css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fancybox-master/dist/jquery.fancybox.min.css">

	<style>
	.blog_tow_area .blog_tow_row .renovation .renovation_content {
	    border: none;
	    padding: 0;
	}
	.about_us_area .about_row p {
		padding-bottom: 0;
	}
	</style>
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->
	<!-- <section class="top_header_area">
	    <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>+1 (168) 314 5016</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>info@thethemspro.com</a></li>
                <li><a href="#"><i class="fa fa-clock-o"></i>Mon - Sat 12:00 - 20:00</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
	    </div>
	</section> -->
	<!-- End Top Header_Area -->

	<!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href=""><img src="<?php echo $profil_web->logo; ?>" alt="" style="width: 190px;position: absolute;top: 18px;"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url(); ?>" class="active">Home</a></li>
                        <li><a href="<?php echo site_url('profil'); ?>">Profil</a></li>
												<li><a href="<?php echo site_url('kurikul'); ?>">Kurikulum</a></li>
                        <li><a href="<?php echo site_url('fasilitas'); ?>">Fasilitas</a></li>
                        <li><a href="<?php echo site_url('berita'); ?>">Berita</a></li>
                        <li><a href="<?php echo site_url('artikels'); ?>">Artikel</a></li>
                        <li><a href="<?php echo site_url('galeri'); ?>">Galleri</a></li>
                        <li><a href="<?php echo site_url('kontak'); ?>">Kontak</a></li>
                        <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->

	<?php echo $content; ?>

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-4 col-sm-6 footer_about">
                    <h2>TENTANG KAMI</h2>
                    <img src="<?php echo base_url(); ?>assets/deeniyat/image/logo/deeniyat.png" alt="" style="width: 117px;">
                    <p><?php echo $profil_web->deskripsi; ?></p>
                </div>
                <div class="col-md-4 col-sm-6 footer_about quick">
                    <h2>MEDIA SOSIAL</h2>
                    <address>
                        <p>Dapat menguhungi kami melalui link media sosial:</p>
                        <ul class="socail_icon">
                            <li><a href="<?php echo $profil_web->facebook; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
														<li><a href="<?php echo $profil_web->instagram; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
														<li><a href="<?php echo $profil_web->twitter; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $profil_web->youtube; ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </address>
                </div>
                <div class="col-md-4 col-sm-6 footer_about">
                    <h2>KONTAK KAMI</h2>
                    <address>
                        <p>Jika ada pertanyaan bisa langsung hubungi ke:</p>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $profil_web->email; ?></a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $profil_web->telp; ?></a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span><?php echo $profil_web->alamat; ?> </span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Lembaga Deeniyat &copy; 2019
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="<?php echo base_url(); ?>assets/deeniyat/js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/deeniyat/js/bootstrap.min.js"></script>
    <!-- Animate JS -->
		<script src="<?php echo base_url(); ?>assets/fancybox-master/dist/jquery.fancybox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/deeniyat/vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="<?php echo base_url(); ?>assets/deeniyat/vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>assets/deeniyat/vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="<?php echo base_url(); ?>assets/deeniyat/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/deeniyat/vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="<?php echo base_url(); ?>assets/deeniyat/vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/deeniyat/vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="<?php echo base_url(); ?>assets/deeniyat/vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="<?php echo base_url(); ?>assets/deeniyat/vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="<?php echo base_url(); ?>assets/deeniyat/js/theme.js"></script>
</body>
</html>
