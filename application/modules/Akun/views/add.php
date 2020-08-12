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
<form method="POST" action="<?php echo site_url('Users/insert'); ?>">
  <div class="row">
	<!-- left column -->
	<div class="col-md-12">
	  <!-- general form elements -->
	  <div class="box box-primary">
		<div class="box-header with-border">
		  <h3 class="box-title"></h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
          <?php echo $this->session->flashdata('message'); ?>
		  <div class="box-body">
      <div class="col-md-6">
  			<div class="form-group">
  			  <label for="exampleInputEmail1">Nama</label>
  			  <input type="text" name="nama" value="<?php echo $this->session->flashdata('nama'); ?>" class="form-control" placeholder="Nama" required>
        </div>
  		</div>
      <div class="col-md-6">
        <div class="form-group">
  			  <label for="exampleInputEmail1">Email</label>
  			  <input type="text" name="email" value="<?php echo $this->session->flashdata('email'); ?>" class="form-control" placeholder="Email" required>
        </div>
			</div>
      <div class="col-md-6">
        <div class="form-group">
  			  <label for="exampleInputEmail1">Password</label>
  			  <input type="password" name="password" value="<?php echo $this->session->flashdata('password'); ?>" class="form-control" placeholder="Password" required>
        </div>
			</div>
      <div class="col-md-6">
        <div class="form-group">
  			  <label for="exampleInputEmail1">Instansi</label>
  			  <input type="text" name="instansi" value="<?php echo $this->session->flashdata('instansi'); ?>" class="form-control" placeholder="Instansi" required>
        </div>
			</div>
      <div class="col-md-6">
        <div class="form-group">
  			  <label for="exampleInputEmail1">Hak Akses</label>
          <select name="hak_akses" class="form-control" required>
  				<option value="">-</option>
  				<option value="1">Superadmin</option>
  				<option value="2">Admin</option>
          </select>
        </div>
			</div>
      <div class="col-md-6">
  			<div class="form-group">
  			  <label for="exampleInputEmail1">Status</label>
  			  <select name="status" class="form-control" required>
  				<option value="">-</option>
  				<option value="1">Aktif</option>
  				<option value="0">Tidak Aktif</option>
  			  </select>
        </div>
			</div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Foto*</label>
          <div id="image-preview">
            <label for="image-upload" id="image-label">Choose File</label>
            <input type="file" name="foto" id="image-upload" />
          </div>
        </div>
      </div>
      <div class="col-md-12">
  			<div class="box-footer">
  				<a href="<?php echo site_url('Users'); ?>" class="btn btn btn-danger">
    			  <i class="fa fa-angle-double-left"></i> Back</a>
  			  <button type="submit" class="btn btn-primary">Simpan</button>
  			  <button type="reset" class="btn btn-warning">Batal</button>
        </div>
      </div>
			</div>

		  </div>
		  <!-- /.box-body -->

	  </div>
	  <!-- /.box -->

	</div>

	</div>
	<!--/.col (left) -->
  </div>
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
