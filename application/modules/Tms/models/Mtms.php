<?php

class Mtms extends CI_Model {

	function get_data() {
		$this->db->order_by('id', 'ASC');
		return $this->db->get('ab_kwk')->result();
	}


	function get_data_modif() {
		$this->db->order_by('id', 'ASC')->where("keterangan != ", "");
		return $this->db->get('ab_kwk')->result();
	}

	function get_keterangan() {
		$this->db->order_by('id', 'ASC');
		return $this->db->get('keterangan')->result();
	}

	function get_tps() {
		$this->db->order_by('id', 'ASC');
		return $this->db->get('tps')->result();
	}

	function insert_data($data) {
		return $this->db->insert('ab_kwk', $data);
	}

	function cek_data($id) {
		$this->db->where('id', $id);
		return $this->db->get('ab_kwk')->row();
	}

	function update_data($data, $id) {
		$this->db->where('id', $id);
		return $this->db->update('ab_kwk', $data);
	}

	function delete_data($id) {
		$this->db->where('id', $id);
		return $this->db->delete('ab_kwk');
	}

	function make_query($kat)
	{
		$this->db->select('ab_kwk.*')
				 		->from("ab_kwk");
			 if($kat == 0) {
				 $this->db->where("keterangan !=", 0)
				 					->or_where("keterangan !=", "");
			 }
			 else if($kat == 1) {
				 $this->db->where("keterangan >=", 1)
				 					->where("keterangan <=", 10);
			 }
			 else if($kat == 2) {
				 $this->db->where("keterangan", "U");
			 }
			 else if($kat == 3) {
				 $this->db->where("keterangan", "BB")
				 					->or_where("keterangan", "B");
			 }

			//  if(isset($_POST["search"]["value"]))
			//  {
			// 			$this->db->like("nama", $_POST["search"]["value"]);
			// 			// $this->db->or_like("jabatan", $_POST["search"]["value"]);
			//  }

			//  if(isset($_POST["order"]))
			//  {
			// 			$this->db->order_by($_POST['order']['0']['column'], $_POST['order']['0']['dir']);
			//  }
			//  else
			//  {
			// 			$this->db->order_by('tps', 'ASC');
			//  }
	}

	function make_datatables($kat){
			 $this->make_query($kat);
			 if($_POST["length"] != -1)
			 {
						$this->db->limit($_POST['length'], $_POST['start']);
			 }
			 $query = $this->db->get();
			 return $query->result();
	}

	function get_filtered_data($kat){
			 $this->make_query($kat);
			 $query = $this->db->get();
			 return $query->num_rows();
	}

	function get_all_data($kat)
	{
			 $this->db->select("*");
			 $this->db->from("ab_kwk");
			 return $this->db->count_all_results();
	}

}
