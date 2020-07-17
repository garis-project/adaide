<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
	public function index()
	{
		$data['title'] = "ADAIDE";
		$this->load->view('frontend/templates/auth_header');
		$this->load->view('frontend/auth/login');
		$this->load->view('frontend/templates/footer');
	}
	public function register()
	{
		$data['title'] = "ADAIDE";
		$this->load->view('frontend/templates/auth_header');
		$this->load->view('frontend/auth/register');
		$this->load->view('frontend/templates/footer');
	}
}
