<?php

class Setting extends Back_controller {

	function __construct() {

		parent::__construct();
		$this->load->model('Msetting', 'mdl');

		$cek = $this->session->userdata('hak_akses');

		if(!($cek)) {
			redirect('Datacenter');
		}

	}

	function index() {

		$data_array = array();
		$data_array['data'] = $this->mdl->get_data();

		$title = "Setting";
		$subtitle = "akun";
		$content = $this->load->view('beranda.php', $data_array, true);

		$this->load_content($title, $subtitle, $content);

	}

	function ubah() {
		$post = $this->input->post();

			$cek = $this->db->where('password', md5($post['pswdlama']))
							->where('id', $this->session->userdata('id'))
						    ->get('admin')->row();
			if(count($cek) < 1) {
				$this->alert_error('Password Anda Salah');
				redirect('Setting');
			} else {
				if($post['ulangpswdbaru'] != $post['pswdbaru']) {
					$this->alert_error('Password tidak cocok');
					redirect('Setting');
				} else if($post['ulangpswdbaru'] == '' || $post['pswdbaru'] == '') {
					$this->alert_error('Password tidak boleh kosong');
					redirect('Setting');

				}
			}

			$data = array(
				'password' => md5($post['pswdbaru'])
			);


		$query = $this->db->where('id', $post['id'])->update('admin', $data);

		$query == true ? $this->alert_info('Berhasil Ubah Data') : $this->alert_error('Gagal Ubah Data');
		redirect('Setting');

	}

}
