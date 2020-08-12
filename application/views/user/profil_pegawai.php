<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="OPD">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
    <!-- Owl Stylesheets -->

    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery.min.js"></script>
    <title>OPD</title>
  </head>
  <body style="background: #FFF; margin: 0">

    <div style="background: #FFF">
    	<div class="row">
    		<div class="col-md-5">
    			<div style="background: #DDD;text-align: center;height: 470px">
            <img src="<?php echo $data->foto; ?>" alt="<?php echo $data->nama; ?>" style="width: 320px; height:470px;">
    				<!-- <div style="background-image: url('<?php echo $data->foto; ?>'); margin-left: 15%;height: 445px;width: 50%;background-size: 100%;background-position: ccenter;"></div> -->
    			</div>
    		</div>
    		<!-- <div style="width: 116px;height: 469px;position: absolute;background: #fff;-webkit-transform: skew(12deg);-moz-transform: skew(12deg);-o-transform: skew(12deg);transform: skew(12deg);top: 0;right: 47%;margin-top: 55px;">
    			sds
    		</div> -->
        <div class="col-md-7">
    			<div style="padding: 40px">
    				<div style="font-family: Roboto-Light;font-size: 25px;"><?php echo $data->nama; ?></div>
            <?php
              if($data->nip == '-' || $data->nip == "" || $data->nip == NULL) {
              } else {
            ?>
            <div style="font-size: 15px;font-family: Roboto-Bold;color: #495057;">NIP. <?php echo strtoupper($data->nip); ?></div>
            <?php
              }
            ?>
            <div style="font-size: 15px;font-family: Roboto-Bold;color: #495057;"><?php echo strtoupper($data->jabatan); ?></div>
            <?php
              if($data->pangkat_golongan == '-' || $data->pangkat_golongan == "" || $data->pangkat_golongan == NULL) {
              } else {
            ?>
            <div style="font-size: 15px;font-family: Roboto-Bold;color: #495057;">PANGKAT/GOLONGAN : <?php echo strtoupper($data->pangkat_golongan); ?></div>
            <?php
              }
            ?>
    				<div class="row" style="margin-top: 30px;font-size: 14px;">
    					<dt class="col-sm-4">Tempat, Tanggal Lahir</dt>
    						<?php
    							$day = date('D', strtotime($data->tanggal_lahir));
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

    							$tgl = explode("-", $data->tanggal_lahir);
    							$bln = $tgl[1];

    							$tanggal = $tgl[2].' '.$bulan[$bln].' '.$tgl[0];

    						?>
    					<dd class="col-sm-8"><?php echo $data->tempat_lahir.", ".$tanggal; ?></dd>

    					<dt class="col-sm-4">Agama</dt>
    					<dd class="col-sm-8"><?php echo $data->agama; ?></dd>

    					<dt class="col-sm-4">Jenis Kelamin</dt>
    					<dd class="col-sm-8"><?php echo $data->jenis_kelamin; ?></dd>

    					<dt class="col-sm-4">Alamat</dt>
    					<dd class="col-sm-8"><?php echo $data->alamat; ?></dd>

    					<dt class="col-sm-4">Status</dt>
    					<dd class="col-sm-8"><?php echo $data->status_kawin; ?></dd>

    					<dt class="col-sm-4">Nomor Telepon</dt>
    					<dd class="col-sm-8"><?php echo $data->no_hp; ?></dd>

    					<dt class="col-sm-4">Pendidikan Terakhir</dt>
    					<dd class="col-sm-8"><?php echo $data->pendidikan_terakhir; ?></dd>

    				</div>
    				<div style="margin-top: 12px;">
    	               <a href="<?php echo $data->facebook==""?"#":$data->facebook; ?>" style="color: #000"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
    	               <a href="<?php echo $data->twitter==""?"#":$data->twitter; ?>" style="color: #000"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
    	               <a href="<?php echo $data->instagram==""?"#":$data->instagram; ?>" style="color: #000"><i class="fa fa-instagram"></i></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

  </body>
</html>
