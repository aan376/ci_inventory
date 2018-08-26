<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inventory extends CI_Model {

	public function getDataInventory()
	{
		$this->db->select('*');
		$this->db->from('tbl_inventory');
		$data = $this->db->get()->result();
		return $data;
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_inventory');
		redirect('inventory');
	}

	public function insert($post)
	{
		$data_inventory = array(
			'kode_barang' => $post['kode_barang'],
			'nama_barang' => $post['nama_barang'],
			'nama_pembeli' => $post['nama_pembeli'],
			'tanggal' => $post['tanggal'],
			'harga' => $post['harga'],
			'jumlah_pengeluaran' => $post['jumlah_pengeluaran'],
			'jumlah_stok' => $post['jumlah_stok'],
			
		);
		$this->db->insert('tbl_inventory', $data_inventory);
		redirect('inventory','refresh');
	}

	public function ambilDataSesuai_ID($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_inventory');
		$this->db->where('id', $id);
		$data = $this->db->get()->row();
		return $data;
	}

	public function update($post)
	{
		$data_inventory = array(
			'kode_barang' => $post['kode_barang'],
			'nama_barang' => $post['nama_barang'],
			'nama_pembeli' => $post['nama_pembeli'],
			'tanggal' => $post['tanggal'],
			'harga' => $post['harga'],
			'jumlah_pengeluaran' => $post['jumlah_pengeluaran'],
			'jumlah_stok' => $post['jumlah_stok'],

		);
		$this->db->where('id', $post['id']);
		$this->db->update('tbl_inventory', $data_inventory);
		redirect('inventory','refresh');
	}

}
