<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/3/27
 * Time: 9:13
 */
class User_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();

    }
//    public function get_user($slug = FALSE)
//    {
//        if ($slug === FALSE)
//        {
//            $query = $this->db->get('user');
//            return $query->result_array();
//        }
//
//        $query = $this->db->get_where('news', array('slug' => $slug));
//        return $query->row_array();
//    }
//    public function set_user()
//    {
//        $this->load->helper('url');
//
//        $slug = url_title($this->input->post('title'), 'dash', TRUE);
//
//        $data = array(
//            'title' => $this->input->post('title'),
//            'slug' => $slug,
//            'text' => $this->input->post('text')
//        );
//
//        return $this->db->insert('news', $data);
//    }
}