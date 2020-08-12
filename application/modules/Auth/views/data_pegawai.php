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
      	<div class="col-md-12">
          <table class="table table-bordered" style="font-size:10px">
            <thead>
              <tr class="bg-primary">
                <th>No.</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Jenis Kelamin</th>
                <th>Pangkat/Golongan</th>
                <th>Instansi</th>
                <th>Jenjang</th>
                <th>Tempat Kuliah</th>
                <th>Nomor SK</th>
                <th>Tanggal SK</th>
                <th>Penganggaran</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $cek = $this->db->get('pegawai_tugas_belajar')->result();
                $no=1;
                foreach($cek as $row):
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->nip; ?></td>
                <td><?php echo $row->jenis_kelamin; ?></td>
                <td><?php echo $row->pangkat_gol; ?></td>
                <td><?php echo $row->instansi; ?></td>
                <td><?php echo $row->jenjang; ?></td>
                <td><?php echo $row->tempat_kuliah; ?></td>
                <td><?php echo $row->no_sk; ?></td>
                <td><?php echo $row->tgl_sk; ?></td>
                <td><?php echo $row->penganggaran; ?></td>
              </tr>
              <?php
                endforeach;
              ?>
              <?php
                $cek2 = $this->db->get('data_pegawai')->result();
                foreach($cek2 as $row):
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->nip; ?></td>
                <td><?php echo $row->jenis_kelamin; ?></td>
                <td><?php echo $row->pangkat_gol; ?></td>
                <td><?php echo $row->instansi; ?></td>
                <td><?php echo $row->jenjang_pendidikan.' '.$row->pendidikan_ambil; ?></td>
                <td><?php echo $row->universitas; ?></td>
                <td><?php echo $row->no_sk; ?></td>
                <td><?php echo $row->tanggal_sk; ?></td>
                <td><?php echo $row->penganggaran; ?></td>
              </tr>
              <?php
                endforeach;
              ?>
            </tbody>
          </table>
        </div>
    	</div>
    </div>

  </body>
</html>
