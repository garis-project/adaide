<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Login User";
		
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
        if ($this->form_validation->run()==false){
			$this->load->view('frontend/templates/auth_header',$data);
			$this->load->view('frontend/auth/login');
			$this->load->view('frontend/templates/footer');
        }else{
            $this->_login();
        }
	}

	public function _login() {
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$password=base64_encode($password);
		$user=$this->db->get_where('tb_user',['email_user'=>$email,'password'=>$password,'id_role'=>1])->row_array();
		if($user){
		    $data=[
		        'id_login'=>$user['id_user'],
		        'nama_user'=>$user['nama_user'],
		        'id_role'=>$user['id_role']
		    ];
		    if($user['id_status']==1||$user['id_status']==2){
		        $this->session->set_userdata($data);
		        redirect('home');
		    }elseif($user['id_status']==3){
		        $message = "Your Account is Online";
		        echo "<script type='text/javascript'>alert('$message');";
		        echo "window.location.href = window.location.href;</script>";
		    }elseif($user['id_status']==4){
		        $message = "Your Account Hasbeen Banned";
		        echo "<script type='text/javascript'>alert('$message');";
		        echo "window.location.href = window.location.href;</script>";
		    }else{
		        $message = "No Role";
		        echo "<script type='text/javascript'>alert('$message');";
		        echo "window.location.href = window.location.href;</script>";
		    } 
		}else{
		    $message = "Wrong Password/Username";
		    echo "<script type='text/javascript'>alert('$message');";
		    echo "window.location.href = window.location.href;</script>";
		}
	}

	  public function register() {
        $data['title'] = "Register User";
        $this->form_validation-> set_rules('name','Name','required|trim');
        $this->form_validation-> set_rules('gender','Gender','required|trim');
        $this->form_validation-> set_rules('phone','Phone Number','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[tb_user.email_user]',[
            'is_unique'=>'This email has already registered!'
        ]);
        $this->form_validation->set_rules('phone','Phone','required|trim|is_unique[tb_user.kontak]',[
            'is_unique'=>'This Phone Number has already registered!'
        ]);
        $this->form_validation-> set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
            'matches'=>'Password dont matches!',
            'min_length'=>'Password too short!'
        ]);
        $this->form_validation-> set_rules('password2','Password Confirmation','required|trim|min_length[3]|matches[password1]');
        $this->form_validation-> set_rules('agree','Agreements','required');
        if($this->form_validation->run()==false){
            $this->load->view('frontend/templates/auth_header', $data);
			$this->load->view('frontend/auth/register');
			$this->load->view('frontend/templates/footer');
        }else{
            $data=[
                'id_user'=>time(),
                'nama_user'=>htmlspecialchars($this->input->post('name')),
                'gender_user'=>htmlspecialchars($this->input->post('gender')),
                'kontak'=>htmlspecialchars("0".$this->input->post('phone')),
                'email_user'=>htmlspecialchars($this->input->post('email')),
                'password'=>base64_encode($this->input->post('password1')),
                'alamat'=>htmlspecialchars($this->input->post('address')),
                'id_role'=>2,
                'id_status'=>1
            ];
            $this->db->insert('tb_user',$data);
            redirect('auth');
        }
	}
	
	public function logout()
    {
        $data=['id_login','nama_user','id_role'];
        $this->session->unset_userdata($data);
        redirect('auth');
    }
    
    
}
