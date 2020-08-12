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
							$bln = array(
								'01' => 'JANUARI',
								'02' => 'FEBRUARI',
								'03' => 'MARET',
								'04' => 'APRIL',
								'05' => 'MEI',
								'06' => 'JUNI',
								'07' => 'JULI',
								'08' => 'AGUSTUS',
								'09' => 'SEPTEMBER',
								'10' => 'OKTOBER',
								'11' => 'NOVEMBER',
								'12' => 'DESEMBER'
							);
						?>
						<div class="ro">
							<div class="form-inline">
								<div class="form-group mb-2">
									<select class="form-control" id="bulan">
										<option value="">Pilih Bulan</option>
										<?php for($x=1; $x<=12; $x++) { ?>
										<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group mx-sm-3 mb-2">
									<select class="form-control" id="tahun">
										<option value="">Pilih Tahun</option>
										<?php for($x=date('Y'); $x>=2015; $x--) { ?>
										<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
										<?php } ?>
									</select>
								</div>
								<button type="submit" class="btn btn-primary mb-2" id="cari">Cari</button>
							</div>
						</div>
						<br>
						<div id="value">
						<h5 class="text-center">KEADAAN SAMPAI DENGAN BULAN <?php echo $bln[$bulan]; ?> TAHUN <?php echo $tahun ?></h5>
						<br>
						<table class="table table-bordered table-responsive" style="font-size: 15px">
							<thead class="bg-primary">
								<tr>
									<th width="2%">No.</th>
									<th align="center">Uraian</th>
									<th align="center">Target (Rp)</th>
									<th align="center">Bulan Ini (Rp)</th>
									<th align="center">S/D Bulan Lalu (Rp)</th>
									<th align="center">S/D Bulan Ini (Rp)</th>
									<th align="center">%</th>
									<th align="center">Saldo (Rp)</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$total_target = 0;
								$total_nilai = 0;
								$total_bulan_lalu = 0;
								$total_bulan_ini = 0;
								$total_saldo = 0;
								$sd_bln_ini = 0;
								foreach($bulan_ini as $no => $row):
							?>
								<tr>
									<td><?php echo ++$no; ?></td>
									<td><a href="#"><?php echo $row->nama; ?></a></td>
									<td style="text-align: right"><?php $total_target = $total_target + $row->target; echo number_format($row->target, 0, ".", "."); ?></td>
									<td style="text-align: right"><?php $total_nilai = $total_nilai + $row->nilai; echo number_format($row->nilai, 0, ".", "."); ?></td>
									<td style="text-align: right">
										<?php
											if(!$sampai_bulan_ini) {
												$sd_bln_lalu = 0;
											} else {
												foreach($sampai_bulan_ini as $value):
													if($row->id_pajak == $value->id_pajak) {
														$sd_bln_lalu = $value->nilai;
													}
												endforeach;
											}
											$total_bulan_lalu = $total_bulan_lalu + $sd_bln_lalu;
											echo number_format($sd_bln_lalu, 0, ".", ".");
										?>
									</td>
									<td style="text-align: right">
										<?php
											$sd_bln_ini = $row->nilai + $sd_bln_lalu;
											$total_bulan_ini = $total_bulan_ini + $sd_bln_ini;
											echo number_format($sd_bln_ini, 0, ".", ".");
										?>
									</td>
									<td style="text-align: right">
										<?php
											$persen = ($sd_bln_ini/$row->target) * 100;
											echo round($persen, 2);
										?>
									</td>
									<td style="text-align: right">
										<?php
											$saldo = $sd_bln_ini - $row->target;
											$total_saldo = $total_saldo + $saldo;
											echo number_format($saldo, 0, ".", ".");
										?>
									</td>
								</tr>
							<?php endforeach; ?>
								<tr>
									<td colspan="2" align="center"><strong>Total</strong>
									</td>
									<td align="right">
										<strong><?php echo number_format($total_target, 0, ".", "."); ?></strong>
									</td>
									<td align="right">
										<strong><?php echo number_format($total_nilai, 0, ".", "."); ?></strong>
									</td>
									<td align="right">
										<strong><?php echo number_format($total_bulan_lalu, 0, ".", "."); ?></strong>
									</td>
									<td align="right">
										<strong><?php echo number_format($total_bulan_ini, 0, ".", "."); ?></strong>
									</td>
									<td align="right">
										<strong></strong>
									</td>
									<td align="right">
										<strong><?php echo number_format($total_saldo, 0, ".", "."); ?></strong>
									</td>
								</tr>

							</tbody>
						</table>
						<div class="alert alert-primary" role="alert" style="font-size: 25px">
						  Total Target Pajak Tahun <?php echo $tahun ?> adalah <strong>Rp. <?php echo number_format($total_target, 0, ".", "."); ?></strong> dan pemasukkan pajak sampai dengan bulan <strong><?php echo $bln[$bulan]; ?></strong> senilai <strong><?php echo number_format($total_bulan_ini, 0, ".", "."); ?></strong>, Sehingga Saldo Pajak pada tahun 2018 adalah senilai <strong>Rp. <?php echo number_format($total_saldo, 0, ".", "."); ?></strong>
						</div>
						</div>
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

										url : '<?php echo site_url("Pajak/get_tabel_js"); ?>',
										data : 'bulan=' + bulan + '&tahun=' + tahun,
										type : 'get',
										success : function(result) {

											$("#value").hide().html(result).fadeIn('slow');

										}
									});

							  });

						  });
						</script>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	echo $this->session->flashdata('notif');
?>
