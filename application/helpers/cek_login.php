<?php

function login_admin()
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

