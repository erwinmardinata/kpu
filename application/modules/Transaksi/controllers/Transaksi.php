<?php

class Transaksi extends Back_controller {
	public $judul = "Data Transaksi";
	public $url = "Transaksi";

	function __construct() {

		parent::__construct();
		$this->load->model('Mtransaksi', 'mdl');
		$cek = $this->session->userdata('hak_akses');
		if(!($cek)) {
			redirect('Auth');
		}

	}

	function index() {

		$data_array = array();


		$data_array['data'] = $this->mdl->get_data();

		$data_array['judul'] = $this->judul;
		$data_array['url'] = $this->url;

		$title = "Data ".$this->judul;
		$subtitle = "dashboard";
		$content = $this->load->view('list.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function add() {

		$data_array = array();

		$data_array['judul'] = $this->judul;
		$data_array['url'] = $this->url;

		$title = "Data ".$this->judul;
		$subtitle = "dashboard";
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

		redirect('Dashboard');

	}

	function get_data() {
		$fetch_data = $this->mdl->make_datatables();
		$data = array();
		$no=1;
		foreach($fetch_data as $row)
		{

			// if($row->kadar_air == 1) {
		  //   $ka = "0.0% - 17.0%";
		  // }
		  // if($row->kadar_air == 2) {
		  //   $ka = "17.1% - 17.5%";
		  // }
		  // if($row->kadar_air == 3) {
		  //   $ka = "17.6% - 18.6%";
		  // }
		  // if($row->kadar_air == 4) {
		  //   $ka = "18.1% - 18.5%";
		  // }
		  // if($row->kadar_air == 5) {
		  //   $ka = "18.6% - 19.0%";
		  // }
		  // if($row->kadar_air == 6) {
		  //   $ka = "19.1% - 19.5%";
		  // }
		  // if($row->kadar_air == 7) {
		  //   $ka = "19.6% - 20.0%";
		  // }
		  // if($row->kadar_air == 8) {
		  //   $ka = "20.1% - 20.5%";
		  // }
		  // if($row->kadar_air == 9) {
		  //   $ka = "20.6 % - 21.0%";
		  // }
		  // if($row->kadar_air == 10) {
		  //   $ka = "21.1% - 22.0%";
		  // }
		  // if($row->kadar_air == 11) {
		  //   $ka = "22.1% - 23.0%";
		  // }
		  // if($row->kadar_air == 12) {
		  //   $ka = "23.1% - 24.0%";
		  // }
		  // if($row->kadar_air == 13) {
		  //   $ka = "24.1% - 25.0%";
		  // }
		  // if($row->kadar_air == 14) {
		  //   $ka = "25.1% - 26.0%";
		  // }
		  // if($row->kadar_air == 15) {
		  //   $ka = "26.1% - 27.0%";
		  // }
		  // if($row->kadar_air == 16) {
		  //   $ka = "27.1% - 28.0%";
		  // }

				 $sub_array = array();
				 $sub_array[] = $no++;
				 $sub_array[] = $row->tanggal;
				 $sub_array[] = $row->penerima;
				 $sub_array[] = $row->pembayaran;
				 $sub_array[] = number_format($row->berat, 0, ".", ".");
				 $sub_array[] = $row->kadar_air;
				 $sub_array[] = number_format($row->berat2, 0, ".", ".");
				 $sub_array[] = number_format($row->harga, 0, ".", ".");
				 $sub_array[] = number_format($row->harga_total, 0, ".", ".");
				 // $sub_array[] = '
				 // <a href="'.site_url($this->url.'/hapus/'.$row->id).'" onclick="return confirm(\'Anda Yakin?\')" class="btn btn-danger btn-xs delete">Delete</a>';
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

		if($kadar_air >= 0.0 && $kadar_air <= 17.0) {
			$ka = 0.00;
		}
		if($kadar_air >= 17.1 && $kadar_air <= 17.5) {
			$ka = 0.60;
		}
		if($kadar_air >= 17.6 && $kadar_air <= 18.0) {
			$ka = 1.20;
		}
		if($kadar_air >= 18.1 && $kadar_air <= 18.5) {
			$ka = 1.80;
		}
		if($kadar_air >= 18.6 && $kadar_air <= 19.0) {
			$ka = 2.40;
		}
		if($kadar_air >= 19.1 && $kadar_air <= 19.5) {
			$ka = 3.00;
		}
		if($kadar_air >= 19.6 && $kadar_air <= 20.0) {
			$ka = 4.00;
		}
		if($kadar_air >= 20.1 && $kadar_air <= 20.5) {
			$ka = 5.00;
		}
		if($kadar_air >= 20.6 && $kadar_air <= 21.0) {
			$ka = 6.00;
		}
		if($kadar_air >= 21.1 && $kadar_air <= 22.0) {
			$ka = 8.50;
		}
		if($kadar_air >= 22.1 && $kadar_air <= 23.0) {
			$ka = 11.00;
		}
		if($kadar_air >= 23.1 && $kadar_air <= 24.0) {
			$ka = 13.50;
		}
		if($kadar_air >= 24.1 && $kadar_air <= 25.0) {
			$ka = 16.00;
		}
		if($kadar_air >= 25.1 && $kadar_air <= 26.0) {
			$ka = 19.00;
		}
		if($kadar_air >= 26.1 && $kadar_air <= 27.0) {
			$ka = 22.00;
		}
		if($kadar_air >= 27.1 && $kadar_air <= 28.0) {
			$ka = 25.00;
		}
		// echo
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

}
