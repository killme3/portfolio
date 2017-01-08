<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bek_en extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('login');
	}

	public function login()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<p  style="color:red">', '</p>');

		if ($this->form_validation->run() === FALSE ) {

			$this->load->view('login');
		} else{
			$valid_users = $this->login->cek();
			if ($valid_users) {
				$data = array('nama' => 'me');
				$this->session->set_userdata($data);
				redirect('bek_en/me');
			} else{
				$this->session->set_flashdata('error', 'Wrong Password and Username!');
				$this->load->view('login');
			}
		}
	}

	public function me()
	{
		if ($this->session->userdata('nama') == 'me') {
			$data['new'] = $this->login->all();
			$this->load->view('me', $data);
		} else{
			$this->load->view('login');
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('bek_en/login');
	}

}

/* End of file bek-en.php */
/* Location: ./application/controllers/bek-en.php */