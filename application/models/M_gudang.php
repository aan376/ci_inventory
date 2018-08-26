<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gudang extends CI_Model {

	public function GetDataGudang()
	{
		$this->db->select('*');
		$this->db->from('tbl_gudang');
		$data = $this->db->get()->result();
		return $data;
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_gudang');
		redirect('gudang');
	}

	public function insert($post)
	{
		$data_inventory = array(
			'kode_barang' => $post['kode_barang'],
			'jenis_barang' => $post['jenis_barang'],
			'tanggal' => $post['tanggal'],
			'jumlah_pemasukan' => $post['jumlah_pemasukan'],
			'jumlah_pengeluaran' => $post['jumlah_pengeluaran'],
			'jumlah_stok' => $post['jumlah_stok'],
			
		);
		$this->db->insert('tbl_gudang', $data_inventory);
		redirect('gudang','refresh');
	}

	public function ambilDataSesuai_ID($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_gudang');
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
			'jumlah_pengeluaran' => $post['jumlah_pengeluaran'],
			'jumlah_stok' => $post['jumlah_stok'],

		);
		$this->db->where('id', $post['id']);
		$this->db->update('tbl_gudang', $data_inventory);
		redirect('gudang','refresh');
	}

}
