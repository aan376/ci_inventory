<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('isLoggedTrue')) {
			$this->session->set_flashdata('alert','alert alert-danger');
			$this->session->set_flashdata('message','Anda harus login terlebih dahulu!');
			redirect('login','refresh');
		}
		$this->load->model('M_gudang');
	}

	public function index()
	{
		$data['gudang'] = $this->M_gudang->GetDataGudang();
		$this->load->view('Gudang/gudang', $data);
	}


	public function delete($id)
	{
		$query = $this->M_gudang->delete($id);
	}

	public function add()
	{
		$this->load->view('Gudang/form_add');
	}

	public function insert()
	{
		$post = $this->input->post();
		$query = $this->M_gudang->insert($post);
	}

	public function edit($id)
	{
		$data['inventory'] = $this->M_gudang->ambilDataSesuai_ID($id);
		$this->load->view('Gudang/form_edit', $data);
	}

	public function update()
	{
		$post = $this->input->post();
		$query = $this->M_gudang->update($post);
	}

}
