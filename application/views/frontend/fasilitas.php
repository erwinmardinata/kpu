<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Fasilitas Deeniyat</h2>
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#" class="active">Fasilitas</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- blog-2 area -->
<section class="blog_tow_area">
    <div class="container">
       <div class="row blog_tow_row">
            <?php
              foreach($data as $row) {
            ?>
            <div class="col-md-4 col-sm-6" style="text-align: center">
                <img src="<?php echo $row->foto; ?>" alt="<?php echo $row->judul; ?>" style="width: 100%; height: 200px">
                <h4 style="margin: 17px 0;"><?php echo $row->judul; ?></h4>
                <p style="margin-bottom: 35px"><?php echo $row->deskripsi; ?></p>
            </div>
            <?php
              }
            ?>
       </div>
       <div>
       </div>
    </div>
</section>
<!-- End blog-2 area -->
