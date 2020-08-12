<style>
.fancybox-slide--iframe .fancybox-content {
    width  : 100%;
    height : 800px;
    max-width  : 80%;
    max-height : 80%;
    margin: 0;
}
.node {
  width: 273px;
}
.node >img {
  width: 64px;
  height: 80px;
}
</style>
<div>
	<div style="background-color: rgba(0,0,0,0.5);">
		<div class="container">
			<div class="container-konten">
				<div class="row">
					<div class="col-md-12">
            <h1 class="header-content">PROFIL</h1>
						<ol class="breadcrumb">
						  <li class="breadcrumb-item">
							<a href="#">Beranda</a>
						  </li>
						  <li class="breadcrumb-item">
							<a href="#">Profil</a>
						  </li>
						  <li class="breadcrumb-item active">Data Pegawai</li>
						</ol>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="background-color: #FFF; padding: 25px 0;">
	<div class="container">
		<div class="container-konten">
			<div class="row">
        <div class="col-md-4">
					<div style="border-right: 1px solid #f6f6f6;border-bottom: 1px solid #f6f6f6;margin-bottom: 17px">
	          <div class="list-group" style="text-align: left;margin-bottom: 12px;">
	            <div style="font-family: bold, sans-serif, Arial;font-weight: Bold;font-size: 19px;padding-left: 18px;margin-bottom: 12px;">
	              PROFIL
	            </div>
							<?php
								foreach($data as $row):
									$replace = "/[^a-zA-Z0-9]/";
									$judul = preg_replace($replace, '-', strtolower($row->judul));

							?>
								<a style="font-family: Roboto-Regular;font-size: 15px;line-height: 20px;border: 0;" href="<?php echo site_url('profil/index/'.$row->id.'/'.$judul.'.html'); ?>" class="list-group-item download-file list-group-item-action judul-event <?php echo $row->judul==$detail->judul?"active":""; ?>">
	                <i class="fa fa-angle-double-right" aria-hidden="true" style="color: #007bff;font-weight: Bold"></i> &nbsp;&nbsp;&nbsp;<?php echo $row->judul; ?>
								</a>
							<?php endforeach; ?>
              <a style="font-family: Roboto-Regular;font-size: 15px;line-height: 20px;border: 0;" href="<?php echo site_url('profil/pegawai/struktur'); ?>" class="list-group-item download-file list-group-item-action judul-event">
								<i class="fa fa-angle-double-right" aria-hidden="true" style="color: #007bff;font-weight: Bold"></i> &nbsp;&nbsp;&nbsp;Struktur Organisasi
							</a>
							<a style="font-family: Roboto-Regular;font-size: 15px;line-height: 20px;border: 0;" href="<?php echo site_url('profil/pegawai/data'); ?>" class="list-group-item download-file list-group-item-action judul-event active">
								<i class="fa fa-angle-double-right" aria-hidden="true" style="color: #007bff;font-weight: Bold"></i> &nbsp;&nbsp;&nbsp;Data Pegawai
							</a>
						</div>
					</div>

        </div>
				<div class="col-md-8">
					<h1 class="title-header">Data Pegawai</h1>
					<div class="tanggal-content">
					</div>
					<div class="value-content">
            <table class="table table-bordered table-hover">
  						<thead>
  							<tr class="bg-primary" style="cbackground: #00d631">
  								<th width="5%">No</th>
                  <th>Nama</th>
  								<th>Jabatan</th>
  								<th width="20%">Aksi</th>
  							</tr>
  						</thead>
  						<tbody>
  						<?php
  							foreach($detail as $no => $row):
  						?>
  							<tr>
  								<td><?php echo ++$no; ?></td>
                  <td><?php echo $row->nama; ?></td>
  								<td><?php echo $row->jabatan; ?></td>
  								<td>
                    <a data-fancybox data-type="iframe" data-src="<?php echo site_url('Profil/profil_pegawai/'.$row->id); ?>" class="btn btn-danger btn-block" style="font-size: 11px;border-radius: 0;" href="javascript:;">Lihat</a>
  								</td>
  							</tr>
  						<?php endforeach; ?>
  						</tbody>
  					</table>
  					<br>
            <!-- <div class="chart" id="basic-example" style="mahrgin-top: -200px"></div> -->
            <!-- <div style="background: #DDD; padding: 12px 0;">
            <div class="hv-container">
                <div class="hv-wrapper">


                    <div class="hv-item">
                      <?php
                      foreach($detail as $row):
                        foreach($detail as $list):
                      ?>
                        <?php if($list->parent == NULL || $list->parent == '') { ?>
                          dsdsd<br>
                        <?php } else if($list->parent != NULL || $list->parent != '') {
                                  if($list->parent == $row->id) {
                          ?>
                            jlkj
                        <?php
                                }
                              }
                      ?>



                        <?php endforeach; ?>
                      <?php endforeach; ?>
                    </div>

                </div>
              </div>
            </div> -->

					</div>
					<div class="mu-blog-share">
						<ul class="mu-social-media mu-blog-share-nav" style="padding-left: 0; margin-bottom: 7px;">
							<li><h3>Share on :</h3></li>
							<li><a href="http://www.facebook.com/sharer.php?u=<?php //echo site_url('berita/id/'.$berita->id.'/'.$judul.'.html'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a class="mu-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="mu-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a class="mu-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a class="mu-youtube" href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
					<div id="fb-root"></div>
					<div class="fb-comments" data-href="<?php //echo site_url('berita/id/'.$berita->id); ?>" data-width="330px" data-numposts="10"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
    $(document).ready(function(){
        $('[data-fancybox]').fancybox({
        	toolbar  : false,
        	smallBtn : false,
        	iframe : {
        		preload : false
        	}
        })
    });
</script>
