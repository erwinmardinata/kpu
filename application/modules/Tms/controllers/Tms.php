<?php

class Tms extends Back_controller {
	public $judul = "Data Rekap Bantu";
	public $url = "Tms";

	function __construct() {

		parent::__construct();
		$this->load->model('Mtms', 'mdl');
		$cek = $this->session->userdata('hak_akses');
		if(!($cek)) {
			redirect('Datacenter');
		}

	}

	function index() {

		$data_array = array();

		$data_array['data'] = $this->mdl->get_data();
		$data_array['judul'] = $this->judul;
		$data_array['url'] = $this->url;

		$title = "Data ".$this->judul;
		$subtitle = $this->url;
		$content = $this->load->view('list.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function add() {

		$data_array = array();

		$data_array['judul'] = $this->judul;
		$data_array['keterangan']	= $this->mdl->get_keterangan();
		$data_array['tps']	= $this->mdl->get_tps();
		$data_array['url'] = $this->url;

		$title = "Data ".$this->judul;
		$subtitle = $this->url;
		$content = $this->load->view('add.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function import() {

		$data_array = array();

		$data_array['judul'] = $this->judul;
		$data_array['url'] = $this->url;

		$title = "Data ".$this->judul;
		$subtitle = $this->url;
		$content = $this->load->view('import.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function edit($id) {

		$data_array = array();

		$data_array['data']	= $this->mdl->cek_data($id);
		$data_array['keterangan']	= $this->mdl->get_keterangan();
		$data_array['tps']	= $this->mdl->get_tps();
		$data_array['judul'] = $this->judul;
		$data_array['url'] = $this->url;

		$title = "Data ".$this->judul;
		$subtitle = $this->url;
		$content = $this->load->view('edit.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	// function tes() {
	//
	// 	$json = '{
	// 					  "order_id": "22063773",
	// 					  "jumlah_foto": "13",
	// 					  "evidence": {
	// 					    "tomman": {
	// 					      "2": null,
	// 					      "3": null,
	// 					      "4": null,
	// 					      "5": null,
	// 					      "6": null,
	// 					      "7": null,
	// 					      "8": null,
	// 					      "9": null,
	// 					      "10": null,
	// 					      "11": null,
	// 					      "12": null,
	// 					      "13": null,
	// 					      "14": null,
	// 					      "15": null,
	// 					      "16": null,
	// 					      "17": null,
	// 					      "18": null
	// 					    },
	// 					    "qc": [
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021842_741339267_file_2170487.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      },
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021842_741339267_file_2170486.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      },
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021840_741339267_file_2170484.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      },
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021840_741339267_file_2170485.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      },
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021840_741339267_file_2170483.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      },
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021841_741339267_file_2170482.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      },
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021841_741339267_file_2170481.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      },
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021840_741339267_file_2170477.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      },
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021840_741339267_file_2170480.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      },
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021840_741339267_file_2170479.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      },
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021840_741339267_file_2170478.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      },
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021840_741339267_file_2170476.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      },
	// 					      {
	// 					        "link_image": "http://10.128.16.65/telegram_kpro/1568021840_741339267_file_2170475.jpg",
	// 					        "username": "Gakdaduit",
	// 					        "fullname": "faisol",
	// 					        "waktu": null
	// 					      }
	// 					    ]
	// 					  }
	// 					}';
	//
	// 	$data = (apinya Masmur);
	// 	$Array = json_decode($json, true);
	//
	// 	foreach($Array['evidence']['qc'] as $no => $row) {
	//
	// 		echo $row['link_image'];
	//
	// 	}
	//
	// }

	function import_data() {
		include APPPATH.'libraries/PHPExcel/PHPExcel/IOFactory.php';
		$fileName = $_FILES['file']['name'];

		$config['upload_path'] = './assets/excel/'; //path upload
		$config['file_name'] = $fileName;  // nama file
		$config['allowed_types'] = 'xls|xlsx|csv'; //tipe file yang diperbolehkan
		$config['max_size'] = 10000; // maksimal sizze

		$this->upload->initialize($config);

		if(! $this->upload->do_upload('file') ){
		echo $this->upload->display_errors();exit();
		}

		$inputFileName = './assets/excel/'.$fileName;

		try {
		   $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
		   $objReader = PHPExcel_IOFactory::createReader($inputFileType);
		   $objPHPExcel = $objReader->load($inputFileName);
		} catch(Exception $e) {
		   die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
		}

		$sheet = $objPHPExcel->getSheet(0);
		$highestRow = $sheet->getHighestRow();
		$highestColumn = $sheet->getHighestColumn();

		for ($row = 4; $row <= $highestRow; $row++){                  //  Read a row of data into an array
		   $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
		                                   NULL,
		                                   TRUE,
		                                   FALSE);

		    // Sesuaikan key array dengan nama kolom di database
		    $data[] = array(
					 // "id"=> $rowData[0][0],
		       "dpid"=> $rowData[0][0],
					 "kk"=> $rowData[0][1],
					 "nik"=> $rowData[0][2],
					 "nama"=> $rowData[0][3],
					 "tempat_lahir"=> $rowData[0][4],
					 "tanggal_lahir"=> $rowData[0][5],
					 "status_kawin"=> $rowData[0][6],
					 "jenis_kelamin"=> $rowData[0][7],
					 "dukuh"=> $rowData[0][8],
					 "rt"=> $rowData[0][9],
					 "rw"=> $rowData[0][10],
					 "disabilitas"=> $rowData[0][11],
					 "status_rekam"=> $rowData[0][12],
					 "keterangan"=> $rowData[0][13],
					 "sumber_data"=> $rowData[0][14],
					 "tps"=> $rowData[0][15]
		   );

		}
		// echo json_encode($data);exit;
		$insert = $this->db->insert_batch("ab_Tms",$data);
		$insert == true ? $this->alert_info('Berhasil Import Data') : $this->alert_error('Gagal Import Data');
		redirect($this->url.'/import');
	}

	function insert() {

		$post = $this->input->post();
		$tgl = explode('-', $post['tanggal_lahir']);
		unset($post['tanggal_lahir']);

		$tgl_new = array('tanggal_lahir' => $tgl[2].'|'.$tgl[1].'|'.$tgl[0]);
		$data = array_merge($post, $tgl_new);

		$query = $this->mdl->insert_data($data);

		$query == true ? $this->alert_info('Berhasil Tambah Data Tms') : $this->alert_error('Gagal Tambah Data Tms');

		redirect($this->url.'/add');

	}

	function update() {

		$post = $this->input->post();
		$tgl = explode('-', $post['tanggal_lahir']);
		unset($post['tanggal_lahir']);

		$tgl_new = array('tanggal_lahir' => $tgl[2].'|'.$tgl[1].'|'.$tgl[0]);
		$data = array_merge($post, $tgl_new);

		$query = $this->mdl->update_data($data, $post['id']);

		$query == true ? $this->alert_info('Berhasil Ubah Data Tms') : $this->alert_error('Gagal Ubah Data Tms');

		redirect($this->url);

	}

	function hapus($id) {

		$query = $this->mdl->delete_data($id);

		$query == true ? $this->alert_info('Berhasil Hapus Data') : $this->alert_error('Gagal Hapus Data');

		redirect($this->url);

	}

	function get_data($kat) {
		$fetch_data = $this->mdl->make_datatables($kat);
		$data = array();
		$no=1;
		foreach($fetch_data as $row)
		{
			  $tps = $this->db->where('id', $row->tps)->get('tps')->row();
				if($tps) {
					$tpss = $tps->nama;
				} else {
					$tpss = "-";
				}
				$keterangan = $this->db->where('kode', $row->keterangan)->get('keterangan')->row();
				if($keterangan) {
					$ket = $keterangan->kode.'. '.$keterangan->nama;
				} else {
					$ket = "-";
				}
				 $sub_array = array();
				 $sub_array[] = $no++;
				 $sub_array[] = $row->dpid;
				 $sub_array[] = $row->nik;
				 $sub_array[] = $row->nama;
				 $sub_array[] = $ket;
				 $sub_array[] = $tpss;
				 // $sub_array[] = '<a href="'.site_url($this->url.'/edit/'.$row->id).'" class="btn btn-info btn-xs update">Edit</a>
				 // <a href="'.site_url($this->url.'/hapus/'.$row->id).'" onclick="return confirm(\'Anda Yakin?\')" class="btn btn-danger btn-xs delete">Delete</a>';
				 $data[] = $sub_array;
		}
		$output = array(
				 "draw"                    =>     intval($_POST["draw"]),
				 "recordsTotal"          =>      $this->mdl->get_all_data($kat),
				 "recordsFiltered"     =>     $this->mdl->get_filtered_data($kat),
				 "data"                    =>     $data
		);
		echo json_encode($output);

	}


	function excel() {
		// Load plugin PHPExcel nya
		include APPPATH.'libraries/PHPExcel/PHPExcel.php';
	
		// Panggil class PHPExcel nya
		$excel = new PHPExcel();
	
		// Settingan awal fil excel
		$excel->getProperties()->setCreator('Somad Teknologi')
					 ->setLastModifiedBy('Somad Teknologi')
					 ->setTitle("Jagung")
					 ->setSubject("Jagung")
					 ->setDescription("Laporan Jagung")
					 ->setKeywords("Krabat Sumbawa");
		//mengatur background
		$backgroound = array(
		  'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array(
			  'rgb' => '99FFFF'
			)
		  ),
		  'font' => array('bold' => true), // Set font nya jadi bold
		  'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
		  ),
		  'borders' => array(
			'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
			'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
			'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
			'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
		  )
		);
	
		// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
		$style_col = array(
		  'font' => array('bold' => true), // Set font nya jadi bold
		  'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
		  ),
		  'borders' => array(
			'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
			'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
			'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
			'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
		  )
		);
	
		// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
		$style_row = array(
		  'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, // Set text jadi di tengah secara vertical (middle)
			'wrap' => true
		  ),
		  'borders' => array(
			'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
			'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
			'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
			'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
		  )
		);
	
		$excel->setActiveSheetIndex(0)->setCellValue('A1', "LAPORAN PEMBELIAN"); // Set kolom A1 dengan tulisan "DATA SISWA"
		$excel->getActiveSheet()->mergeCells('A1:I1'); // Set Merge Cell pada kolom A1 sampai E1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
	
		// Buat header tabel nya pada baris ke 3
		$excel->setActiveSheetIndex(0)->setCellValue('A3', "No"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('B3', "DPID"); // Set kolom B3 dengan tulisan "NIS"
		$excel->setActiveSheetIndex(0)->setCellValue('C3', "KK"); // Set kolom C3 dengan tulisan "NAMA"
		$excel->setActiveSheetIndex(0)->setCellValue('D3', "NIK"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
		$excel->setActiveSheetIndex(0)->setCellValue('E3', "TEMPAT LAHIR"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('F3', "TANGGAL LAHIR"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('G3', "STATUS KAWIN"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('H3', "JENIS KELAMIN"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('I3', "DUKUH"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('J3', "RT"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('K3', "RW"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('L3', "DISABILITAS"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('M3', "KETERANGAN"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('N3', "SUMBER DATA"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('O3', "TPS"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('P3', "TPS"); // Set kolom E3 dengan tulisan "ALAMAT"
	
		// Apply style header yang telah kita buat tadi ke masing-masing kolom header
		$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
	
		// Buat header tabel nya pada baris ke 4
		$excel->setActiveSheetIndex(0)->setCellValue('A4', "1"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('B4', "2"); // Set kolom B3 dengan tulisan "NIS"
		$excel->setActiveSheetIndex(0)->setCellValue('C4', "3"); // Set kolom C3 dengan tulisan "NAMA"
		$excel->setActiveSheetIndex(0)->setCellValue('D4', "4"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
		$excel->setActiveSheetIndex(0)->setCellValue('E4', "5"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('F4', "6"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('G4', "7"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('H4', "8"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('I4', "9"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('J4', "10"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('K4', "11"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('L4', "12"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('M4', "13"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('N4', "14"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('O4', "15"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('P4', "15"); // Set kolom E3 dengan tulisan "ALAMAT"
	
		// Apply style header yang telah kita buat tadi ke masing-masing kolom header
		$excel->getActiveSheet()->getStyle('A4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('B4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('C4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('D4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('E4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('F4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('G4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('H4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('I4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('J4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('K4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('L4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('M4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('N4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('O4')->applyFromArray($backgroound);
		$excel->getActiveSheet()->getStyle('P4')->applyFromArray($backgroound);
	
		// if(isset($get['pemohon'])) {
		//   $data = $this->get_data_pemohon($get['pemohon'], $get['tanggal1'], $get['tanggal2']);
		// }
		// if(isset($get['komoditas'])) {
		//   $data = $this->get_data_komoditas($get['komoditas'], $get['tanggal1'], $get['tanggal2']);
		// }
	
		// echo json_encode($data);exit;
	
		$no = 1; // Untuk penomoran tabel, di awal set dengan 1
		$numrow = 5; // Set baris pertama untuk isi tabel adalah baris ke 4
		$data = $this->mdl->get_data_modif();
		// echo json_encode($data);exit;
		foreach($data as $row){ // Lakukan looping pada variabel siswa
			$tps = $this->db->where('id', $row->tps)->get('tps')->row();
			
	
		  $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
		  $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $row->dpid);
		  $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $row->kk,PHPExcel_Cell_DataType::TYPE_STRING);
		  $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $row->nik,PHPExcel_Cell_DataType::TYPE_STRING);
		  $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $row->tempat_lahir);
		  $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $row->tanggal_lahir);
		  $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $row->status_kawin);
		  $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $row->jenis_kelamin);
		  $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $row->dukuh);
		  $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $row->rt);
		  $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $row->rw);
		  $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $row->disabilitas);
		  $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $row->status_rekam);
		  $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $row->keterangan);
		  $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $row->sumber_data);
		  $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $tps->nama);
	
		  // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
		  $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);


		  $excel->getActiveSheet()->setCellValueExplicit('C'.$numrow, $row->kk, PHPExcel_Cell_DataType::TYPE_STRING);
		  $excel->getActiveSheet()->setCellValueExplicit('D'.$numrow, $row->nik, PHPExcel_Cell_DataType::TYPE_STRING);
		  
	
		  $no++; // Tambah 1 setiap kali looping
		  $numrow++; // Tambah 1 setiap kali looping
	
		}
	
		// Set width kolom
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(30); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(30); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(15); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('F')->setWidth(15); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('H')->setWidth(15); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('I')->setWidth(15); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('J')->setWidth(15); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('K')->setWidth(15); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('L')->setWidth(15); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('M')->setWidth(15); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('N')->setWidth(15); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('O')->setWidth(15); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('P')->setWidth(15); // Set width kolom E
	
		// Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
		$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
	
		// Set orientasi kertas jadi LANDSCAPE
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
	
		// Set judul file excel nya
		$excel->getActiveSheet(0)->setTitle("Laporan Prasarana");
		$excel->setActiveSheetIndex(0);
	
		// Proses file excel
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Laporan Pembelian Jagung.xlsx"'); // Set nama file excel nya
		header('Cache-Control: max-age=0');
	
		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
		}

}
