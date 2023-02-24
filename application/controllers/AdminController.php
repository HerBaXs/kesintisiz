<?php


class AdminController extends CI_controller
{
    public function dashboard()
    {
        $data['select_all_nav']     = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['select_all_banner']  = $this->db->order_by('id', 'DESC')->get('banner')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();

        $this->load->view('admin/home/dashboard', $data);
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function login_act()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password)){

            $data = [
                "username" => $username,
                "password" => $password
            ];

            $result = $this->db->where($data)->get('admin')->row_array();

            if($result){

                $_SESSION['admin_id'] = $result['id'];
                redirect(base_url('Dashboard'));

            }else{

                $this->session->set_flashdata('err', 'Invalid!');
                redirect($_SERVER['HTTP_REFERER']);

            }
        }else{
            $this->session->set_flashdata('err', 'Bosluq buraxmayin!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function login_out()
    {
        unset($_SESSION['admin_id']);
        redirect(base_url('Login'));
    }

    public function admin_img()
    {
        $data['admin_img'] = $this->db->where('id', $id)->get('admin')->row_array();
    }

    public function home_view()
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array(); 

        $this->load->view('admin/home/home_view', $data);
    }

    public function home_edit($id)
    {
        $data['edit_home']      = $this->db->where('id', $id)->get('header')->row_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $this->load->view('admin/home/home_edit', $data);
    }

    public function home_edit_act($id)
    {
        $home           = $_POST['home'];
        $services       = $_POST['services'];
        $about          = $_POST['about'];
        $testimonials   = $_POST['testimonials'];
        $communication  = $_POST['communication'];

        if(!empty($home) && !empty($services) && !empty($about) && !empty($testimonials) && !empty($communication)) {

                $hderdata = [
                    "home"          => $home,
                    "services"      => $services,
                    "about"         => $about,
                    "testimonials"  => $testimonials,
                    "communication" => $communication,
                ];

                $this->db->where('id', $id)->update('header', $hderdata);
                redirect(base_url('Dashboard'));

            }else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function banner_add()
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $this->load->view('admin/home/banner_add', $data);
    }

    public function banner_add_action()
    {
        $title      = $_POST['title'];
        $span       = $_POST['span'];
        $videourl   = $_POST['videourl'];

        if (!empty($title) && !empty($span) && !empty($videourl)) {
            $data = [
                "title"    => $title,
                "span"     => $span,
                "videourl" => $videourl
            ];
            $this->db->insert('banner', $data);
            redirect(base_url('Dashboard'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function banner_view()
    {
        $data['select_all_nav']     = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['select_all_banner']  = $this->db->order_by('id', 'DESC')->get('banner')->result_array();
        $this->load->view('admin/home/banner_view', $data);
    }

    public function banner_edit($id)
    {
        $data['banner_edit']    = $this->db->where('id', $id)->get('banner')->row_array();
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $this->load->view('admin/home/banner_edit', $data);
    }

    public function banner_edit_act($id)
    {
        $title      = $_POST['title'];
        $span       = $_POST['span'];
        $videourl   = $_POST['videourl'];

        if (!empty($title) && !empty($span) && !empty($videourl)) {
            $bandata = [
                "title"     => $title,
                "span"      => $span,
                "videourl"  => $videourl
            ];
            $this->db->where('id', $id)->update('banner', $bandata);
            redirect(base_url('Dashboard'));
        }else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function banner_del($id)
    {
        $this->db->where('id', $id)->delete('banner');
        redirect(base_url('Dashboard'));
    }

    public function services_list()
    {
        $data['select_all_nav']         = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['select_all_services']    = $this->db->order_by('id', 'DESC')->get('services')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $this->load->view('admin/services/services_list', $data);
    }

    public function services_add()
    {
        $data['select_all_nav']     = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $this->load->view('admin/services/services_add', $data);
    }

    public function services_add_act()
    {
        $title  = $_POST['title'];
        $span   = $_POST['span'];

        if(!empty($title) && !empty($span)) {
            $config['upload_path']          = './uploads/admin/servicesfile/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|mp4|svg';
            // $config['encrypt_name']         = TRUE;
             $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')) {
                $file = $this->upload->data('file_name');

                $data = [
                    "title" => $title,
                    "span"  => $span,
                    "file"  => $file
                ];

                $this->db->insert('services', $data);
                redirect(base_url('Services'));

            }else{

                $data = [
                    "title" => $title,
                    "span"  => $span
                ];

                $this->db->insert('services', $data);
                redirect(base_url('Services'));

            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function services_edit($id)
    {
        $data['select_all_nav']    = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['services_edit']     = $this->db->where('id', $id)->get('services')->row_array();
        $this->load->view('admin/services/services_edit', $data);
    }

    public function services_edit_act($id)
    {
        $title  = $_POST['title'];
        $span   = $_POST['span'];

        if(!empty($title) && !empty($span)) {
            $config['upload_path']      = './uploads/admin/servicesfile/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg|mp3|mp4|svg';
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')) {
                $file = $this->upload->data('file_name');

                $data = [
                    "title" => $title,
                    "span"  => $span,
                    "file"  => $file
                ];

                $this->db->where('id', $id)->update('services', $data);
                redirect(base_url('Services'));
            }else{
                $data = [
                    "title" => $title,
                    "span"  => $span
                ];

                $this->db->where('id', $id)->update('services', $data);
                redirect(base_url('Services'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function services_del($id)
    {
        $this->db->where('id', $id)->delete('services');
        redirect(base_url('Services'));
    }

    public function services_view()
    {
        $data['select_all_nav']         = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['select_all_services']    = $this->db->order_by('id', 'DESC')->get('services')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $this->load->view('admin/services/services_view', $data);
    }

    public function about_list()
    {
        $data['select_all_nav']     = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['select_all_about']   = $this->db->get('about')->result_array();
        $data['select_title']       = $this->db->order_by('id', 'DESC')->get('about_title')->result_array();
        $data['select_img']         = $this->db->order_by('id', 'DESC')->get('about_img')->result_array();
        $this->load->view('admin/about/about_list', $data);
    }

    public function about_add()
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $this->load->view('admin/about/about_add', $data);
    }

    public function about_add_act()
    {
        $span  = $_POST['span'];

        if(!empty($span)){
            $config['upload_path']      = './uploads/admin/aboutfile';
            $config['allowed_types']    = 'gif|jpg|jpeg|mp3|mp4|svg';
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')) {
                $file = $this->upload->data('file_name');

                $data = [
                    "span"  => $span,
                    "file"  => $file
                ];

                $this->db->insert('about', $data);
                redirect(base_url('About'));

            }else{
                
                $data = [
                    "span"  => $span
                ];
                
                $this->db->insert('about', $data);
                redirect(base_url('About'));

            }

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function about_edit($id)
    {
        $data['select_all_nav']  = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['span_edit']       = $this->db->where('id', $id)->get('about')->row_array();
        $this->load->view('admin/about/about_edit', $data);
    }

    public function about_edit_act($id)
    {
        $span = $_POST['span'];

        if(!empty($span)){
            $data = [
                "span" => $span
            ];

            $this->db->where('id', $id)->update('about', $data);
            redirect(base_url('About'));
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
        redirect(base_url('About'));
    }

    public function about_del($id)
    {
        $this->db->where('id', $id)->delete('about');
        redirect(base_url('About'));
    }

    public function about_view()
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['about_view']     = $this->db->order_by('id', 'DESC')->get('about')->result_array();
        $this->load->view('admin/about/about_view', $data);
    }

    public function about_title_add()
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $this->load->view('admin/about/about_title_add', $data);
    }

    public function about_title_add_act()
    {
        $title = $_POST['title'];
        
        if(!empty($title)){
            
            $data = [
                "title" => $title
            ];

            $this->db->insert('about_title', $data);
            redirect(base_url('About'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
        redirect(base_url('About'));
    }

    public function about_title_edit($id)
    {
        $data['select_all_nav']     = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['about_title_edit']   = $this->db->where('id', $id)->get('about_title')->row_array();
        $this->load->view('admin/about/about_title_edit', $data);
    }

    public function about_title_edit_act($id)
    {
        $title = $_POST['title'];

        if(!empty($title)){

            $data = [
                "title" => $title
            ];
            $this->db->where('id', $id)->update('about_title', $data);
            redirect(base_url('About'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
        redirect(base_url('About'));
    }

    public function about_title_del($id)
    {
        $this->db->where('id', $id)->delete('about_title');
        redirect(base_url('About'));
    }

    public function about_title_view()
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['select_all_abt'] = $this->db->order_by('id', 'DESC')->get('about_title')->result_array();
        $this->load->view('admin/about/about_title_view', $data);
    }

    public function about_img()
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $this->load->view('admin/about/about_img', $data);
    }

    public function about_img_act()
    {
        $file = $_POST['file'];

        if(empty($file)){
            $config['upload_path']   = './uploads/admin/aboutfile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('user_file')) {
                $file = $this->upload->data('file_name');

                $data = [
                    "file" => $file
                ];

                $this->db->insert('about_img', $data);
                redirect(base_url('About'));
            }else{
                redirect(base_url('About'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function about_img_edit($id)
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['select_all_img'] = $this->db->where('id', $id)->get('about_img')->row_array();
        $this->load->view('admin/about/about_img_edit', $data);
    }

    public function about_img_edit_act($id)
    {
        $file = $_POST['file'];

        if(empty($file)) {
            $config['upload_path']   = './uploads/admin/aboutfile/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|svg';
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')) {
                $file = $this->upload->data('file_name');

                $data = [
                    "file" => $file
                ];

                $this->db->where('id', $id)->update('about_img', $data);
                redirect(base_url('About'));
            }else{
                redirect(base_url('About'));
            }
        }else{
            redirect($_SERVER['HTTP-REFERER']);
        }
    }

    public function about_img_del($id)
    {
        $this->db->where('id', $id)->delete('about_img');
        redirect(base_url('About'));
    }

    public function about_img_view()
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['select_all_img'] = $this->db->order_by('id', 'DESC')->get('about_img')->result_array();
        $this->load->view('admin/about/about_img_view', $data);
    }

    public function inbox()
    {

        $data['select_all_inbox']   = $this->db->limit(5)->get('allform')->result_array();
        $data['select_all_nav']     = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $this->load->view('admin/communication/inbox', $data);

    }

    public function inbox_del($id)
    {

        $this->db->where('f_id', $id)->delete('allform');
        redirect(base_url('Inbox'));

    }

    public function footer()
    {
        $data['select_desc']    = $this->db->order_by('id', 'DESC')->get('footer')->result_array();
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['out_off_edit']   = $this->db->get('out_off')->result_array();
        $data['smm_data']       = $this->db->order_by('id', 'DESC')->get('smm')->result_array();
        $this->load->view('admin/footer/footer', $data);
    }

    public function footer_add()
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $this->load->view('admin/footer/footer_add', $data);
    }

    public function footer_add_act()
    {
        $desc1th = $_POST['desc1th'];
        $desc2th = $_POST['desc2th'];

        if(!empty($desc1th) && !empty($desc2th)){
            $config['upload_path']      = './uploads/admin/footerfile/';
            $config['allowed_types']    = 'gif|jpg|jpeg|mp3|mp4|svg|png';
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')) {
                $file = $this->upload->data('file_name');

                $data = [
                    "desc1th" => $desc1th,
                    "desc2th" => $desc2th,
                    "file"    => $file
                ];
                
                $this->db->insert('footer', $data);
                redirect(base_url('Footer'));
            }else{

                $data = [
                    "desc1th" => $desc1th,
                    "desc2th" => $desc2th
                ];

                $this->db->insert('footer', $data);
                redirect(base_url('Footer'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function footer_edit($id)
    {
        $data['footer_edit']    = $this->db->where('id', $id)->get('footer')->row_array();
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $this->load->view('admin/footer/footer_edit', $data);
    }

    public function footer_edit_act($id)
    {
        $desc1th = $_POST['desc1th'];
        $desc2th = $_POST['desc2th'];

        if(!empty($desc1th) && !empty($desc2th)){
            $config['upload_path']      = './uploads/admin/footerfile/';
            $config['allowed_types']    = 'gif|jpg|jpeg|mp3|mp4|svg|png';
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')){
                $file = $this->upload->data('file_name');

                $data = [
                    "desc1th" => $desc1th,
                    "desc2th" => $desc2th,
                    "file"    => $file
                ];
                
                $this->db->where('id', $id)->update('footer', $data);
                redirect(base_url('Footer'));
            }else{

                $data = [
                    "desc1th" => $desc1th,
                    "desc2th" => $desc2th
                ];

                $this->db->where('id', $id)->update('footer', $data);
                redirect(base_url('Footer'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function footer_del($id)
    {
        $this->db->where('id', $id)->delete('footer');
        redirect(base_url('Footer'));
    }

    public function our_off_edit($id)
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['out_off_edit']   = $this->db->where('id', $id)->get('out_off')->row_array();
        $this->load->view('admin/footer/out_off_edit', $data);
    }

    public function out_off_edit_act($id)
    {
        $title      = $_POST['title'];
        $location   = $_POST['location'];
        $phone      = $_POST['phone'];
        $email      = $_POST['email'];

        if(!empty($title) && !empty($location) && !empty($phone) && !empty($email)){

            $data = [
                "title"     => $title,
                "location"  => $location,
                "phone"     => $phone,
                "email"     => $email
            ];
            $this->db->where('id', $id)->update('out_off', $data);
            redirect(base_url('Footer'));
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
            redirect(base_url('Footer'));
    }

    public function smm_add()
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $this->load->view('admin/footer/smm_add', $data);
    }

    public function smm_add_act()
    {
        $link = $_POST['link'];

        if(!empty($link)){
            $config['upload_path']      = './uploads/admin/footerfile/';
            $config['allowed_types']    = 'gif|jpg|jpeg|mp3|mp4|svg|png';
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')) {
                $file = $this->upload->data('file_name');

                $data = [
                    "link"  => $link,
                    "file"  => $file
                ];
                $this->db->insert('smm', $data);
                redirect(base_url('Footer'));
            }else{
                $data = [
                    "link" => $link
                ];
                $this->db->insert('smm', $data);
                redirect(base_url('Footer'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function smm_edit($id)
    {
        $data['select_all_nav'] = $this->db->order_by('id', 'DESC')->get('header')->result_array();
        $data['admin_data']         = $this->db->get('admin')->result_array();
        $data['smm_edit']       = $this->db->where('id', $id)->get('smm')->row_array();
        $this->load->view('admin/footer/smm_edit', $data);
    }

    public function smm_edit_act($id)
    {
        $link = $_POST['link'];

        if(!empty($link)){
            $config['upload_path']      = './uploads/admin/footerfile/';
            $config['allowed_types']    = 'gif|jpg|jpeg|mp3|mp4|svg|png';
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')) {
                $file = $this->upload->data('file_name');

                $data = [
                    "link"  => $link,
                    "file"  => $file
                ];
                $this->db->where('id', $id)->update('smm', $data);
                redirect(base_url('Footer'));
            }else{
                $data = [
                    "link" => $link
                ];
                $this->db->where('id', $id)->update('smm', $data);
                redirect(base_url('Footer'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function smm_del($id)
    {
        $this->db->where('id', $id)->delete('smm');
        redirect(base_url('Footer'));
    }

}