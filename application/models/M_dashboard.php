<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function ambil_jumlah_baris($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$data = $this->db->get()->num_rows();
		return $data;
	}

}
