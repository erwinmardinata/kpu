<?php
  if($data->kadar_air >= 0.0 && $data->kadar_air <= 17.0) {
    $ka = "0.0% - 17.0%";
    $raf = 0.00;
  }
  if($data->kadar_air >= 17.1 && $data->kadar_air <= 17.5) {
    $ka = "17.1% - 17.5%";
    $raf = 0.60;
  }
  if($data->kadar_air >= 17.6 && $data->kadar_air <= 18.0) {
    $ka = "17.6% - 18.6%";
    $raf = 1.20;
  }
  if($data->kadar_air >= 18.1 && $data->kadar_air <= 18.5) {
    $ka = "18.1% - 18.5%";
    $raf = 1.80;
  }
  if($data->kadar_air >= 18.6 && $data->kadar_air <= 19.0) {
    $ka = "18.6% - 19.0%";
    $raf = 2.40;
  }
  if($data->kadar_air >= 19.1 && $data->kadar_air <= 19.5) {
    $ka = "19.1% - 19.5%";
    $raf = 3.00;
  }
  if($data->kadar_air >= 19.6 && $data->kadar_air <= 20.0) {
    $ka = "19.6% - 20.0%";
    $raf = 4.00;
  }
  if($data->kadar_air >= 20.1 && $data->kadar_air <= 20.5) {
    $ka = "20.1% - 20.5%";
    $raf = 5.00;
  }
  if($data->kadar_air >= 20.6 && $data->kadar_air <= 21.0) {
    $ka = "20.6 % - 21.0%";
    $raf = 6.00;
  }
  if($data->kadar_air >= 21.1 && $data->kadar_air <= 22.0) {
    $ka = "21.1% - 22.0%";
    $raf = 8.50;
  }
  if($data->kadar_air >= 22.1 && $data->kadar_air <= 23.0) {
    $ka = "22.1% - 23.0%";
    $raf = 11.00;
  }
  if($data->kadar_air >= 23.1 && $data->kadar_air <= 24.0) {
    $ka = "23.1% - 24.0%";
    $raf = 13.50;
  }
  if($data->kadar_air >= 24.1 && $data->kadar_air <= 25.0) {
    $ka = "24.1% - 25.0%";
    $raf = 16.00;
  }
  if($data->kadar_air >= 25.1 && $data->kadar_air <= 26.0) {
    $ka = "25.1% - 26.0%";
    $raf = 19.00;
  }
  if($data->kadar_air >= 26.1 && $data->kadar_air <= 27.0) {
    $ka = "26.1% - 27.0%";
    $raf = 22.00;
  }
  if($data->kadar_air >= 27.1 && $data->kadar_air <= 28.0) {
    $ka = "27.1% - 28.0%";
    $raf = 25.00;
  }

  $tanggal1 = $data->tanggal;
	$day = date('D', strtotime($tanggal1));
	$dayList = array(
		'Sun' => 'Minggu',
		'Mon' => 'Senin',
		'Tue' => 'Selasa',
		'Wed' => 'Rabu',
		'Thu' => 'Kamis',
		'Fri' => 'Jumat',
		'Sat' => 'Sabtu'
	);

	$bulan = array(
		'01' => 'Januari',
		'02' => 'Februari',
		'03' => 'Maret',
		'04' => 'April',
		'05' => 'Mei',
		'06' => 'Juni',
		'07' => 'Juli',
		'08' => 'Agustus',
		'09' => 'September',
		'10' => 'Oktober',
		'11' => 'November',
		'12' => 'Desember'
	);

	$tgl1 = explode("-", $tanggal1);
	$bulan1 = $tgl1[1];

?>
<table style="width: 100%">
	<tr>
		<td style="text-align: center; width:100%">
			<p style="line-height: 15px; font-size: 14px">
				<strong>
					<span style="font-size: 20px">BUKTI PEMBAYARAN</span><br>
				</strong>
			</p>
		</td>
	</tr>
</table>
<div style="text-align: right; margin-bottom: 7px">
  <strong><u>No. Seri ......................</u></strong>
</div>
<table style="width: 100%;">
	<tr>
		<td style="width:27%" valign="top">
      Telah Terima
    </td>
    <td style="width:73%" colspan="2">
      : Pembayaran Jagung <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data->pembayaran; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
      <i>Colly</i>, Berat I <u><?php echo $data->berat; ?></u> Kg. <br>
      K.A <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data->kadar_air; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> %
      Raf <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $raf; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> %
      Berat II <u><?php echo $data->berat2; ?></u> Kg. <br>
      x Harga <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo number_format($data->harga, 0, ".", "."); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
      Rp. <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo number_format($data->harga_total, 0, ".", "."); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>

		</td>
	</tr>
  <tr>
		<td style="" valign="top">
      Catatan
    </td>
    <td style="width:73%" colspan="2">
      : <?php echo $data->catatan; ?>

		</td>
	</tr>
  <tr>
    <td style="" valign="top">
      No. Pol
    </td>
    <td style="width:30%">
      : ...................................
		</td>
    <td style="width:50%" valign="top">
      Sisa Rp.................................................
    </td>
	</tr>
  <tr>
    <td style="" valign="top">
      Nama Sopir
    </td>
    <td style="">
      : ...................................
		</td>
    <td style="width:73%" valign="top">
      Ket &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:.................................................
    </td>
	</tr>
  <tr>
    <td style="" valign="top">
      Pemilik Barang
    </td>
    <td style="">
      : ...................................
		</td>
	</tr>

</table>
<br>
<table style="width: 100%">
	<tr>
		<td style="width:60%">
    </td>
    <td style="width:40%;text-align: center">
      Sumbawa, <?php echo $tgl1[2].' '.$bulan[$bulan1].' '.$tgl1[0]; ?><br>
      Penerima
      <br>
      <br>
      <br>
      <br>
      (<u>&nbsp;<?php echo $data->penerima; ?>&nbsp;</u>)
		</td>
	</tr>
</table>
<br>
