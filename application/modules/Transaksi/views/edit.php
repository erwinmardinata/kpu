<script type="text/javascript">
function openKCFinder(field) {
    window.KCFinder = {
        callBack: function(url) {
            field.value = url;
            window.KCFinder = null;
        }
    };
    window.open('<?php echo base_url('assets'); ?>/kcfinder/browse.php?type=files&dir=files/public', 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
    );
}
</script>
<section class="content-header">
  <h1>
	<?php echo $judul; ?>
	<small>Edit</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li><a href="<?php echo site_url($url); ?>"><?php echo $judul; ?></a></li>
	<li class="active">Edit</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<form method="POST" action="<?php echo site_url($url.'/update'); ?>">
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
		  <div class="box-body">
        <div class="row">
  			  <div class="col-sm-12">
						<div class="form-group">
    				  <label for="name">OPD</label>
							<input type="hidden" name="id" value="<?php echo $data->id; ?>" class="form-control" required>
							<select class="form-control" name="id_opd" required>
								<option value="">-</option>
								<?php
									foreach($kategori as $row) {
								?>
									<option <?php echo $row->id==$data->id_opd?"selected":""; ?> value="<?php echo $row->id; ?>"><?php echo $row->nama; ?></option>
								<?php
									}
								?>
							</select>
    				</div>
            <div class="form-group">
    				  <label for="name">Kategori</label>
							<select class="form-control" name="id_kategori_buku" required>
								<option value="">-</option>
								<?php
									foreach($kategori as $row) {
								?>
									<option <?php echo $row->id==$data->id_kategori_buku?"selected":""; ?> value="<?php echo $row->id; ?>"><?php echo $row->nama; ?></option>
								<?php
									}
								?>
							</select>
    				</div>
						<div class="form-group">
	  				  <label for="name">Judul Buku</label>
							<input type="text" name="nama" value="<?php echo $data->nama; ?>" class="form-control" required>
	  				</div>
	  				<div class="form-group">
	  				  <label for="name">File</label>
							<input type="text" rreadonly="readonly" name="file" class="form-control" onclick="openKCFinder(this)"
	  						value="<?php echo $data->file; ?>" style="width:100%;cursor:pointer" placeholder="Klik disini untuk mengupload file download" />
	  				</div>
	  				<div class="form-group">
	  				  <label for="name">Link File</label>
							<input type="text" name="link_file" value="<?php echo $data->link_file; ?>" class="form-control" placeholder="http://example.com">
	  				</div>
	          <p>
	            * Isi salah satu Form File atau Form Link File
	          </p>
            <div class="card-footer">
              <a href="<?php echo site_url($url); ?>" class="btn btn-sm btn-warning">
        			  <i class="fa fa-angle-double-left"></i> Back</a>
      			<button type="submit" class="btn btn-sm btn-primary">
      			  <i class="fa fa-dot-circle-o"></i> Submit</button>
      			<button type="reset" class="btn btn-sm btn-danger">
      			  <i class="fa fa-ban"></i> Reset</button>
      		  </div>
  			  </div>
  			</div>
		  </div>
		  <!-- /.box-body -->

	  </div>
	  <!-- /.box -->

	</div>
	<!--/.col (left) -->
  </div>
</form>
  <!-- /.row -->
</section>
<!-- /.content -->
<?php
	echo $this->session->flashdata('notif');
	echo $this->session->flashdata('audio');
?>
