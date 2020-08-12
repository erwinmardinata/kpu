<?php

class Mtransaksi extends CI_Model {

	// function get_data() {
	// 	$this->db->order_by('id', 'ASC');
	// 	return $this->db->get('buku')->result();
	// }
	//
	// function get_kategori() {
	// 	$this->db->order_by('id', 'ASC');
	// 	return $this->db->get('kategori_buku')->result();
	// }
	//
	// function get_opd() {
	// 	$this->db->order_by('id', 'ASC');
	// 	return $this->db->get('opd')->result();
	// }
	//
	function insert_data($data) {
		return $this->db->insert('transaksi', $data);
	}
	//
	// function cek_data($id) {
	// 	$this->db->where('id', $id);
	// 	return $this->db->get('buku')->row();
	// }
	//
	// function update_data($data, $id) {
	// 	$this->db->where('id', $id);
	// 	return $this->db->update('buku', $data);
	// }
	//
	function delete_data($id) {
		$this->db->where('id', $id);
		return $this->db->delete('transaksi');
	}
	//
	function make_query()
	{
		$this->db->select('transaksi.*')
				 ->from("transaksi");
			 if(isset($_POST["search"]["value"]))
			 {
						$this->db->like("transaksi.tanggal", $_POST["search"]["value"]);
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
			 $this->db->from("transaksi");
			 return $this->db->count_all_results();
	}

}
