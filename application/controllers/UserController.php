<?php


class UserController extends CI_Controller {

    public function index() {

        $data['select_all_nav']         = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['select_all_banner']      = $this->db->order_by('id', 'DESC')->get('banner')->result_array();
        $data['select_all_services']    = $this->db->get('services')->result_array();
        $data['select_all_title']       = $this->db->get('about_title')->result_array();
        $data['select_all_span']        = $this->db->get('about')->result_array();
        $data['select_all_img']         = $this->db->get('about_img')->result_array();
        $data['select_footer']          = $this->db->get('footer')->result_array();
        $data['select_out_off']         = $this->db->get('out_off')->result_array();
        $data['select_smm']             = $this->db->get('smm')->result_array();
        $this->load->view('user/index', $data);

    }

}
