<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('isLoggedTrue')) {
			$this->session->set_flashdata('alert','alert alert-danger');
			$this->session->set_flashdata('message','Anda harus login terlebih dahulu!');
			redirect('login','refresh');
		}
		$this->load->model('M_inventory');
	}

	public function index()
	{
		$data['inventory'] = $this->M_inventory->getDataInventory();
		$this->load->view('Inventory/inventory', $data);
	}


	public function delete($id)
	{
		$query = $this->M_inventory->delete($id);
	}

	public function add()
	{
		$this->load->view('Inventory/form_add');
	}

	public function insert()
	{
		$post = $this->input->post();
		$query = $this->M_inventory->insert($post);
	}

	public function edit($id)
	{
		$data['inventory'] = $this->M_inventory->ambilDataSesuai_ID($id);
		$this->load->view('Inventory/form_edit', $data);
	}

	public function update()
	{
		$post = $this->input->post();
		$query = $this->M_inventory->update($post);
	}

}
