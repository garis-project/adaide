<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Event extends CI_Controller
{
  public function index()
  {
    $data['events']=$this->events->viewActive();
    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/auth_header',$data);
    $this->load->view('frontend/event/event');
    $this->load->view('frontend/templates/footer');
  }

  public function orderlist()
  {
    $data['events']=$this->events->viewActive();
    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/auth_header',$data);
    $this->load->view('frontend/event/orderlist');
    $this->load->view('frontend/templates/footer');
  }

  public function uploadbukti()
  {
    $data['events']=$this->events->viewActive();

    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/auth_header',$data);
    $this->load->view('frontend/event/uploadbukti');
    $this->load->view('frontend/templates/footer');
  }

  public function detailorder()
  {
    $data['events']=$this->events->viewActive();

    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/auth_header',$data);
    $this->load->view('frontend/event/detailorder');
    $this->load->view('frontend/templates/footer');
  }

  public function detail()
  {
    $data['events']=$this->events->viewActive();

    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/auth_header',$data);
    $this->load->view('frontend/event/ticket');
    $this->load->view('frontend/templates/footer');
  }

  public function eventdetail()
  {
    $data['events']=$this->events->viewActive();

    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/auth_header',$data);
    $this->load->view('frontend/event/eventdetail');
    $this->load->view('frontend/templates/footer');
  }
}
