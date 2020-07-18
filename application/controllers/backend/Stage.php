<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Stage_model','stage');
    }
    public function index() {
        $data['title'] ="Stage Page";
        $data['stage']=$this->stage->viewAll();
        templates('stage/index',$data);
    }

    public function add() {
        $data['title'] ="New Stage";
        $data['area']=$this->stage->viewArea();

        $this->form_validation-> set_rules('stage_name','Stage Name','required|trim');
        $this->form_validation-> set_rules('address','Address','required|trim');
        $this->form_validation-> set_rules('city','City','required|trim');
        $this->form_validation-> set_rules('geocode','Geocode','required|trim');
        if($this->form_validation->run()==false){
            templates('stage/add',$data);
        }else{
            $data_stage=[
                'nama_stage'=>$this->input->post('stage_name'),
                'alamat_stage'=>$this->input->post('address'),
                'kota_stage'=>$this->input->post('city'),
                'geocode'=>$this->input->post('geocode'),
            ];
            $this->db->insert('tb_stage',$data_stage);
            redirect('admin/stage');
        }
    }

    public function delete(){
        $id=$this->input->post('id_stage');
        $this->db->delete("tb_stage",['id_stage'=>$id]);
        redirect('admin/stage');
    }
}
