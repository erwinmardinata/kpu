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
        <li><a href="#" class="active">Galeri Detail</a></li>
    </ol>
</section>
<!-- End Banner area -->
<!-- Our Featured Works Area -->
<div class="row">
  <div class="container" style="padding: 50px 0">
    <div class="col-md-7">
      <div class="row">
        <?php
          foreach($data as $row) {
        ?>
        <div class="col-md-4">
          <a target="_blank" href="<?php echo $row->foto; ?>" title="<?php echo $row->judul; ?>"  data-fancybox="gallery" data-caption="<?php echo $row->judul; ?>"><img src="<?php echo $row->foto; ?>" style="width: 100%; height: 150px" class="img-thumbnail"></a>
        </div>
        <?php
          }
        ?>
      </div>
    </div>
    <div class="col-md-3">
      <p>
        <?php echo $data[0]->deskripsi; ?>
      </p>
    </div>
  </div>
</div>
<!-- End Our Featured Works Area -->
