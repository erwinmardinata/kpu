<?php

class Mketerangan extends CI_Model {

	function get_data() {
		$this->db->order_by('id', 'ASC');
		return $this->db->get('keterangan')->result();
	}

	function insert_data($data) {
		return $this->db->insert('keterangan', $data);
	}

	function cek_data($id) {
		$this->db->where('id', $id);
		return $this->db->get('keterangan')->row();
	}

	function update_data($data, $id) {
		$this->db->where('id', $id);
		return $this->db->update('keterangan', $data);
	}

	function delete_data($id) {
		$this->db->where('id', $id);
		return $this->db->delete('keterangan');
	}

	function make_query()
	{
		$this->db->select('keterangan.*')
				 ->from("keterangan");
			 if(isset($_POST["search"]["value"]))
			 {
						$this->db->like("nama", $_POST["search"]["value"]);
						// $this->db->or_like("jabatan", $_POST["search"]["value"]);
			 }
			 if(isset($_POST["order"]))
			 {
						$this->db->order_by($_POST['order']['0']['column'], $_POST['order']['0']['dir']);
			 }
			 else
			 {
						$this->db->order_by('id', 'ASC');
			 }
	}

	function make_datatables(){
			 $this->make_query();
			 if($_POST["length"] != -1)
			 {
						$this->db->limit($_POST['length'], $_POST['start']);
			 }
			 $query = $this->db->get();
			 return $query->result();
	}

	function get_filtered_data(){
			 $this->make_query();
			 $query = $this->db->get();
			 return $query->num_rows();
	}

	function get_all_data()
	{
			 $this->db->select("*");
			 $this->db->from("keterangan");
			 return $this->db->count_all_results();
	}

}
