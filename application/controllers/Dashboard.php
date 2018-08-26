<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('isLoggedTrue')) {
			$this->session->set_flashdata('alert','alert alert-danger');
			$this->session->set_flashdata('message','Anda harus login terlebih dahulu!');
			redirect('login','refresh');
		}
		$this->load->model('M_dashboard');
	}

	public function index()
	{
		$data['inventory'] = $this->M_dashboard->ambil_jumlah_baris('tbl_inventory');
		$data['divisi'] = $this->M_dashboard->ambil_jumlah_baris('tbl_divisi');
		$data['barang'] = $this->M_dashboard->ambil_jumlah_baris('tbl_barang');
		$data['divisi'] = $this->M_dashboard->ambil_jumlah_baris('tbl_divisi');
		$data['gudang'] = $this->M_dashboard->ambil_jumlah_baris('tbl_gudang');

		$this->load->view('Dashboard/dashboard', $data);
	}

	
}
