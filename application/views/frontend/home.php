<!-- Slider area -->
<section class="slider_area row m0">
    <div class="slider_inner">
      <?php
        foreach($slider as $no => $row) {
      ?>
        <div data-thumb="<?php echo $row->foto; ?>" data-src="<?php echo $row->foto; ?>">
            <div class="camera_caption">
               <div class="container">
                    <?php
                      if($no == 0) {
                    ?>
                    <h5 class=" wow fadeInUp animated">SELAMAT DATANG</h5>
                    <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">YAYASAN DEENIYAT</h3>
                    <!-- <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p> -->
                    <!-- <a class=" wow fadeInUp animated" data-wow-delay="1s" href="#">Read More</a> -->
                    <?php
                      }
                    ?>
               </div>
            </div>
        </div>
      <?php
        }
      ?>
    </div>
</section>
<!-- End Slider area -->

<!-- Professional Builde -->
<section class="professional_builder row">
    <div class="container">
       <div class="row builder_all">
          <?php
            foreach ($keunggulan as $row) {
          ?>
            <div class="col-md-4 col-sm-6 builder">
                <i class="<?php echo $row->icon; ?>" aria-hidden="true"></i>
                <h4><?php echo $row->judul; ?></h4>
                <p><?php echo $row->deskripsi; ?></p>
            </div>
          <?php
            }
          ?>
       </div>
    </div>
</section>
<!-- End Professional Builde -->

<!-- About Us Area -->
<section class="about_us_area row">
    <div class="container">
        <!-- <div class="tittle wow fadeInUp">
            <h2>ABOUT US</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div> -->
        <div class="row about_row">
            <div class="who_we_area col-md-7 col-sm-6">
                <div class="subtittle">
                    <h2><?php echo $tentang->judul; ?></h2>
                </div>
                <?php echo $tentang->deskripsi; ?>
                <a href="<?php echo site_url('profil'); ?>" class="button_all" style="margin-top: 50px">Baca Detail</a>
            </div>
            <div class="col-md-5 col-sm-6 about_client">
                <img src="<?php echo $tentang->foto; ?>" alt="" style="width: 100%">
            </div>
        </div>
    </div>
</section>
<!-- End About Us Area -->

<!-- What ew offer Area -->
<section class="what_we_area row">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>PROGRAM YAYASAN DEENIYAT</h2>
            <!-- <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
        </div>
        <div class="row construction_iner">
            <?php
              foreach($program as $row) {
            ?>
            <div class="col-md-4 col-sm-6 construction">
               <div class="cns-img">
                    <img src="<?php echo $row->foto; ?>" alt="" style="width: 100%;height: 204px;">
               </div>
               <div class="cns-content">
                    <i class="<?php echo $row->icon ?>" aria-hidden="true"></i>
                    <a href="#"><?php echo $row->judul; ?></a>
                    <p><?php echo $row->deskripsi; ?></p>
               </div>
            </div>
            <?php
              }
            ?>
        </div>
    </div>
</section>
<!-- End What ew offer Area -->

<!-- Our Latest Blog Area -->
<section class="latest_blog_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>BERITA SEPUTAR LEMBAGA DEENIYAT</h2>
            <!-- <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
        </div>
        <div class="row latest_blog">
            <?php
              foreach ($berita as $row) {
                $replace = "/[^a-zA-Z0-9]/";
                $judul = preg_replace($replace, '-', strtolower($row->judul));
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

  							$tanggal = $tgl[2].' '.$bulan[$bln].' '.$tgl[0];

            ?>
            <div class="col-md-4 col-sm-6 blog_content">
                <img src="<?php echo $row->thumb; ?>" alt="" style="width: 100%; height: 200px">
                <a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>" class="blog_heading"><?php echo $row->judul; ?></a>
                <h4><small>Penulis  </small><a href="#"><?php echo $row->penulis; ?></a><span>/</span><small>ON </small> <?php echo $tanggal; ?></h4>
                <p><?php echo substr($row->deskripsi, 0, 180); ?> <a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>">Selengkapnya</a></p>
            </div>
            <?php
              }
            ?>
        </div>
        <div style="text-align: -webkit-center;margin-top: 23px;">
          <a href="<?php echo site_url('berita'); ?>" class="button_all" style="width: 267px;font: 700 16px/50px "Roboto", sans-serif;">Tampil Semuanya</a>
        </div>
    </div>
</section>
<!-- End Our Latest Blog Area -->

<!-- Our Partners Area -->
<section class="latest_blog_area" style="background: #e3e3e3;">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>ARTIKEL KAJIAN LEMBAGA DEENIYAT</h2>
            <!-- <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
        </div>
        <div class="row latest_blog">
          <?php
            foreach ($artikel as $row) {
              $replace = "/[^a-zA-Z0-9]/";
              $judul = preg_replace($replace, '-', strtolower($row->judul));
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

              $tanggal = $tgl[2].' '.$bulan[$bln].' '.$tgl[0];

          ?>
          <div class="col-md-4 col-sm-6 blog_content">
              <img src="<?php echo $row->thumb; ?>" alt="" style="width: 100%; height: 200px">
              <a href="<?php echo site_url('artikels/id/'.$row->id.'/'.$judul.'.html'); ?>" class="blog_heading"><?php echo $row->judul; ?></a>
              <h4><small>Penulis  </small><a href="#"><?php echo $row->penulis; ?></a><span>/</span><small>ON </small> <?php echo $tanggal; ?></h4>
              <p><?php echo substr($row->deskripsi, 0, 180); ?> <a href="<?php echo site_url('artikels/id/'.$row->id.'/'.$judul.'.html'); ?>">Selengkapnya</a></p>
          </div>
          <?php
            }
          ?>
        </div>
        <div style="text-align: -webkit-center;margin-top: 23px;">
          <a href="<?php echo site_url('artikels'); ?>" class="button_all" style="width: 267px;font: 700 16px/50px "Roboto", sans-serif;">Tampil Semuanya</a>
        </div>
    </div>
</section>
<!-- End Our Partners Area -->
