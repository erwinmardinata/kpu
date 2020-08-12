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

}
