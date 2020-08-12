<?php

class Msetting extends CI_Model {

	function get_data() {

		$this->db->where('id', $this->session->userdata('id'));
		return $this->db->get('admin')->row();

	}

	function get_data_detail_permohonan($id) {

		$this->db->select('dper.*')
				 ->from("data_permohonan dper")
 				 ->where('dper.id_user', $this->session->userdata('id'))
 				 ->where('dper.id', $id)
				 ->order_by('dper.id', 'DESC');

		return $this->db->get()->row();

	}

	function cek_data($id) {

		$this->db->where('id', $id);
		return $this->db->get('data_permohonan')->row();

	}

	function get_data_ternak($id) {

		$this->db->select('djk.*')
				 ->from('data_jumlah_komoditi djk')
				 ->join('data_permohonan dper', 'dper.id=djk.id_data_permohonan')
 				 ->where('dper.id_user', $this->session->userdata('id'))
 				 ->where('djk.id_data_permohonan', $id);

		return $this->db->get()->result();

	}


}
