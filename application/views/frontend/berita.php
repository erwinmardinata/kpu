<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Berita Deeniyat</h2>
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#" class="active">Berita</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- blog-2 area -->
<section class="blog_tow_area">
    <div class="container">
       <div class="row blog_tow_row">
            <?php
              foreach($berita as $row) {
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
            <div class="col-md-4 col-sm-6">
                <div class="renovation">
                    <img src="<?php echo $row->thumb; ?>" alt="<?php echo $row->judul; ?>" style="width: 100%; height: 200px">
                    <div class="renovation_content">
                        <!-- <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a> -->
                        <a class="tittle" href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>"><?php echo $row->judul; ?></a>
                        <div class="date_comment">
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $tanggal; ?></a>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row->hits; ?></a>
                        </div>
                        <p><?php echo substr($row->deskripsi, 0, 100); ?>...</p>
                    </div>
                </div>
            </div>
            <?php
              }
            ?>
       </div>
       <div>
         <?php echo $halaman; ?>
       </div>
    </div>
</section>
<!-- End blog-2 area -->
