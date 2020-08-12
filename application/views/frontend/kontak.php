<?php

	$profil_web = $this->db->get('profil_web')->row();

?>
<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>KONTAK KAMI</h2>
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#" class="active">Kontak Kami</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- Map -->
<div class="contact_map">
    <iframe src="<?php echo $profil_web->googlemap; ?>"></iframe>
</div>
<!-- End Map -->

<!-- All contact Info -->
<section class="all_contact_info">
    <div class="container">
        <div class="row contact_row">
            <div class="col-sm-6 contact_info">
                <h2>Kontak Kami</h2>
                <p>
                  <?php echo $profil_web->deskripsi; ?>
                </p>
                <div class="location">
                    <div class="location_laft">
                        <a class="f_location" href="#">Alamat</a>
                        <a href="#">No. Telepon</a>
                        <a href="#">Email</a>
                        <a href="#">Website</a>
                    </div>
                    <div class="address">
                        <a href="#"><?php echo $profil_web->alamat; ?></a>
                        <a href="#"><?php echo $profil_web->telp; ?></a>
                        <a href="#"><?php echo $profil_web->email; ?></a>
                        <a href="#"><?php echo $profil_web->url; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 contact_info send_message">
                <h2>Send Us a Message</h2>
                <form class="form-inline contact_box">
                    <input type="text" class="form-control input_box" placeholder="First Name *">
                    <input type="text" class="form-control input_box" placeholder="Last Name *">
                    <input type="text" class="form-control input_box" placeholder="Your Email *">
                    <input type="text" class="form-control input_box" placeholder="Subject">
                    <input type="text" class="form-control input_box" placeholder="Your Website">
                    <textarea class="form-control input_box" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn-default">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End All contact Info -->
