<?php


class ContFormController extends CI_controller {

    public function form() {
        $data['select_all_nav']         = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $this->load->view('contactForm/index', $data);
    }

    public function form_add_act() {

        $f_name         = $_POST['name'];
        $f_email        = $_POST['email'];
        $f_phone        = $_POST['phone'];
        $f_services     = $_POST['service'];
        $f_type         = $_POST['type-product'];
        $f_message      = $_POST['message'];

        if(!empty($f_name) && !empty($f_email) && !empty($f_phone) && !empty($f_services) && !empty($f_type) && !empty($f_message)) {

            $data = [
                "f_name"                => $f_name,
                "f_email"               => $f_email,
                "f_phone"               => $f_phone,
                "f_service"             => $f_services,
                "f_type-product"        => $f_type,
                "f_message"             => $f_message
            ];

            $this->db->insert('allform', $data);
            $this->session->set_flashdata('SUCC','Success Form!');
            redirect(base_url(''));
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
        redirect(base_url(''));
    }
}
