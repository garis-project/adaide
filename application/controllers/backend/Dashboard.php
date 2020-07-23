<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        check_login();
    }
    public function index() {
        $data['title'] ="Admin Page";
        $data['total']=[
            'user'=>$this->user->total(),
            'event'=>$this->events->total(),
            'stage'=>$this->stage->total(),
            'ticket'=>$this->stage->total(),
        ];
        templates('admin/index',$data);
    }
}
