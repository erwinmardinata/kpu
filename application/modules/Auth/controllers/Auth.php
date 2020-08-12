<?php

class Auth extends Back_controller {

	function __construct() {

		parent::__construct();
		// $cek = $this->session->userdata('hak_akses');
		//
		// if(($cek != '')) {
		// 	redirect('Dashboard');
		// }

	}

	function index() {

		$this->cek_session();

		if(!$this->input->post('submit')) {
			$data['title'] = '';
			$this->load->view('form', $data);

		} else {

			// $hasil = $this->input->post('hasil');
			// $bil1 = $this->input->post('bil1');
			// $bil2 = $this->input->post('bil2');
			// $bil3 = $bil1 + $bil2;
			//
			// if(empty($hasil) || $hasil != $bil3) {
			// 	$this->alert_error('Hasil Penjumlahan salah');
			// 	redirect('Auth');
			// } else {

				$user = $this->input->post('email');
				$pass = md5($this->input->post('password'));

				$cek = $this->db->where('email', $user)
								->where('password', $pass)
								->where('status', '1')
								->get('admin')
								->row();

				if(count($cek) > 0) {

					if($cek->hak_akses == 1) {
						$dir = "../kontent";
					} else {
						$dir = "../".$cek->nama;
					}

					$data = array(
						'logged_in' => 'yes',
						'id' 		=> $cek->id,
						'email'	=> $cek->email,
						'hak_akses' => $cek->hak_akses,
						'ses_kcfinder' => array( 'disabled' => false, 'uploadURL' => $dir)
					);

					$this->session->set_userdata($data);

					$this->alert_info_asslamualaikum('Selamat Datang. Anda Masuk sebagai User');

					redirect('Dashboard');

				} else {

					$this->alert_error('Email atau Password Salah');

					redirect('Auth');

				// }
			}

		}


	}

	function user() {

		$this->cek_session();

		$user = $this->input->post('email');
		$pass = md5($this->input->post('password'));

		$cek = $this->db->where('email', $user)
						->where('password', $pass)
						->where('status', 2)
						->get('registrasi_peg')
						->row();

		if(count($cek) > 0) {

			if($cek->hak_akses == 1) {
				$dir = "../kontent";
			} else {
				$dir = "../".$cek->nama;
			}

			$data = array(
				'logged_in' => 'yes',
				'id' 		=> $cek->id,
				'email'	=> $cek->email,
				'hak_akses' => 5,
				'ses_kcfinder' => array( 'disabled' => false, 'uploadURL' => $dir)
			);

			$this->session->set_userdata($data);

			$this->alert_info_asslamualaikum('Selamat Datang. Anda Masuk sebagai User');

			redirect('Dashboards');

		} else {

			$this->alert_error('Email atau Password Salah');

			redirect('Auth');

		}

	}

	function logout() {

		$data = array(

			'logged_in' => '',
			'id' 		=> '',
			'email' 	=> '',
			'hak_akses' => '',
			'ses_kcfinder' => array( 'disabled' => true, 'uploadURL' => '')

		);

		$this->session->set_userdata($data);
		// $this->session->sess_destroy();
		redirect('Auth');

	}

	function cek_session() {

		if($this->session->userdata('logged_in')) {
			switch($this->session->userdata('hak_akses')) {
				case '1' : $redirect = "Dashboard";
				break;
			}
			redirect($redirect);
			// redirect('Dashboard');
		}

	}

	function data_pegawai() {
		$data_array = array();
		// $data_array['data'] = $this->mdl->row_pegawai($id);

		$this->load->view('data_pegawai.php', $data_array);
	}


}
