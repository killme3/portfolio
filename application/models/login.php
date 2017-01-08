<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('security');
	}

	public function cek()
	{
		$name = set_value('name');
		$password = set_value('password');

		$hasil = $this->db->select('password', $password)
						  ->where('username', $name)
						  ->limit(1)
						  ->get('user');

		if ($hasil->num_rows() > 0 ) {
			$hash = $hasil->row_array();
			$hashed = $hash['password'];
			return $passwordhash = password_verify($password, $hashed);
		} else{
			return array();
		}
	}

	public function all()
	{
		$hasil = $this->db->get('contact_me');
		if ($hasil->num_rows() > 0 ) {
			return $hasil->result();
		} else{
			return array();
		}
	}

}

/* End of file login.php */
/* Location: ./application/models/login.php */