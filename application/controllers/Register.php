<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Register extends CI_Controller
{

	public function index()
	{
		$data['title'] = "ADAIDE";
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/home/register');
		$this->load->view('frontend/templates/footer');
	}
}
