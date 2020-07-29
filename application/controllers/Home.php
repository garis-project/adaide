<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public function index() {
		$data['title'] ="ADAIDE";
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/home/index');
		$this->load->view('frontend/templates/footer');
	}
	public function wedo() {
		$data['title'] ="ADAIDE";
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/home/wedo');
		$this->load->view('frontend/templates/footer');
	}
	public function bicara() {
		$data['title'] ="ADAIDE";
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/home/bicara');
		$this->load->view('frontend/templates/footer');
	}
	public function kitabukan() {
		$data['title'] = "ADAIDE";
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/home/kitabukan');
		$this->load->view('frontend/templates/footer');
	}
	public function photo() {
		$data['title'] = "ADAIDE";http://localhost:8080/adaide/assets/frontend//img/logo-putih.png
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/home/photo');
		$this->load->view('frontend/templates/footer');
	}
	public function merch() {
		$data['title'] = "ADAIDE";
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/home/merch');
		$this->load->view('frontend/templates/footer');
	}
	public function creative() {
		$data['title'] = "ADAIDE";
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/home/creative');
		$this->load->view('frontend/templates/footer');
	}
	public function userprofile() {
		$data['title'] = "ADAIDE";
		$this->load->view('frontend/templates/auth_header', $data);
		$this->load->view('frontend/home/userprofile');
		$this->load->view('frontend/templates/footer');
	}
}
