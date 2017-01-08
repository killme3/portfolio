<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model {

	public function __construct()
	{
		$this->load->helper('security');
	}

	public function entry()
	{
		$name = $this->security->xss_clean($this->input->post('name'));
		$email = $this->security->xss_clean($this->input->post('email'));
		$text = $this->security->xss_clean($this->input->post('text'));
		$insert = array(
				'name' => $name,
				'email' => $email,
				'text' => $text,
				'tgl' => date('Y-m-d H:i:s')
		);

		$this->db->insert('contact_me', $insert);
	}

}

/* End of file contact.php */
/* Location: ./application/models/contact.php */