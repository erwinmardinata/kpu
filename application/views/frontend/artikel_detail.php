<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>BERITA</h2>
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#" class="active">Detail Berita</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- blog area -->
<section class="blog_all">
    <div class="container">
        <div class="row m0 blog_row">
            <div class="col-sm-8 main_blog">
                <img src="<?php echo $berita->thumb; ?>" alt="<?php echo $berita->judul; ?>" style="width: 100%">
                <div class="col-xs-1 p0">
                   <div class="blog_date">
                     <?php
         							$day = date('D', strtotime($berita->date));
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
         								'01' => 'Jan',
         								'02' => 'Feb',
         								'03' => 'Mar',
         								'04' => 'Apr',
         								'05' => 'Mei',
         								'06' => 'Jun',
         								'07' => 'Jul',
         								'08' => 'Agu',
         								'09' => 'Sep',
         								'10' => 'Okt',
         								'11' => 'Nov',
         								'12' => 'Des'
         							);

         							$tgl = explode("-", $berita->date);
         							$bln = $tgl[1];

         							$tanggal = $dayList[$day].', '.$tgl[2].' '.$bulan[$bln].' '.$tgl[0];

         							// echo $tanggal;

         						?>
                       <a href="#"><?php echo $tgl[2]; ?></a>
                        <a href="#"><?php echo $bulan[$bln]; ?></a>
                   </div>
                </div>
                <div class="col-xs-11 blog_content">
                    <a class="blog_heading" href="#"><?php echo $berita->judul; ?></a>
                    <a class="blog_admin" href="#"><i class="fa fa-user" aria-hidden="true"></i><?php echo $berita->penulis; ?></a>
                    <ul class="like_share">
                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> Dibaca : <?php echo $berita->hits; ?>&nbsp;<span class="badge badge-secondary">Kali</span></a></li>
                    </ul>
                    <?php echo $berita->isi; ?>
                </div>
                <div class="client_text">
                </div>
            </div>
            <div class="col-sm-4 widget_area">
                <div class="resent">
                    <h3>ARTIKEL TERBARU</h3>
                    <?php
                      foreach($berita3 as $row) {
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
                    <div class="media">
                        <div class="media-left">
                            <a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>">
                                <img class="media-object" src="<?php echo $row->thumb; ?>" alt="<?php echo $row->judul; ?>" style="width: 90px;height:50px">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>"><?php echo $row->judul; ?></a>
                            <h6><?php echo $tanggal; ?></h6>
                        </div>
                    </div>
                    <?php
                      }
                    ?>
                </div>
                <div class="resent">
                    <h3>ARTIKEL POPULER</h3>
                    <?php
                      foreach($berita2 as $row) {
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
                    <div class="media">
                        <div class="media-left">
                            <a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>">
                                <img class="media-object" src="<?php echo $row->thumb; ?>" alt="<?php echo $row->judul; ?>" style="width: 90px;height:50px">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>"><?php echo $row->judul; ?></a>
                            <h6><?php echo $tanggal; ?></h6>
                        </div>
                    </div>
                    <?php
                      }
                    ?>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End blog area -->
