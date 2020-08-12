<div>
	<div style="background-color: rgba(0,0,0,0.1);">
		<div class="container">
			<div class="container-konten">
				<div class="row">
					<div class="col-md-12">
						<h1 class="header-content">DATA PAJAK</h1>
						<ol class="breadcrumb">
						  <li class="breadcrumb-item">
							<a href="#">Beranda</a>
						  </li>
						  <li class="breadcrumb-item active">Data Pajak</li>
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
				<div class="col-md-12">
					<h1 class="title-header">KONTAK</h1><hr>
					<div class="value-content">

						<?php
							if(isset($_GET['bulan']) && isset($_GET['tahun'])) {
								$bulan = $_GET['bulan'];
								$tahun = $_GET['tahun'];
							} else {
								$bulan = $bulans;
								$tahun = $tahuns;
							}

						?>
						<div class="containerr">
							<form action="<?php echo site_url('Pajak/get_grafik'); ?>">
							<div class="form-inline">
								<div class="form-group mb-2">
									<select class="form-control" id="bulan"n name="bulan">
										<option value="">Pilih Bulan</option>
										<?php for($x=1; $x<=12; $x++) { ?>
										<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group mx-sm-3 mb-2">
									<select class="form-control" id="tahun" name="tahun">
										<option value="">Pilih Tahun</option>
										<?php for($x=date('Y'); $x>=2015; $x--) { ?>
										<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
										<?php } ?>
									</select>
								</div>
								<button type="submit" class="btn btn-primary mb-2" id="cari">Cari</button>
							</div>
							<div style="text-align: center;font-size: 23px;font-weight: Bold;">
								GRAFIK LAPORAN PENDAPATAN DAERAH BULAN <?php echo $bulan; ?> Tahun <?php echo $tahun ?>
							</div>

						</div>
						<br>
						<div id="value">
							<div id="chart"></div>
							<script>
							  $(function () {

								  $("#cari").click(function() {
									  var bulan = $("#bulan").val();
									  var tahun = $("#tahun").val();

									  if(bulan=="" || tahun=="") {
										return alert("Pilih salah satu combobox");
									  }

										// $('#value').html("<p style='text-align:center;padding-top:23px'><img src='<?php echo base_url() ?>assets/img/35.gif'></p>");

										$.ajax({

											url : '<?php echo site_url("Pajak/get_grafik_js"); ?>',
											data : 'bulan=' + bulan + '&tahun=' + tahun,
											type : 'get',
											success : function(result) {

												$("#value").hide().html(result).fadeIn('slow');

											}
										});

								  });

							  });
							</script>
							<script>

							        var options = {
							            chart: {
							                height: 400,
							                type: 'line',
							                zoom: {
							                    enabled: false
							                }
							            },
							            dataLabels: {
							                enabled: false
							            },
							            stroke: {
							                curve: 'straight'
							            },
							            series: [{
							                name: "Nilai Rp.",
							                data: [
																<?php
																foreach($grafik as $row):
																	echo $row->nilai.", ";
																 endforeach;
																?>
															]
							            }],
							            title: {
							                text: 'Nilai Pajak (Rp.)',
							                align: 'left'
							            },
							            grid: {
							                row: {
							                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
							                    opacity: 0.5
							                },
							            },
							            xaxis: {
							                categories: [
																<?php
																	foreach($grafik as $row):
																		echo "'$row->kategori'".", ";
																	endforeach;
																?>
															],
							            }
							        }

							        var chart = new ApexCharts(
							            document.querySelector("#chart"),
							            options
							        );

							        chart.render();

							</script>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	echo $this->session->flashdata('notif');
?>
