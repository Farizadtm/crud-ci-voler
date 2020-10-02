<?php

function udah_login() {
    $ci =& get_instance();
    $user_session = $ci->session->userdata('userid');
    if($user_session) {
        redirect('dashboard');
    }
}

function belum_login() {
    $ci =& get_instance();
    $user_session = $ci->session->userdata('userid');
    if(!$user_session) {
        redirect('auth');
    }
}