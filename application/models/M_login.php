<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function submit($post)
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('username', $post['username']);
		$data = $this->db->get()->row();
		$rows = count($data);

		if ($rows > 0) {
			$this->db->select('*');
			$this->db->from('tbl_user');
			$this->db->where('username', $post['username']);
			$this->db->where('password', $post['password']);
			$dataLogin = $this->db->get()->row();
			$rowsLogin = count($dataLogin);
			if ($rowsLogin > 0) {

				$data_session = array(
					'isLoggedTrue' => TRUE,
					'username' 	   => $dataLogin->username,
					'status'	   => $dataLogin->status
				);
				$this->session->set_userdata( $data_session );
				redirect('dashboard','refresh');
			}
			else
			{
				$this->session->set_flashdata('alert','alert alert-danger');
				$this->session->set_flashdata('message','Password anda salah. Silahkan coba lagi!');
				redirect('login','refresh');
			}
		}
		else
		{
			$this->session->set_flashdata('alert','alert alert-danger');
			$this->session->set_flashdata('message','Username tidak ada. Silahkan coba lagi!');
			redirect('login','refresh');
		}
	}

}
