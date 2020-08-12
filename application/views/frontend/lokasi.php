<style type="text/css">
    #mapid { height: 450px; }
</style>
<div class="about">
  <div class="container">
    <h2 style="text-align: center;margin-bottom: 47px;font-weight: bold">DETAIL LOKASI <?php echo strtoupper($data->nama); ?> </h2>
    <div class="col-md-12" style="text-align: left;">
      <div>
        <div id="mapid"></div>
      </div>
    </div>
    <div class="col-md-12" style="color: #000">
      <div class="gallery">
        <div class="text-center">
          <h2>Foto</h2>
        </div>
        <div class="container">
          <?php
            $cek = $this->db->where('id_lokasi', $data->id)->get('gambar_lokasi')->result();
            foreach($cek as $row) {
          ?>

            <div class="col-md-4">
            <figure class="effect-marley">
              <img src="<?php echo $row->gambar; ?>" title="<?php echo $data->nama; ?>" class="img-responsive" style="width: 100%; height: 250px" />
              <figcaption>
                <h4><?php echo $data->nama; ?></h4>
                <!-- <p>Marley tried to convince her but she was not interested.</p> -->
              </figcaption>
            </figure>
          </div>
          <?php
            }
          ?>

        </div>
      </div>

    </div>
  </div>
</div>
<hr>
<div class="about">
  <div class="container">
    <div class="text-center">
      <h2>DESKRIPSI </h2>
      <div class="col-md-10 col-md-offset-1" style="color: #000">
        <p>
          <?php echo $data->deskripsi; ?>
        </p>
        <div>
          Alamat : <?php echo $data->deskripsi; ?>
        </div>
        <div>
          Telepon : <?php echo $data->kontak; ?>
        </div>
        <div>
          Jenis Sampah : <?php echo $data->jenis_sampah; ?>
        </div>
      </div>


    </div>
  </div>
</div>
<hr>

<script type="text/javascript">

    var map = L.map('mapid').setView([<?php echo $data->lat; ?>, <?php echo $data->long; ?>], 15);
    var base_url = "<?=base_url()?>";
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var myFeatureGroup = L.featureGroup().addTo(map).on("click", groupClick);
    var bangunanMarker;

    var icon_ = L.icon({
      iconUrl: '<?php echo $data->icon; ?>',
      iconSize: [50, 50]
    });
    // var info_bidang = "<h5 style='text-align: center;font-weight:bold'>"+ data[i].nama +"</h5>";
    //     info_bidang+="<a><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Jakarta_slumlife71.JPG/220px-Jakarta_slumlife71.JPG' /></a>";
    //     info_bidang+="<div style='text-align: center;padding: 12px'><a href='<?php echo site_url('lokasi/id') ?>'>Detail</a></div>";
    //
    // bangunanMarker = L.marker([v_lat, v_long], {icon:icon_})
    //                   .addTo(myFeatureGroup)
    //                   .bindPopup(info_bidang);
    // bangunanMarker.id = data[i].id;
    bangunanMarker = L.marker([<?php echo $data->lat; ?>,<?php echo $data->long; ?>],{icon:icon_}).addTo(map)
                      .bindPopup("<?php echo $data->nama; ?>")
                      .openPopup();
    function groupClick(event) {
      // alert('Clicked on marker' + event.layer.id);
    }

</script>
