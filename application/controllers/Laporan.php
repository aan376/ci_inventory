<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('isLoggedTrue')) {
			$this->session->set_flashdata('alert','alert alert-danger');
			$this->session->set_flashdata('message','Anda harus login terlebih dahulu!');
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$this->load->view('Laporan/laporan');
	}

	
}
