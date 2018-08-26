<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	public function GetDataBarang()
	{
		$this->db->select('*');
		$this->db->from('tbl_barang');
		$data = $this->db->get()->result();


		// $query ="select * from  tbl_barang ";

		// $data = $this->db->query($query)->result();
		return $data;
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_barang');
		redirect('barang');
	}

	public function insert($post)
	{
		$data_inventory = array(
			'kode_barang' => $post['kode_barang'],
			'jenis_barang' => $post['jenis_barang'],
			'tanggal' => $post['tanggal'],
			'jumlah_pemasukan' => $post['jumlah_pemasukan'],
			'jumlah_stok' => $post['jumlah_stok'],
			
		);
		$this->db->insert('tbl_barang', $data_inventory);
		redirect('barang','refresh');
	}

	public function ambilDataSesuai_ID($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_barang');
		$this->db->where('id', $id);
		$data = $this->db->get()->row();
		return $data;
	}

	public function update($post)
	{
		$data_inventory = array(
			'kode_barang' => $post['kode_barang'],
			'jenis_barang' => $post['jenis_barang'],
			'tanggal' => $post['tanggal'],
			'jumlah_pemasukan' => $post['jumlah_pemasukan'],
			'jumlah_stok' => $post['jumlah_stok'],

		);
		$this->db->where('id', $post['id']);
		$this->db->update('tbl_barang', $data_inventory);
		redirect('barang','refresh');
	}

}
