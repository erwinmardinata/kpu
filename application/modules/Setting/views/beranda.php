<section class="content-header">
  <h1>
	Setting
	<small>Daftar Data</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Setting</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
	<div class="col-md-12">

	  <div class="box">
		<div class="box-header">
		  <h3 class="box-title">Setting</h3>
		</div>
		<div class="col-md-12">
			<?php echo $this->session->flashdata('message'); ?>
		</div>
		<!-- /.box-header -->
		<div class="box-body">

			<?php echo $this->session->flashdata('message'); ?>
			<form class="form-horizontal form-bordered" method="post" action="<?php echo site_url('Setting/ubah'); ?>">
				<div class="form-group row">
					<label class="control-label text-right col-md-3">Password Lama</label>
					<div class="col-md-8">
            <input type="hidden" name="id" value="<?php echo $this->session->userdata('id'); ?>" class="form-control">
						<input type="password" name="pswdlama" value="" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="control-label text-right col-md-3">Password baru</label>
					<div class="col-md-8">
						<input type="password" name="pswdbaru" value="" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="control-label text-right col-md-3">Ulang Password</label>
					<div class="col-md-8">
						<input type="password" name="ulangpswdbaru" value="" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="control-label text-right col-md-3"></label>
					<div class="col-md-8">
						<button type="reset" class="btn btn-inverse">Cancel</button>
						<button type="submit" class="btn btn-success">Simpan <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
					</div>
				</div>
			</form>


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
