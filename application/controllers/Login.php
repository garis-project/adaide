<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

	public function index()
	{
		$data['title'] = "ADAIDE";
		$this->load->view('frontend/auth/login');
		$this->load->view('frontend/templates/footer');
	}
}
