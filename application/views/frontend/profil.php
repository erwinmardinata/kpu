<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>PROFIL</h2>
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#" class="active">Profil</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- About Us Area -->
<section class="about_us_area row">
    <div class="container">
        <!-- <div class="tittle wow fadeInUp">
            <h2>ABOUT US</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div> -->
        <div class="row about_row">
            <div class="col-md-5 col-sm-6 about_client about_pages_client">
                <img src="<?php echo $tentang->foto; ?>" alt="" style="width: 100%">
            </div>
            <div class="who_we_area col-md-7 col-sm-6">
                <div class="subtittle">
                    <h2><?php echo $tentang->judul; ?></h2>
                </div>
                <p>
                  <?php echo $tentang->isi; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End About Us Area -->

<!-- Our Partners Area -->
<section class="our_partners_area">
    <div class="book_now_aera">
        <div class="container">
            <div class="row book_now">
                <div class="col-md-10 booking_text">
                  <h4>Lulusan pesantren tidak cuma bisa jadi guru ngaji ataupun kyai! Tapi juga bisa menjadi kalangan berdasi dan pengusaha yang mandiri.</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Partners Area -->

<!-- Our Features Area -->
<section class="our_feature_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>Visi dan Misi</h2>
            <!-- <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
        </div>
        <div class="feature_row row">
            <div class="col-md-6 feature_img">
              <div class="subtittle">
                  <h2>VISI</h2>
                  <h5 style="line-height: 30px;"><?php echo $visi->isi; ?></h5>
              </div>
            </div>
            <div class="col-md-6 feature_content">
                <div class="subtittle">
                    <h2>MISI</h2>
                    <!-- <h5>There are many variations of passages of Lorem Ipsum available.</h5> -->
                </div>
                <?php
                  foreach($misi as $row) {
                ?>
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <i class="<?php echo $row->icon; ?>" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="#"><?php echo $row->judul; ?></a>
                        <p><?php echo $row->deskripsi; ?></p>
                    </div>
                </div>
                <?php
                  }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- End Our Features Area -->

<!-- Our Partners Area -->
<section class="our_partners_area">
    <div class="book_now_aera">
        <div class="container">
            <div class="row book_now">
                <div class="col-md-10 booking_text">
                    <h4>Karena mengingat hafalan kitab tidak mudah, lebih mudah mengingat kenangan mantan di masa lalu. Nggak diingat juga dia udah nongol sendiri.</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Partners Area -->


<!-- Our Team Area -->
<section class="our_team_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>PIMPINAN DAN STAF</h2>
            <!-- <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
        </div>
        <div class="row team_row">
            <?php
              foreach($pegawai as $row) {
            ?>
            <div class="col-md-3 col-sm-6 wow fadeInUp">
               <div class="team_membar">
                    <img src="<?php echo $row->foto; ?>" alt="">
                    <div class="team_content">
                        <ul>
                            <li><a href="<?php echo $row->facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $row->instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> -->
                        </ul>
                        <a href="#" class="name"><?php echo $row->nama; ?></a>
                        <h6><?php echo $row->jabatan; ?></h6>
                    </div>
               </div>
            </div>
            <?php
              }
            ?>
        </div>
    </div>
</section>
<!-- End Our Team Area -->
