<?php

class Mopd extends CI_Model {

	function get_data() {
		$this->db->order_by('id', 'ASC');
		$this->db->order_by('status', 'DESC');
		return $this->db->get('opd')->result();
	}

	function insert_data($data) {
		return $this->db->insert('opd', $data);
	}

	function cek_data($id) {
		$this->db->where('id', $id);
		return $this->db->get('opd')->row();
	}

	function update_data($data, $id) {
		$this->db->where('id', $id);
		return $this->db->update('opd', $data);
	}

	function delete_data($id) {
		$this->db->where('id', $id);
		return $this->db->delete('opd');
	}

	function get_kategori() {
		$this->db->order_by('id', 'ASC');
		return $this->db->get('kategori_sekolah')->result();
	}

	function make_query()
	{
		$this->db->select('a.*')
				 ->from('opd a');
			 if(isset($_POST["search"]["nama"]))
			 {
						$this->db->like("a.nama", $_POST["search"]["value"]);
						// $this->db->like("ks.kategori", $_POST["search"]["value"]);
			 }
			 if(isset($_POST["order"]))
			 {
						$this->db->order_by($_POST['order']['0']['column'], $_POST['order']['0']['dir']);
			 }
			 else
			 {
						$this->db->order_by('status', 'DESC');
						$this->db->order_by('id', 'DESC');
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
			 $this->db->from("opd");
			 return $this->db->count_all_results();
	}


}
