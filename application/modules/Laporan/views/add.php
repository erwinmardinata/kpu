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
	<small>Tambah</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  <li><a href="<?php echo site_url($url); ?>"><?php echo $judul; ?></a></li>
	<li class="active">Tambah</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<form method="POST" action="<?php echo site_url($url.'/insert'); ?>">
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
  			  <div class="col-sm-6">
            <div class="form-group">
	  				  <label for="name">Pembayaran Jagung</label> <small>dalam colly / karung</small>
	  				  <input type="number" name="pembayaran" class="form-control" required>
	  				</div>
            <div class="form-group">
	  				  <label for="name">Berat</label>
	  				  <input type="number" name="berat" id="berat" class="form-control" required>
	  				</div>
            <div class="form-group">
    				  <label for="name">Kadar Air</label>
							<select class="form-control" name="kadar_air" id="kadar_air" required>
                <option value="">-</option>
                <option value="1">0.0% - 17.0%</option>
                <option value="2">17.1% - 17.5%</option>
                <option value="3">17.6% - 18.6 %</option>
                <option value="4">18.1% - 18.5%</option>
                <option value="5">18.6% - 19.0%</option>
                <option value="6">19.1% - 19.5%</option>
                <option value="7">19.6% - 20.0%</option>
                <option value="8">20.1% - 20.5%</option>
                <option value="9">20.6 % - 21.0%</option>
                <option value="10">21.1% - 22.0%</option>
                <option value="11">22.1% - 23.0%</option>
                <option value="12">23.1% - 24.0%</option>
                <option value="13">24.1% - 25.0%</option>
                <option value="14">25.1% - 26.0%</option>
                <option value="15">26.1% - 27.0%</option>
								<option value="16">27.1% - 28.0%</option>
							</select>
    				</div>
						<div class="form-group">
	  				  <label for="name">Berat II</label>
              <input type="number" id="berat2" readonly name="berat2" class="form-control" required>
	  				</div>
  			  </div>
          <div class="col-sm-6">
            <div class="form-group">
	  				  <label for="name">Catatan</label>
              <textarea name="catatan" class="form-control" rows="3"></textarea>
	  				</div>
            <div class="form-group">
	  				  <label for="name">Harga</label> <small>dalam KG</small>
	  				  <input type="number" name="harga" id="harga" class="form-control" required>
	  				</div>
            <div class="form-group">
    				  <label for="name">Harga Total</label>
              <input type="number" id="harga_total" name="harga_total" readonly class="form-control" required>
    				</div>
            <div class="form-group">
    				  <label for="name">Penerima</label>
              <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>" class="form-control" required>
              <input type="text" name="penerima" class="form-control" required>
    				</div>
            <div class="card-footer">
                <a href="<?php echo site_url("Dashboard"); ?>" class="btn btn-sm btn-warning">
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
<script>
$(document).ready(function(){
  $("#kadar_air").change(function() {
    var berat = $("#berat").val();
 	  var kadar_air = $("#kadar_air").val();

 	// return alert(tgl);
    $.ajax({
 			url : '<?php echo site_url($url."/get_berat2"); ?>',
       data : 'berat=' + berat + '&kadar_air=' + kadar_air,
       type : 'get',
       success : function(result) {
           $("#berat2").attr("value", result);
       }
 		});
  });

});
</script>
<script>
$(document).ready(function(){
  $("#harga").change(function() {
    var harga = $("#harga").val();
 	  var berat = $("#berat2").val();

 	// return alert(berat);
    $.ajax({
 			url : '<?php echo site_url($url."/get_total"); ?>',
       data : 'harga=' + harga + '&berat=' + berat,
       type : 'get',
       success : function(result) {
         $("#harga_total").attr("value", result);
       }
 		});
  });

});
</script>
