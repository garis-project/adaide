<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Event extends CI_Controller
{
  var $token;
  function __construct(){
    parent::__construct(); 
    $this->token='x';
  }   
  
  public function index()
  {
    $data['events']=$this->events->viewActive();
    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/auth_header',$data);
    $this->load->view('frontend/event/event');
    $this->load->view('frontend/templates/footer');
  }

  public function test()
  {
    $data['events']=$this->events->viewActive();

    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/auth_header',$data);
    $this->load->view('frontend/event/eventdetail');
    $this->load->view('frontend/templates/footer');
  }
}
