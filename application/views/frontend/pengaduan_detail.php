<div class="about">
  <div class="container">
    <h2 style="text-align: center;margin-bottom: 47px;font-weight: bold">DETAIL PENGADUAN </h2>
    <div class="col-md-8 col-md-offset-2" style="text-align: left;">
      <div style="color: #000">
        <div style="padding-bottom: 16px;border-bottom: 1px solid #B0B0B0;margin-bottom: 16px;">
          <div style="font-size: 15px;font-weight: bold;">
            <?php echo $data->judul_pengaduan; ?>
          </div>
          <div style="font-size: 12px;color: #666565;">
            <i class="fa fa-user" aria-hidden="true"></i>
            <?php echo $data->nama_pengadu; ?>
            -
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <?php echo $data->tanggal; ?>
          </div>
          <div style="margin-top: 12px;">
            <img src="https://awsimages.detik.net.id/community/media/visual/2019/05/28/2b840d49-2144-4bf7-87a6-4ac2f2c4a5f8_169.jpeg?w=780&q=90" style="width: 100%; margin-bottom: 12px">
            <?php echo $data->isi; ?>
            <div style="font-size: 13px;font-weight: bold;padding: 12px 0;">
              Tanggapan :
            </div>
            <div>
              <?php
                $cek = $this->db->where('id_pengaduan', $data->id)->get('balas_pengaduan')->result();
                if($cek) {
                  foreach ($cek as $row) {
              ?>
              <div class="alert alert-success" role="alert">
                <?php echo $row->balasan; ?>
              </div>
              <?php
                  }
                } else {
              ?>
              <div class="alert alert-warning" role="alert">
                Belum ada tanggapan
              </div>
              <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
	echo $this->session->flashdata('notif');
?>
