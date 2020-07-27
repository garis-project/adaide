<?php

function check_login()
{
    $ci=get_instance();
    if(empty($ci->session->userdata('id_login'))){
        redirect('auth');
    }else{
        $id_role=$ci->session->userdata('id_role');
        if($id_role!="1"){
            redirect('auth/blocked');
        }
    }
}
function check_user()
{
    $ci=get_instance();
    if(empty($ci->session->userdata('id_login'))){
        redirect('auth');
    }else{
        $id_role=$ci->session->userdata('id_role');
        if($id_role!="2"){
            redirect('home');
        }
    }
}

function templates($url,$data){
    $ci=get_instance();
    $ci->load->view('backend/templates/header',$data);
    $ci->load->view('backend/templates/navbar');
    $ci->load->view('backend/templates/sidebar');
    $ci->load->view('backend/'.$url);
    $ci->load->view('backend/templates/footer');
}

function uploadBanner(){
    $ci=get_instance();
    $fileName = time().$_FILES['banner-input']['name'];
    $config['upload_path'] = './assets/backend/img/events/'; //path upload
    $config['file_name'] = $fileName;  // nama file
    $config['allowed_types'] = 'jpg|jpeg|png'; //tipe file yang diperbolehkan
    $config['max_size'] = 10000; // maksimal sizze
    $ci->load->library('upload'); //meload librari upload
    $ci->upload->initialize($config);    
    if(! $ci->upload->do_upload('banner-input') ){
        echo $ci->upload->display_errors();exit();
    }
    return $fileName;
}

function uploadProof(){
    $ci=get_instance();
    $fileName = time().$_FILES['image-input']['name'];
    $config['upload_path'] = './assets/backend/img/order/'; //path upload
    $config['file_name'] = $fileName;  // nama file
    $config['allowed_types'] = 'jpg|jpeg|png'; //tipe file yang diperbolehkan
    $config['max_size'] = 10000; // maksimal sizze
    $ci->load->library('upload'); //meload librari upload
    $ci->upload->initialize($config);    
    if(! $ci->upload->do_upload('image-input') ){
        echo $ci->upload->display_errors();exit();
    }
    return $fileName;
}

