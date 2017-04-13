<?php
class Blog extends CI_Controller {

    public function index()
    {
    	$data['title'] = '参数data.title';
		$this->load->view('templates/header', $data);
        $this->load->view('blog/index', $data);
        $this->load->view('templates/footer');    	
    }
     public function comments()
    {
        echo 'Look at this!';
    }
}