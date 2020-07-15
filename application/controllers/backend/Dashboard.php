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
        templates('admin/index',$data);
    }
}