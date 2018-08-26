<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('isLoggedTrue')) {
			$this->session->set_flashdata('alert','alert alert-danger');
			$this->session->set_flashdata('message','Anda harus login terlebih dahulu!');
			redirect('login','refresh');
		}
		$this->load->model('M_barang');
	}

	public function index()
	{
		$data['Barang'] = $this->M_barang->GetDataBarang();
		$this->load->view('Barang/barang', $data);
	}


	public function delete($id)
	{
		$query = $this->M_barang->delete($id);
	}

	public function add()
	{
		$this->load->view('Barang/form_add');
	}

	public function insert()
	{
		$post = $this->input->post();
		$query = $this->M_barang->insert($post);
	}

	public function edit($id)
	{
		$data['inventory'] = $this->M_barang->ambilDataSesuai_ID($id);
		$this->load->view('Barang/form_edit', $data);
	}

	public function update()
	{
		$post = $this->input->post();
		$query = $this->M_barang->update($post);
	}

}
