<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_divisi extends CI_Model {

	public function getDataInventory()
	{
		$this->db->select('*');
		$this->db->from('tbl_divisi');
		$data = $this->db->get()->result();
		return $data;
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_divisi');
		redirect('divisi','refresh');
	}

	public function insert($post)
	{
		$data_divisi = array(
			'nama' => $post['nama'],
			'status' => $post['status'],
		);
		$this->db->insert('tbl_divisi', $data_divisi);
		redirect('divisi','refresh');
	}

	public function ambilDataSesuai_ID($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_divisi');
		$this->db->where('id', $id);
		$data = $this->db->get()->row();
		return $data;
	}

	public function update($post)
	{
		$data_inventory = array(
			'nama' => $post['nama'],
			'status' => $post['status'],
		);
		$this->db->where('id', $post['id']);
		$this->db->update('tbl_divisi', $data_inventory);
		redirect('divisi','refresh');
	}

}
