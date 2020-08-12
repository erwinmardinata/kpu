<section class="content-header">
  <h1>
	Akun Saya
	<small>Data Akun</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Akun Saya</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
  	<div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
    		  <!-- <h3 class="box-title">Data Diri Alumni</h3> -->
    		</div>
    		<!-- <div class="col-md-12">
    			<a href="<?php echo site_url('Pegawai/add'); ?>" class="btn btn-success" style="float: right;margin-right: 12px;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data</a><br><br>
    		</div> -->
    		<div class="col-md-12">
    			<?php echo $this->session->flashdata('message'); ?>
    		</div>
    		<!-- /.box-header -->
    		<div class="box-body">

          <div class="">
              <div class="row">
                <form class="form" action="<?php echo site_url('Akun/update'); ?>" method="post" id="registrationForm" enctype="multipart/form-data">
                <div class="col-sm-3"><!--left col-->


                  <div class="text-center">
                    <?php
                      if($data->foto == "") {
                        $photo = "http://ssl.gstatic.com/accounts/ui/avatar_2x.png";
                      } else {
                        $photo = base_url('assets/image/'.$data->foto);
                      }
                    ?>
                    <img src="<?php echo $photo; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
                      <h6>Upload photo anda...</h6>
                    <input type="file" name="foto" class="text-center center-block file-upload">
                  </div></hr><br>
                </div><!--/col-3-->
              	<div class="col-sm-9">
                    <div class="tab-content">
                      <div class="tab-pane active" id="home">
                              <!-- <form class="form" action="##" method="post" id="registrationForm"> -->
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">*Nama</label>
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $data->id; ?>" required id="first_name" placeholder="Contoh; 1301013003" title="enter your first name if any.">
                                        <input type="text" class="form-control" name="nama" value="<?php echo $data->nama; ?>" required id="first_name" placeholder="Nama" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">NIP</label>
                                        <input type="text" class="form-control" name="nip" value="<?php echo $data->nip; ?>" id="first_name" placeholder="NIP" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">*email</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $data->email; ?>" readonly required id="first_name" placeholder="Contoh; 1301013003" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">*Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan" value="<?php echo $data->jabatan; ?>" required id="first_name" placeholder="Jabatan" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12" style="margin-bottom: 15px;">
                                        <label for="first_name">*Instansi</label>
                                        <input type="text" class="form-control" name="instansi" value="<?php echo $data->instansi; ?>" required id="first_name" placeholder="Instansi" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $data->tempat_lahir; ?>" required id="first_name" placeholder="Tempat Lahir" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $data->tanggal_lahir; ?>" required id="first_name" placeholder="Tanggal Lahir" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                          <option value="">-</option>
                                          <option <?php echo $data->jenis_kelamin=="Laki-laki"?"selected":""; ?> value="Laki-laki">Laki-laki</option>
                                          <option <?php echo $data->jenis_kelamin=="Perempuan"?"selected":""; ?> value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">Nomor Telepon/HP</label>
                                        <input type="text" class="form-control" name="telp" value="<?php echo $data->telp; ?>" required id="first_name" placeholder="Telepon" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12" style="margin-bottom: 15px;">
                                        <label for="first_name">Alamat</label>
                                        <textarea class="form-control" name="alamat" placeholder="Alamat"><?php echo $data->alamat; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12" style="margin-bottom: 15px;">
                                      <hr>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12" style="margin-bottom: 15px;">
                                      <div class="card-footer">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                          <i class="fa fa-dot-circle-o"></i> Submit</button>
                                        <a href="<?php echo site_url('Akun'); ?>" class="btn btn-sm btn-danger">
                                          << Back</a>
                                      </div>
                                </div>

                        	</form>

                        <hr>

                       </div><!--/tab-pane-->

                  </div><!--/col-9-->
              </div><!--/row-->

    		</div>
  		<!-- /.box-body -->
  	  </div>
  	  <!-- /.box -->

  	</div>
	<!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
<?php
	echo $this->session->flashdata('notif');
	echo $this->session->flashdata('audio');
?>
<script>
$(document).ready(function() {

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>
