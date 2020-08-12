<style type="text/css">
#image-preview {
  width: 320px;
  height: 320px;
  position: relative;
  overflow: hidden;
  background-color: #ffffff;
  color: #ecf0f1;
	border: 1px solid #ddd;
}
#image-preview input {
  line-height: 200px;
  font-size: 200px;
  position: absolute;
  opacity: 0;
  z-index: 10;
}
#image-preview label {
  position: absolute;
  z-index: 5;
  opacity: 0.8;
  cursor: pointer;
  background-color: #bdc3c7;
  width: 150px;
  height: 50px;
  font-size: 19px;
  line-height: 50px;
  text-transform: uppercase;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  text-align: center;
}
</style>

<script type="text/javascript">
$(document).ready(function() {
  $.uploadPreview({
    input_field: "#image-upload",
    preview_box: "#image-preview",
    label_field: "#image-label"
  });
});
</script>

<section class="content-header">
  <h1>
	Users
	<small>Tambah</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li><a href="<?php echo site_url('Users'); ?>">Users</a></li>
	<li class="active">Tambah Users</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<form method="POST" action="<?php echo site_url('Users/insert'); ?>" enctype="multipart/form-data">
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
                <div class="col-sm-3"><!--left col-->


                  <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
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
                                        <input type="text" class="form-control" name="nama" required id="first_name" placeholder="Nama" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">NIP</label>
                                        <input type="text" class="form-control" name="nip" id="first_name" placeholder="NIP" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">*email</label>
                                        <input type="email" class="form-control" name="email" required id="first_name" placeholder="Email" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">*Password</label>
                                        <input type="password" class="form-control" name="password" required id="first_name" placeholder="Password" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">*Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan" required id="first_name" placeholder="Jabatan" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">*Instansi</label>
                                        <input type="text" class="form-control" name="instansi" required id="first_name" placeholder="Instansi" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" id="first_name" placeholder="Tempat Lahir" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir" id="first_name" placeholder="Tanggal Lahir" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                          <option value="">-</option>
                                          <option value="Laki-laki">Laki-laki</option>
                                          <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">Nomor Telepon/HP</label>
                                        <input type="text" class="form-control" name="telp" id="first_name" placeholder="Telepon" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12" style="margin-bottom: 15px;">
                                        <label for="first_name">Alamat</label>
                                        <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">Hak Akses*</label>
                                        <select class="form-control" name="hak_akses" required>
                                          <option value="">-</option>
                                  				<option value="1">Superadmin</option>
                                  				<option value="2">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6" style="margin-bottom: 15px;">
                                        <label for="first_name">Status*</label>
                                        <select class="form-control" name="status" required>
                                          <option value="">-</option>
                                  				<option value="1">Aktif</option>
                                  				<option value="0">Tidak Aktif</option>
                                        </select>
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
                                        <button type="reset" class="btn btn-sm btn-danger">
                                          <i class="fa fa-ban"></i> Reset</button>
                                      </div>
                                </div>


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

</form>
  <!-- /.row -->
</section>
<!-- /.content -->
<script type='text/javascript'>
var editor = CKEDITOR.replace('content');
// CKFinder.setupCKEditor(editor, 'ckfinder/');
</script>

<?php
	echo $this->session->flashdata('notif');
	echo $this->session->flashdata('audio');
?>
