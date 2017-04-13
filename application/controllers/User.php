<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/3/24
 * Time: 14:11
 */
class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
//        $this->load->model('news_model')
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
        $this->load->helper('url_helper');
        $this->load->library("session");
    }

    public function login() {
        $this->output->set_header('Content-Type: application/json; charset=utf-8');

        if (empty($_POST['name']) || empty($_POST['password']))
        {
            echo json_encode(array(
                'success' => 0,
                'msg' => '填写信息不完整',
                'name_err'=> 1
            ));
            return ;
        } else {

            $newdata = array(
                'username'  =>  $_POST ['name'] ,
                'luptime'   =>time()
            );

            $query = $this->db->get_where( 'user', array (
                'name' => $_POST['name']
            ), 1, 0 );

            if (count($query->result()) == 0) {
                echo json_encode(array(
                    'success' => 0,
                    'msg' => '用户名不存在',
                    'name_err'=> 1
                ));
                return ;
            }

            foreach ( $query->result () as $row ) {
                $password = $row->password;
            }

            if ($password == $_POST ['password']) {
                $this->session->set_userdata('user',$newdata);

                echo json_encode(array(
                    'success' => 1,
                    'msg' => '登录成功',
                    'name_err'=> 1
                ));
                return ;
            } else {
                echo json_encode(array(
                    'success' => 1,
                    'msg' => '密码不匹配',
                    'pwd_err'=> 1
                ));
                return ;
            }
        }

    }
    public function logout() {
        $this->session->unset_userdata('user');
        redirect('');
    }
    public function profile() {
        $data['user'] = $this->session->userdata('user');
        $this->load->view('user/profile',$data);
    }
    public function changeprofile() {
        $data['user'] = $this->session->userdata('user');
        $this->load->view('user/changeprofile',$data);
    }
}