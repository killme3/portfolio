<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Me extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model('contact');
		
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function skill()
	{
		$this->load->view('skill');
	}

	public function project()
	{
		$this->load->view('project');
	}

	public function contact()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean|trim');
		$this->form_validation->set_rules('text', 'Text', 'required|xss_clean|trim');

		if ($this->form_validation->run() === FALSE ) {
			$this->load->view('contact');
		} else{
			$this->contact->entry();
			redirect('me/contact');
		}

	}

}
