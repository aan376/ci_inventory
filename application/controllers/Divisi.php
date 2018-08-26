<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('isLoggedTrue')) {
			$this->session->set_flashdata('alert','alert alert-danger');
			$this->session->set_flashdata('message','Anda harus login terlebih dahulu!');
			redirect('login','refresh');
		}
		$this->load->model('M_Divisi');
	}

	public function index()
	{
		$data['inventory'] = $this->M_Divisi->getDataInventory();
		$this->load->view('Divisi/divisi', $data);
	}


	public function delete($id)
	{
		$query = $this->M_Divisi->delete($id);
	}

	public function add()
	{
		$this->load->view('divisi/form_add');
	}

	public function insert()
	{
		$post = $this->input->post();
		$query = $this->M_Divisi->insert($post);
	}

	public function edit($id)
	{
		$data['divisi'] = $this->M_Divisi->ambilDataSesuai_ID($id);
		$this->load->view('divisi/form_edit', $data);
	}

	public function update()
	{
		$post = $this->input->post();
		$query = $this->M_Divisi->update($post);
	}

}

