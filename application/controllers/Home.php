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
}
