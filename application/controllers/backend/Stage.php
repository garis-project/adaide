<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
<<<<<<< .merge_file_a12740
=======
        $this->load->model('Stage_model','stage');
>>>>>>> .merge_file_a07832
    }
    public function index() {
        $data['title'] ="Stage Page";
        $data['stage']=$this->stage->viewAll();
<<<<<<< .merge_file_a12740
        templates('stage/index',$data);
=======
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/stage/index');
        $this->load->view('backend/templates/footer');
>>>>>>> .merge_file_a07832
    }

    public function add() {
        $data['title'] ="New Stage";
        $data['area']=$this->stage->viewArea();

        $this->form_validation-> set_rules('stage_name','Stage Name','required|trim');
        $this->form_validation-> set_rules('address','Address','required|trim');
        $this->form_validation-> set_rules('city','City','required|trim');
        $this->form_validation-> set_rules('geocode','Geocode','required|trim');
        if($this->form_validation->run()==false){
<<<<<<< .merge_file_a12740
            templates('stage/add',$data);
=======
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/navbar');
            $this->load->view('backend/templates/sidebar');
            $this->load->view('backend/stage/add');
            $this->load->view('backend/templates/footer');
>>>>>>> .merge_file_a07832
        }else{
            $data_stage=[
                'nama_stage'=>$this->input->post('stage_name'),
                'alamat_stage'=>$this->input->post('address'),
                'kota_stage'=>$this->input->post('city'),
                'geocode'=>$this->input->post('geocode'),
            ];
            $this->db->insert('tb_stage',$data_stage);
<<<<<<< .merge_file_a12740
            redirect('admin/stage');
=======
            redirect('stage');
>>>>>>> .merge_file_a07832
        }
    }

    public function delete(){
        $id=$this->input->post('id_stage');
        $this->db->delete("tb_stage",['id_stage'=>$id]);
<<<<<<< .merge_file_a12740
        redirect('admin/stage');
=======
        redirect('stage');
>>>>>>> .merge_file_a07832
    }  
}