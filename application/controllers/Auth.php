<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index() {
        $data['title'] ="Login";
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/auth/login');
        $this->load->view('backend/templates/auth_footer');
    }
    
    public function login() {
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $password=base64_encode($password);
        $user=$this->db->get_where('user',['email'=>$email,'password'=>$password,'id_role'=>1])->row_array();
        if($user){
            $data=[
                'id_login'=>$user['id_user'],
                'nama_user'=>$user['nama_user'],
                'id_role'=>$user['id_role']
            ];
            $this->session->set_userdata($data);
            redirect('admin');
        }else{
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('id_login');
        $this->session->unset_userdata('nama_user');
        $this->session->unset_userdata('id_role');
        redirect('auth');
    }
}