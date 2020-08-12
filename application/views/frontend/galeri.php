<style>
.featured_works:after {
    content: "";
    position: absolute;
    top: 0;
    background-color: rgba(255, 255, 255, 0.9);
    left: 0;
    right: 0;
    bottom: 0;
    display: block;
    z-index: -1;
}
</style>
<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>GELERI DEENIYAT</h2>
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#" class="active">Galeri</a></li>
    </ol>
</section>
<!-- End Banner area -->


<!-- Our Featured Works Area -->
<div class="row">
  <div class="container" style="padding: 50px 0">
    <section class="featured_works row" data-stellar-background-ratio="0.3" style="padding-bottom: 0">
        <div class="featured_gallery" style="padding-top: 0">
            <?php
              foreach($data as $row) {
            ?>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="<?php echo $row->foto; ?>" alt="<?php echo $row->kategori; ?>">
                <div class="gallery_hover">
                    <h4><?php echo $row->kategori; ?></h4>
                    <a href="<?php echo site_url('galeri/id/'.$row->id_kategori_foto); ?>">VIEW</a>
                </div>
            </div>
            <?php
              }
            ?>
        </div>
    </section>
  </div>
</div>
<!-- End Our Featured Works Area -->
