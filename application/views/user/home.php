<style>
@media (max-width: 500px) {
  .sambutan {
    display: none;
  }
}

</style>
<div class="containerr">
  <div id="suds-carousel" class="carousel fade-carousel slide" data-ride="carousel" data-interval="6000">
    <?php
      $a = count($slider);
      $b = count($berita);
      $ab = $a + $b;
    ?>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php
          for($x=0; $x<$a; $x++) {?>
          <li data-target="#suds-carousel" data-slide-to="<?php echo $x; ?>" <?php echo $x==0?"class='active'":""; ?>></li>
        <?php
          }
          for($x=$a; $x<$ab; $x++) {?>
          <li data-target="#suds-carousel" data-slide-to="<?php echo $x; ?>"></li>
        <?php } ?>
      </ol>

      <!-- Content -->
      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <?php foreach($slider as $no => $row): ?>
          <!-- Slide 2 -->
          <div class="carousel-item  <?php echo $no==0?"active":""; ?>">
              <div class="carousel-caption" style="width: 100%">
                <div>
                  <!-- <hgroup style="position: absolute;width: 50%;top: 79%;padding: 10px;text-align: left;background-color: rgba(0,0,0, 0.3);">
                      <h1><?php echo $row->judul; ?></h> -->
                      <!-- <a type="button" class="btn btn-primary btn-lg" role="button" href="#attributes">Baca Selengkapnya</a> -->
                  <!-- </hgroup> -->
                </div>
              </div>
              <div class="slide-1" style="background-image: url(<?php echo $row->foto; ?>);"></div>
          </div>

        <?php
              endforeach;
              foreach($berita as $no => $row):
                $replace = "/[^a-zA-Z0-9]/";
                $judul = preg_replace($replace, '-', strtolower($row->judul));

        ?>
          <!-- Slide 2 -->
          <div class="carousel-item">
              <div class="carousel-caption" style="width: 100%">
                <div>
                  <hgroup style="position: absolute;width: 50%;top: 79%;padding: 10px;text-align: left;background-color: rgba(0,0,0, 0.3);">
                      <a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>" style="color: #FFF"><h1 style="color: #FFF"><?php echo $row->judul; ?></h1></a>
                      <!-- <a type="button" class="btn btn-primary btn-lg" role="button" href="#attributes">Baca Selengkapnya</a> -->
                  </hgroup>
                </div>
              </div>
              <div class="slide-1" style="background-image: url(<?php echo $row->thumb; ?>);"></div>
          </div>

        <?php endforeach; ?>
      </div>
  </div>
</div>

<div style="background: #ddd; padding: 35px 0" class="sambutan">
<div class="container">
	<div class="col-sm-10 offset-sm-1">
		<div style="background: #FFF">
      <div class="">
  			<div class="foto-kadis" style="position: absolute">
  				<img src="<?php echo $sambutan->foto; ?>" style="width: 100%;height: 231px;" alt="<?php echo $sambutan->nama; ?>">
  			</div>
  			<div class="sambutan-kadis" style="color: #000;padding: 1vw 2.5vw 1vw 1vw;margin-left: 23%;position: relative;height: 231px;overflow: auto">
  				<div style="font-size: 20px;font-family:  Roboto-Bold;"><?php echo $sambutan->nama; ?></div>
  				<div style="font-family:  Roboto-Bold;border-bottom:  1px solid #ddd;margin-bottom: 0.7vw;font-size:  18px;"><?php echo $sambutan->jabatan; ?></div>
          <div style="font-size: 13px">
            <?php echo $sambutan->isi; ?>
          </div>
  			</div>
      </div>
		</div>
	</div>
</div>
</div>

<div style="background: #FFF;padding: 35px 0">
<div class="container">
	<div class="row">
		<div class="col-md-3 col-costu">
			<div class="list-group" style="margin-bottom: 10px">
				<li class="list-group-item active" style="background:#007bff;border:none"><h5 class="mb-1"><strong><i class="fa fa-id-card" aria-hidden="true"></i> AGENDA KEGIATAN</strong></h5></li>
				<li class="list-group-item" style="padding: 0">
				<!-- <ul class="nav nav-tabs">
					<li class="nav-item nav-item-costum">
					<a class="nav-link active" href="#">OPD</a>
					</li>
					<li class="nav-item nav-item-costum">
					<a class="nav-link" href="#">KABUPATEN</a>
					</li>
				</ul> -->
				</li>
        <div style="max-height: 400px; overflow: auto;">
				<?php
          if(!$agenda) {
        ?>
        <li class="list-group-item">
  				<div class="panel-lowongan" style="text-align:center">
            Agenda Masih Kosong
          </div>
        </li>
        <?php
          } else {
          foreach($agenda as $row):
        ?>
				<li class="list-group-item">
				<div class="panel-lowongan">
					<div class="tanggal-event">
						<?php
              $replace = "/[^a-zA-Z0-9]/";
              $judul = preg_replace($replace, '-', strtolower($row->agenda));

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

						?>&nbsp;
						<i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row->tempat; ?>&nbsp;
					</div>
					<div class="judul-event">
						<a href="<?php echo site_url('agenda/id/'.$row->id.'/'.$judul.'.html'); ?>" style="color: #000"><?php echo $row->agenda; ?></a>
					</div>
				</div>
				</li>
        <?php endforeach; } ?>
        </div>
			</div>
		</div>
		<div class="col-md-9 col-costu">
			<div class="list-group">
				<li class="list-group-item active" style="background:#007bff;border:none"><h5 class="mb-1"><strong><i class="fa fa-newspaper-o" aria-hidden="true"></i> BERITA</strong></h5></li>
				<li class="list-group-item" style="border: 0">
				<div class="row">
					<?php
            if(!$berita) {
          ?>
          <div class="col-md-4" style="padding: 0 20px" style="text-align:center">
            - Berita Belum Ada -
          </div>
          <?php

            } else {

            foreach($berita as $no => $row):
              $replace = "/[^a-zA-Z0-9]/";
              $judul = preg_replace($replace, '-', strtolower($row->judul));

          ?>
					<div class="col-md-4" style="padding: 0 20px">
						<div class="panel-berita" style="margin-bottom: 12px;">
							<div class="panel-thumb1">
								<img src="<?php echo $row->thumb; ?>" class="thumb-berita">
							</div>
							<div class="panel-berita-desk">
								<h5 class="judul-berita"><a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>"><?php echo $row->judul; ?></a></h5>
								<p class="berita-desk">
									<?php echo $row->deskripsi; ?>
								</p>
							</div>
							<div class="selengkapnya">
								<a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>">SELENGKAPNYA <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<?php if($no==2) break; endforeach; } ?>
				</div>
				</li>
			</div>
		</div>
	</div>
</div>
</div>

<div style="background: #ddd; padding: 35px 0">
<div class="container">
	<div class="row">
		<div class="col-md-3  col-costu">
			<div class="list-group" style="color: #FFF">
				<li class="list-group-item bg-danger" style="text-align: center; padding: 25px"><span><strong> Pengaduan Terbaru </strong></span></li>
        <div style="max-height: 470px; overflow: auto;">
          <?php
            if(!$pengaduan) {
          ?>
          <li class="list-group-item">
    				<div class="panel-lowongan" style="text-align:center;color:#000">
              Pengaduan Masih Kosong
            </div>
          </li>
          <?php
            } else {
            foreach($pengaduan as $row):
            $replace = "/[^a-zA-Z0-9]/";
            $judul = preg_replace($replace, '-', strtolower($row->judul_pengaduan));
          ?>
          <li class="list-group-item bg-danger">
            <div class="panel-lowongan">
              <div class="tanggal-pengaduan">
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
                $cek = $this->db->where('id_pengaduan', $row->id)->get('balas_pengaduan')->result()
                ?>&nbsp;
                <i class="fa fa-user" aria-hidden="true"></i> <?php echo $row->nama_pengadu; ?>&nbsp;
                <i class="fa fa-file" aria-hidden="true"></i> <?php echo $row->judul_pengaduan; ?>&nbsp;
                <i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo COUNT($cek); ?>&nbsp;
              </div>
              <div class="deskripsi-pengaduan">
                <p style="font-size: 13px;padding: 7px 0;">
                  <?php echo substr($row->isi, 0, 100); ?>
                </p>
                <a href="<?php echo site_url('pengaduan/id/'.$row->id.'/'.$judul.'.html'); ?>" style="color: #FFF;font-size: 13px">
                  [ Selengkapnya ]
                </a>
              </div>
            </div>
          </li>
          <?php endforeach; } ?>
          <li class="list-group-item">
            <a href="<?php echo site_url('pengaduan'); ?>" class="btn btn-secondary btn-block" style="font-size: 10px;border-radius: 0;">
              <i class="fa fa-send" aria-hidden="true"></i> Kirim Pengaduan
            </a>
            <a href="<?php echo site_url('pengaduan/data'); ?>" class="btn btn-secondary btn-block" style="font-size: 10px;border-radius: 0;">
              <i class="fa fa-list" aria-hidden="true"></i> Daftar Pengaduan
            </a>
          </li>
        </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="list-group">
				<li class="list-group-item active" style="background:#007bff;border:none"><h5 class="mb-1"><strong><i class="fa fa-download" aria-hidden="true"></i> File Data/Download</strong></h5></li>
        <div style="max-height: 493px; overflow: auto;">
          <?php
            if(!$download) {
          ?>
          <a href="#" class="list-group-item download-file list-group-item-action judul-event" style="font-size: 17px">
            Data Masih Kosong
          </a>
          <?php
            } else {
            foreach($download as $row):
            if($row->file=="Klik disini untuk mengupload file download" || $row->file == NULL || $row->file == '') {
              $file = $row->link_file;
            } else if($row->link_file == NULL || $row->link_file == '') {
              $file = $row->file;
            }
          ?>
          <a href="<?php echo $file; ?>" target="_blank" class="list-group-item download-file list-group-item-action judul-event" style="font-size: 17px">
            <?php echo $row->nama; ?>
          </a>
          <?php endforeach; } ?>
          <li class="list-group-item">
            <a href="<?php echo site_url('download'); ?>" class="btn btn-secondary btn-block" style="font-size: 10px;border-radius: 0;">
              <i class="fa fa-eye" aria-hidden="true"></i> Lihat Lebih Banyak
            </a>
          </li>
        </div>
			</div>
		</div>
		<div class="col-md-6">
      <ul class="nav nav-tabs" id="myTab" role="tablist" style="text-align: center">
        <li class="nav-item" style="width: 50%">
          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">VIDEO</a>
        </li>
        <li class="nav-item" style="width: 50%">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">PHOTO</a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row" style="padding: 17px;">
            <?php foreach($video as $no => $row): ?>
            <div class="col-md-6" style="padding: 0">
              <div class="panel-konten" style="margin-bottom: 1px;border: 1px solid #DDD;">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $row->link_video; ?>" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            <?php endforeach; ?>

          </div>
        </div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="row" style="padding: 17px;">
            <?php foreach($foto as $no => $row): ?>
    				<div class="col-md-6" style="margin-bottom: 12px;">
    					<div class="list-group">
    						<a href="<?php echo site_url('galeri_foto/id/'.$row->id_kategori_foto); ?>" title="<?php echo $row->kategori; ?>" class="list-group-item download-file list-group-item-action judul-event" style="padding: 0; min-height: 100px;color:#FFF">
    							<div class="panel-thumb" style="height: auto">
    								<img src="<?php echo $row->foto; ?>" class="thumb-galley">
                    <div style="position: absolute;bottom: 0px;padding: 7px;background: rgba(0,0,0,0.5);width: 100%;"><?php echo $row->kategori; ?></div>
    							</div>
    						</a>
    					</div>
    				</div>
            <?php endforeach; ?>
    			</div>

        </div>
      </div>

      <script>
        $(function () {
          $('#myTab li:last-child a').tab('show')
        })
      </script>
    </div>
	</div>
</div>
</div>

<div style="background: #FFF;padding: 35px 0">
<div class="container">
	<div class="col-md-10 offset-md-1">
		<p class="judul-heading" style="margin-bottom: -12px">LINK TERKAIT</p>
    <div class="owl-carousel owl-theme" style="padding: 45px 0px;">
      <?php foreach($link as $row): ?>
        <a href="<?php echo $row->link; ?>" target="_blank"><img class="item" src="<?php echo $row->foto; ?>" title="<?php echo $row->judul; ?>" /></a>
      <?php endforeach; ?>
    </div>

	</div>
</div>
</div>
<script>
$(document).ready(function() {
  $('.owl-carousel').owlCarousel({
	margin: 30,
	<!-- autoWidth: true, -->
	nav: true,
	loop: true,
	items: 4,
	autoplay:true,
	autoplayTimeout:3000
  })
})
</script>

<div style="background: #ddd;padding: 35px 0">
  <div class="container">
  	<div class="col-md-10 offset-md-1">
  		<p class="judul-heading">SOSIAL MEDIA</p>
  		<div style="text-align: center">
  			<a href="<?php echo $profil_web->facebook; ?>" target="_blank"><img src="<?php echo base_url(); ?>assets/image/fb.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  			<a href="<?php echo $profil_web->twitter; ?>" target="_blank"><img src="<?php echo base_url(); ?>assets/image/tw.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  			<a href="<?php echo $profil_web->instagram; ?>" target="_blank"><img src="<?php echo base_url(); ?>assets/image/ig.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  			<!-- <a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/image/g.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
  			<a href="<?php echo $profil_web->youtube; ?>" target="_blank"><img src="<?php echo base_url(); ?>assets/image/yt.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  		</div>

  	</div>
  </div>
</div>

<div style="padding: 35px 0">
  <div class="container">
  	<div class="col-md-10 offset-md-1">
  		<iframe src="<?php echo $profil_web->googlemap; ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  	</div>
  </div>
</div>
