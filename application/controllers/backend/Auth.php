<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

    }
    
    public function index() {
        if($this->session->userdata('id_role')=="1"){
            redirect("admin/dashboard");
        }

        $data['title'] ="Login";
        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
        if ($this->form_validation->run()==false){
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/auth/login');
            $this->load->view('backend/templates/auth_footer');
        }else{
            $this->_login();
        }
    }

    public function _login() {
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $password=md5($password);
        $user=$this->db->get_where('tb_user',['email_user'=>$email,'password'=>$password,'id_role'=>1])->row_array();
        if($user){
            $data=[
                'id_login'=>$user['id_user'],
                'nama_user'=>$user['nama_user'],
                'id_role'=>$user['id_role']
            ];
            $this->session->set_userdata($data);
            redirect('admin/dashboard');   
        }else{
            $message = "Wrong Password/Username";
            echo "<script type='text/javascript'>alert('$message');";
            echo "window.location.href = window.location.href;</script>";
        }
    }

    public function logout()
    {
        $data=['id_login','nama_user','id_role'];
        $this->session->unset_userdata($data);
        redirect('admin/auth');
    }
}