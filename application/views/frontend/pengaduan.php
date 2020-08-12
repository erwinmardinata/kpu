<div class="about">
  <div class="container">
    <h2 style="text-align: center;margin-bottom: 47px;font-weight: bold">PENGADUAN </h2>
    <div class="col-md-8 col-md-offset-2" style="text-align: left;">
      <div style="margin-bottom: 12px;text-align:right">
        <a href="<?php echo site_url('pengaduan/send'); ?>" class="btn btn-primary">Buat Pengaduan</a>
      </div>
      <?php
        foreach($data as $row) {
      ?>
      <div style="color: #000">
        <div style="padding-bottom: 16px;border-bottom: 1px solid #B0B0B0;margin-bottom: 16px;">
          <div style="font-size: 15px;font-weight: bold;">
            <a href="<?php echo site_url('pengaduan/id/'.$row->id); ?>"><?php echo $row->judul_pengaduan; ?></a>
          </div>
          <div style="font-size: 12px;color: #666565;">
            <i class="fa fa-user" aria-hidden="true"></i>
            <?php echo $row->nama_pengadu; ?>
            -
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <?php echo $row->tanggal; ?>
          </div>
          <div style="margin-top: 12px;">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <?php
                    if($row->foto == NULL) {
                      $link = "https://www1-media.acehprov.go.id/media/images/acehprov.png";
                    } else {
                      $link = base_url('assets/image/'.$row->foto);
                    }
                  ?>
                  <img class="media-object" src="<?php echo $link; ?>" alt="<?php echo $row->judul_pengaduan;; ?>" style="width: 150px">
                </a>
              </div>
              <div class="media-body">
                  <?php echo substr($row->isi, 0, 200); ?>
              </div>
              <div style="text-align: right">
                <?php
                  $cek = $this->db->where('id_pengaduan', $row->id)->get('balas_pengaduan')->result();
                ?>
                <span class="badge badge-warning"><?php echo COUNT($cek); ?> Tanggapan</span>
              </div>
            </div>
            <!-- <img src="https://awsimages.detik.net.id/community/media/visual/2019/05/28/2b840d49-2144-4bf7-87a6-4ac2f2c4a5f8_169.jpeg?w=780&q=90" style="width: 100%; margin-bottom: 12px"> -->
            <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
          </div>
        </div>
      </div>
      <?php } ?>
      <div>
        <?php
          echo $halaman;
        ?>
      </div>
    </div>
  </div>
</div>
<?php
	echo $this->session->flashdata('notif');
?>
