<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index() {
		$data['title'] ="Login";
		$this->load->view('backend/auth-login', $data);
    }
    
    public function login() {
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $password=$this->kriptografi->enkripsi($password);
        $user=$this->db->get_where('user',['email'=>$email,'password'=>$password,'id_role'=>1])->row_array();
        if($user){
            $data=[
                'id_login'=>$user['id_user'],
                'id_role'=>$user['id_role']
            ];
            $this->session->set_userdata($data);
            redirect('admin');
        }else{
            redirect('auth');
        }
	}
}