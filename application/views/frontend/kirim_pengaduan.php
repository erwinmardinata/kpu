<div class="about">
  <div class="container">
    <h2 style="text-align: center;margin-bottom: 47px;font-weight: bold">KIRIM PENGADUAN </h2>
    <div class="col-md-8 col-md-offset-2" style="text-align: left;">
      <div style="color: #000">
        <form  method="post" action="<?php echo site_url('pengaduan/kirim'); ?>" role="form" class="contactForm" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="nama_pengadu" class="form-control" id="name" placeholder="Nama Pengadu" data-rule="minlen:4"
              data-msg="Please enter at least 4 chars" required />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email"
              data-msg="Please enter a valid email" required />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="judul_pengaduan" id="subject" placeholder="Judul Pengaduan" data-rule="minlen:4"
              data-msg="Please enter at least 8 chars of subject" required />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="file" class="form-control" name="foto" id="subject" placeholder="Foto" data-rule="minlen:4"
              data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
            <small>Upload Foto jika ada</small>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="isi" rows="5" data-rule="required" data-msg="Please write something for us"
              placeholder="Isi Pengaduan" required></textarea>
            <div class="validation"></div>
          </div>
          <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg" required="required">Kirim Pengaduan</button></div>
        </form>
      </div>
    </div>
  </div>
</div>
