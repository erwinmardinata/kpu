<section class="content-header">
	<h1>
		Beranda
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-4 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3>
						<?php
							$cek = $this->db->get('tps')->result();
							echo COUNT(array($cek));
						?>
					</h3>

					<p>Jumlah TPS</p>
				</div>
				<div class="icon">
					<i class="ion ion-bag"></i>
				</div>
			</div>
		</div>
		<!-- ./col -->
	</div>
	<!-- /.row (main row) -->

</section>

<!-- /.content -->
<?php
	echo $this->session->flashdata('notif');
	echo $this->session->flashdata('audio');
?>
<script>
$(document).ready(function(){
  var dataTable = $('#user_data').DataTable({
       "processing":true,
       "serverSide":true,
       "searching": false,
       "order":[],
       "ajax":{
            url:"<?php echo site_url('Transaksi/get_data'); ?>",
            type:"POST"
       },
       "columnDefs":[
            {
                 "targets":[0, 1, 2,3],
                 "orderable":false,
            },
       ],
  });

  $('#myTable').DataTable({
    "searching": false
  });

});
</script>
