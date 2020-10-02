<?php

Class Fungsi {

    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    function user_login(){
        $this->ci->load->model('Auth/auth_model');
        $user_id = $this->ci->session->userdata('nama');
        $user_data = $this->ci->auth_model->get($user_id)->row();
        return $user_data;
    }

}