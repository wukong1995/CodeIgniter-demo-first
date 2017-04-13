<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/3/24
 * Time: 15:06
 */
class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
//        $this->load->model('news_model');
        $this->load->helper('url_helper');
        $this->load->library("session");
    }
    public function index()
    {
        $data['user'] = $this->session->userdata('user');
        $this->load->view('index',$data);
    }

}