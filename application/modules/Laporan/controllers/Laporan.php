<?php

class Laporan extends Back_controller {
	public $judul = "Data Laporan";
	public $url = "Laporan";

	function __construct() {

		parent::__construct();
		$this->load->model('Mlaporan', 'mdl');
		$cek = $this->session->userdata('hak_akses');
		if(!($cek)) {
			redirect('Auth');
		}

	}

	function index() {

		$data_array = array();

		// $data_array['data'] = $this->mdl->get_data();

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
		$data_array['url'] = $this->url;

		$title = "Data ".$this->judul;
		$subtitle = $this->url;
		$content = $this->load->view('add.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function edit($id) {

		$data_array = array();

		$data_array['data']	= $this->mdl->cek_data($id);
		$data_array['kategori'] = $this->mdl->get_kategori();
		$data_array['opd'] = $this->mdl->get_opd();

		$data_array['judul'] = $this->judul;
		$data_array['url'] = $this->url;

		$title = "Data ".$this->judul;
		$subtitle = $this->url;
		$content = $this->load->view('edit.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function insert() {

		$post = $this->input->post();

		$query = $this->mdl->insert_data($post);

		$query == true ? $this->alert_info('Berhasil Tambah Data Buku') : $this->alert_error('Gagal Tambah Data Buku');

		redirect('Dashboard');

	}

	function update() {

		$post = $this->input->post();

		$query = $this->mdl->update_data($post, $post['id']);

		$query == true ? $this->alert_info('Berhasil Ubah Data Buku') : $this->alert_error('Gagal Ubah Data Buku');

		redirect($this->url);

	}

	function hapus($id) {

		$query = $this->mdl->delete_data($id);

		$query == true ? $this->alert_info('Berhasil Hapus Data') : $this->alert_error('Gagal Hapus Data');

		redirect($this->url);

	}

	function get_data() {
		$fetch_data = $this->mdl->make_datatables();
		$data = array();
		$no=1;
		foreach($fetch_data as $row)
		{
				 $sub_array = array();
				 $sub_array[] = $no++;
				 $sub_array[] = $row->tanggal;
				 $sub_array[] = $row->penerima;
				 // $sub_array[] = $row->pembayaran;
				 // $sub_array[] = number_format($row->berat, 0, ".", ".");
				 // $sub_array[] = $row->kadar_air;
				 $sub_array[] = number_format($row->berat2, 0, ".", ".");
				 // $sub_array[] = number_format($row->harga, 0, ".", ".");
				 $sub_array[] = number_format($row->harga_total, 0, ".", ".");
				 $sub_array[] = '<a href="'.site_url($this->url.'/print_laporan/'.$row->id).'" target="_blank" class="btn btn-info btn-xs update">Lihat</a>
				 <a href="'.site_url($this->url.'/hapus/'.$row->id).'" onclick="return confirm(\'Anda Yakin?\')" class="btn btn-danger btn-xs delete">Delete</a>';
				 $data[] = $sub_array;
		}
		$output = array(
				 "draw"                    =>     intval($_POST["draw"]),
				 "recordsTotal"          =>      $this->mdl->get_all_data(),
				 "recordsFiltered"     =>     $this->mdl->get_filtered_data(),
				 "data"                    =>     $data
		);
		echo json_encode($output);

	}


	function get_berat2() {

		$berat = $this->input->get('berat');
		$kadar_air = $this->input->get('kadar_air');

		if($kadar_air == 1) {
			$ka = 0.00;
		}
		if($kadar_air == 2) {
			$ka = 0.60;
		}
		if($kadar_air == 3) {
			$ka = 1.20;
		}
		if($kadar_air == 4) {
			$ka = 1.80;
		}
		if($kadar_air == 5) {
			$ka = 2.40;
		}
		if($kadar_air == 6) {
			$ka = 3.00;
		}
		if($kadar_air == 7) {
			$ka = 4.00;
		}
		if($kadar_air == 8) {
			$ka = 5.00;
		}
		if($kadar_air == 9) {
			$ka = 6.00;
		}
		if($kadar_air == 10) {
			$ka = 8.50;
		}
		if($kadar_air == 11) {
			$ka = 11.00;
		}
		if($kadar_air == 12) {
			$ka = 13.50;
		}
		if($kadar_air == 13) {
			$ka = 16.00;
		}
		if($kadar_air == 14) {
			$ka = 19.00;
		}
		if($kadar_air == 15) {
			$ka = 22.00;
		}
		if($kadar_air == 16) {
			$ka = 25.00;
		}

		$berat2 = $berat - ($berat * $ka/100);
		echo $berat2;
		// echo '<input name="berat2" id="berat2" readonly value="'.$berat2.'" readonly class="form-control" placeholder="9999999">';

	}

	function get_total() {

		$total = $this->input->get('harga');
		$berat = $this->input->get('berat');

		$harga_total = $total * $berat;
		echo $harga_total;
		// echo '<input name="harga_total" readonly value="'.$harga_total.'" readonly class="form-control" placeholder="9999999">';

	}

	function print_laporan($id) {

		$data_array = array();
		$data_array['judul'] = $this->judul;
		$data_array['data']	= $this->mdl->cek_data($id);
		$data_array['url'] = $this->url;
		$data_array['id'] = $id;

		$this->load->library('Pdf');
    $customPaper = array(-15,-35,350,500);
    $this->pdf->setPaper($customPaper, 'landscape');
    $this->pdf->load_view('laporan', $data_array);

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
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "Tanggal"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "Penerima"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "Jumlah Karung"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "Berat"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "Kadar Air"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "Berat II"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('H3', "Harga"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('I3', "Total Harga"); // Set kolom E3 dengan tulisan "ALAMAT"

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

    // if(isset($get['pemohon'])) {
    //   $data = $this->get_data_pemohon($get['pemohon'], $get['tanggal1'], $get['tanggal2']);
    // }
    // if(isset($get['komoditas'])) {
    //   $data = $this->get_data_komoditas($get['komoditas'], $get['tanggal1'], $get['tanggal2']);
    // }

    // echo json_encode($data);exit;

    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 5; // Set baris pertama untuk isi tabel adalah baris ke 4
    $data = $this->mdl->get_data();
    // echo json_encode($data);exit;
    foreach($data as $row){ // Lakukan looping pada variabel siswa
			if($row->kadar_air == 1) {
		    $ka = "0.0% - 17.0%";
		  }
		  if($row->kadar_air == 2) {
		    $ka = "17.1% - 17.5%";
		  }
		  if($row->kadar_air == 3) {
		    $ka = "17.6% - 18.6%";
		  }
		  if($row->kadar_air == 4) {
		    $ka = "18.1% - 18.5%";
		  }
		  if($row->kadar_air == 5) {
		    $ka = "18.6% - 19.0%";
		  }
		  if($row->kadar_air == 6) {
		    $ka = "19.1% - 19.5%";
		  }
		  if($row->kadar_air == 7) {
		    $ka = "19.6% - 20.0%";
		  }
		  if($row->kadar_air == 8) {
		    $ka = "20.1% - 20.5%";
		  }
		  if($row->kadar_air == 9) {
		    $ka = "20.6 % - 21.0%";
		  }
		  if($row->kadar_air == 10) {
		    $ka = "21.1% - 22.0%";
		  }
		  if($row->kadar_air == 11) {
		    $ka = "22.1% - 23.0%";
		  }
		  if($row->kadar_air == 12) {
		    $ka = "23.1% - 24.0%";
		  }
		  if($row->kadar_air == 13) {
		    $ka = "24.1% - 25.0%";
		  }
		  if($row->kadar_air == 14) {
		    $ka = "25.1% - 26.0%";
		  }
		  if($row->kadar_air == 15) {
		    $ka = "26.1% - 27.0%";
		  }
		  if($row->kadar_air == 16) {
		    $ka = "27.1% - 28.0%";
		  }

      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $row->tanggal);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $row->penerima);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $row->pembayaran);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $row->berat);
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $row->kadar_air);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $row->berat2);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $row->harga);
      $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $row->harga_total);

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
