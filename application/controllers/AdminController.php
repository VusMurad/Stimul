<?php
class AdminController extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model("AdminModel");
    }

    public function index(){
        $this->load->view('admin/login');    
    }

    public function index_act(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $data = [
            'ad_username' => $username,
            'ad_password' => md5($password),
        ];

        if (!empty($username) && !empty($password)){
            $data = [
                'ad_username' => $username,
                'ad_password' => md5($password),
            ];

            $data = $this->security->xss_clean($data);      
            $check_admin = $this->AdminModel->check_admin($data);

            if ($check_admin){
                $_SESSION['admin_id'] = $check_admin['ad_id'];
                redirect(base_url('dashboard'));

            }else{
                $this->session->set_flashdata('error', 'İstifadəçi adı və ya şifrə yanlışdır!');
                redirect($_SERVER['HTTP_REFERER']);
            }

        }else{
            $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function log_out_act(){
        unset($_SESSION['admin_id']);
        $this->session->set_flashdata('success' , 'Sizi bir daha gözləyəcəyik!');
        redirect(base_url('login'));
    }
    

    public function a_dashboard(){
        $this->load->view('admin/dashboard');
    }

    public function a_all_courses(){
        $this->load->view('admin/allcourses');
    }

    public function a_all_courses_create(){
        $this->load->view('admin/allcourseext/create');
    }

    public function a_languages(){
        $data["get_all_languages"] = $this->AdminModel->get_all_languages();
        $this->load->view('admin/language', $data);
    }

    public function a_languages_create(){
        $this->load->view('admin/languagext/create');
    }

    public function a_languages_create_act(){
        
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if(!empty($name) &&  !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){


            $config['upload_path'] = './uploads/languages/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "l_name"            => $name,
                    "l_name_eng"        => $engname,
                    "l_name_ru"         => $runame,
                    "l_description"     => $description,
                    "l_description_eng" => $engdescription,
                    "l_description_ru"  => $rudescription,
                    "l_price"           => $price,
                    "l_category"        => $category,
                    "l_status"          => $status,
                    'l_img'             => $img,
                    'l_img_ext'         => $img_ext,
                    'l_create_date'     => date("Y-m-d H:i:s"),

                ];
                
                $data = $this->security->xss_clean($data);                
                $this->AdminModel->insert_languages($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('languages'));
            } else {
                redirect(base_url('languages_create'));
            }
        } else {
            redirect(base_url('languages_create'));
        }
    }

    public function a_delete_language($id){
        $this->AdminModel->delete_languages($id);
        redirect(base_url($uri = "languages"));
    }

    public function a_update_language($id){
        $data['get_single_language'] =  $this->AdminModel->get_single_language($id);
        $this->load->view('admin/languagext/update', $data);
    }
 
    public function a_update_language_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if(!empty($name) &&  !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

            $config['upload_path'] = './uploads/languages/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "l_name"            => $name,
                    "l_name_eng"        => $engname,
                    "l_name_ru"         => $runame,
                    "l_description"     => $description,
                    "l_description_eng" => $engdescription,
                    "l_description_ru"  => $rudescription,
                    "l_price"           => $price,
                    "l_category"        => $category,
                    "l_status"          => $status,
                    'l_img'             => $img,
                    'l_img_ext'         => $img_ext,
                    'l_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_language($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('languages'));
            }else{
                $data = [
                    "l_name"            => $name,
                    "l_name_eng"        => $engname,
                    "l_name_ru"         => $runame,
                    "l_description"     => $description,
                    "l_description_eng" => $engdescription,
                    "l_description_ru"  => $rudescription,
                    "l_price"           => $price,
                    "l_category"        => $category,
                    "l_status"          => $status,
                    'l_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_language($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('languages'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_view_language($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_language'] =  $this->AdminModel->get_single_language($id);
        $this->load->view('admin/languagext/view', $data);
    }


    public function a_computer_course(){
        $data["get_all_compcourses"] = $this->AdminModel->get_all_compcourses();
        $this->load->view('admin/compcourse',$data);
    }

    public function a_computer_course_create(){
        $this->load->view('admin/computerext/create');
    }

    public function a_compcourse_create_act(){

        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];


        if(!empty($name) &&  !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) && !empty($status)){

            $config['upload_path']          = './uploads/compcourse/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('images')){

                $img     =  $this->upload->data('file_name');
                $img_ext =  $this->upload->data('file_ext');

                $data = [
                    "c_name"            => $name,
                    "c_name_eng"        => $engname,
                    "c_name_ru"         => $runame,
                    "c_description"     => $description,
                    "c_description_eng" => $engdescription,
                    "c_description_ru"  => $rudescription,
                    "c_price"           => $price,
                    "c_category"        => $category,
                    "c_status"          => $status,
                    'c_img'             => $img,
                    'c_img_ext'         => $img_ext,
                    'c_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);
                $this->AdminModel->insert_comp_course($data);                
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('computercourses'));
            }else{
                redirect(base_url('computercourses_create'));
            }

        }else{
            redirect(base_url('computercourses_create'));
        }  
    }

    public function a_update_comp($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_compcourse'] =  $this->AdminModel->get_single_compcourse($id);
        $this->load->view('admin/computerext/update' , $data);
    }

    public function a_update_comp_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if(!empty($name) &&  !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

            $config['upload_path'] = './uploads/compcourse/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt|jfif';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "c_name"            => $name,
                    "c_name_eng"        => $engname,
                    "c_name_ru"         => $runame,
                    "c_description"     => $description,
                    "c_description_eng" => $engdescription,
                    "c_description_ru"  => $rudescription,
                    "c_price"           => $price,
                    "c_category"        => $category,
                    "c_status"          => $status,
                    'c_img'             => $img,
                    'c_img_ext'         => $img_ext,
                    'c_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_comp_course($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('computercourses'));
            }else{
                $data = [
                    "c_name"            => $name,
                    "c_name_eng"        => $engname,
                    "c_name_ru"         => $runame,
                    "c_description"     => $description,
                    "c_description_eng" => $engdescription,
                    "c_description_ru"  => $rudescription,
                    "c_price"           => $price,
                    "c_category"        => $category,
                    "c_status"          => $status,
                    'c_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_comp_course($id, $data);                
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('computercourses'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_delete_comp($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_compcourse($id);
        redirect(base_url($uri = "computercourses"));
    }

    public function a_comp_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_compcourse'] =  $this->AdminModel->get_single_compcourse($id);
        $this->load->view('admin/computerext/view', $data);
    }

    public function a_psychology(){
        $data['get_all_psychology'] = $this->AdminModel->get_all_psychology();
        $this->load->view('admin/psychology',$data);
    }

    public function a_psychology_create(){      
        $this->load->view('admin/psychologyext/create');
    }

    public function a_psychology_create_act(){
 
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

                $config['upload_path'] = './uploads/psychology/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "p_name"            => $name,
                    "p_name_eng"        => $engname,
                    "p_name_ru"         => $runame,
                    "p_description"     => $description,
                    "p_description_eng" => $engdescription,
                    "p_description_ru"  => $rudescription,
                    "p_price"           => $price,
                    "p_category"        => $category,
                    "p_status"          => $status,
                    'p_img'             => $img,
                    'p_img_ext'         => $img_ext,
                    'p_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_psychology($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('psychology'));
            } else {
                redirect(base_url('psychology_create'));
            }
        } else {
            redirect(base_url('psychology_create'));
        }       
    }

    public function a_psychology_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_psychology'] =  $this->AdminModel->get_single_psychology($id);
        $this->load->view('admin/psychologyext/view', $data);
    }

    public function a_psychology_delete($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_psychology($id);
        redirect(base_url($uri = "psychology"));
    }

    public function a_psychology_update($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_psychology'] = $this->AdminModel->get_single_psychology($id);
        $this->load->view('admin/psychologyext/update' , $data);
    }

    public function a_psychology_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if(!empty($name) &&  !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

            $config['upload_path'] = './uploads/psychology/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt|jfif';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "p_name"            => $name,
                    "p_name_eng"        => $engname,
                    "p_name_ru"         => $runame,
                    "p_description"     => $description,
                    "p_description_eng" => $engdescription,
                    "p_description_ru"  => $rudescription,
                    "p_price"           => $price,
                    "p_category"        => $category,
                    "p_status"          => $status,
                    'p_img'             => $img,
                    'p_img_ext'         => $img_ext,
                    'p_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_psychology($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('psychology'));
            }else{
                $data = [
                    "p_name"            => $name,
                    "p_name_eng"        => $engname,
                    "p_name_ru"         => $runame,
                    "p_description"     => $description,
                    "p_description_eng" => $engdescription,
                    "p_description_ru"  => $rudescription,
                    "p_price"           => $price,
                    "p_category"        => $category,
                    "p_status"          => $status,
                    'p_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_psychology($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('psychology'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_toefl(){
        $data['get_all_toefl'] = $this->AdminModel->get_all_toefl();
        $this->load->view('admin/toefl', $data);
    }

    public function a_toefl_create(){
        $this->load->view('admin/toeflext/create');
    }

    public function a_toefl_create_act(){
        
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

                $config['upload_path'] = './uploads/toefl/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "t_name"            => $name,
                    "t_name_eng"        => $engname,
                    "t_name_ru"         => $runame,
                    "t_description"     => $description,
                    "t_description_eng" => $engdescription,
                    "t_description_ru"  => $rudescription,
                    "t_price"           => $price,
                    "t_category"        => $category,
                    "t_status"          => $status,
                    't_img'             => $img,
                    't_img_ext'         => $img_ext,
                    't_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_toefl($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('toefl'));
            } else {
                redirect(base_url('toefl_create'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect(base_url('toefl_create'));
        }      
    }

    public function a_toefl_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_toefl'] = $this->AdminModel->get_single_toefl($id);
        $this->load->view('admin/toeflext/view',$data);
    }

    public function a_toefl_update($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_toefl'] = $this->AdminModel->get_single_toefl($id);
        $this->load->view('admin/toeflext/update', $data);
    }

    public function a_toefl_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if(!empty($name) &&  !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

            $config['upload_path'] = './uploads/toefl/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt|jfif';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "t_name"            => $name,
                    "t_name_eng"        => $engname,
                    "t_name_ru"         => $runame,
                    "t_description"     => $description,
                    "t_description_eng" => $engdescription,
                    "t_description_ru"  => $rudescription,
                    "t_price"           => $price,
                    "t_category"        => $category,
                    "t_status"          => $status,
                    't_img'             => $img,
                    't_img_ext'         => $img_ext,
                    't_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_toefl($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('toefl'));
            }else{
                $data = [
                    "t_name"            => $name,
                    "t_name_eng"        => $engname,
                    "t_name_ru"         => $runame,
                    "t_description"     => $description,
                    "t_description_eng" => $engdescription,
                    "t_description_ru"  => $rudescription,
                    "t_price"           => $price,
                    "t_category"        => $category,
                    "t_status"          => $status,
                    't_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_toefl($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('toefl'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_toefl_delete($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_toefl($id);
        redirect(base_url($uri = "toefl"));
    }

    public function a_acca(){
        $data['get_all_acca'] = $this->AdminModel->get_all_acca();
        $this->load->view('admin/acca' , $data);
    }

    public function a_acca_create(){
        $this->load->view('admin/accaext/create');
    }

    public function a_acca_create_act(){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];


           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription)){

                $config['upload_path'] = './uploads/acca/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "ac_name"            => $name,
                    "ac_name_eng"        => $engname,
                    "ac_name_ru"         => $runame,
                    "ac_description"     => $description,
                    "ac_description_eng" => $engdescription,
                    "ac_description_ru"  => $rudescription,  
                    "ac_price"           => $price,
                    "ac_category"        => $category,
                    "ac_status"          => $status,
                    'ac_img'             => $img,
                    'ac_img_ext'         => $img_ext,
                    'ac_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_acca($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('acca'));
            } else {
                redirect(base_url('acca_create'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect(base_url('acca_create'));
        }      
    }

    public function a_acca_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_acca'] = $this->AdminModel->get_single_acca($id);
        $this->load->view('admin/accaext/view' , $data);
    }

    public function a_acca_update($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_acca'] = $this->AdminModel->get_single_acca($id);
        $this->load->view('admin/accaext/update' , $data);
    } 

    public function a_acca_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if(!empty($name) &&  !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

            $config['upload_path'] = './uploads/acca/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt|jfif';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "ac_name"            => $name,
                    "ac_name_eng"        => $engname,
                    "ac_name_ru"         => $runame,
                    "ac_description"     => $description,
                    "ac_description_eng" => $engdescription,
                    "ac_description_ru"  => $rudescription,
                    "ac_price"           => $price,
                    "ac_category"        => $category,
                    "ac_status"          => $status,
                    'ac_img'             => $img,
                    'ac_img_ext'         => $img_ext,
                    'ac_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_acca($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('acca'));
            }else{
                $data = [
                    "ac_name"            => $name,
                    "ac_name_eng"        => $engname,
                    "ac_name_ru"         => $runame,
                    "ac_description"     => $description,
                    "ac_description_eng" => $engdescription,
                    "ac_description_ru"  => $rudescription,
                    "ac_price"           => $price,
                    "ac_category"        => $category,
                    "ac_status"          => $status,
                    'ac_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_acca($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('acca'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    } 

    public function a_acca_delete($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_acca($id);
        redirect(base_url($uri = "acca"));
    }

    public function a_design(){
        $data['get_all_design'] = $this->AdminModel->get_all_design();
        $this->load->view('admin/design', $data);
    }

    public function a_design_create(){
        $this->load->view('admin/designext/create');
    }

    public function a_design_create_act(){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

                $config['upload_path'] = './uploads/design/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "d_name"            => $name,
                    "d_name_eng"        => $engname,
                    "d_name_ru"         => $runame,
                    "d_description"     => $description,
                    "d_description_eng" => $engdescription,
                    "d_description_ru"  => $rudescription,
                    "d_price"           => $price,
                    "d_category"        => $category,
                    "d_status"          => $status,
                    'd_img'             => $img,
                    'd_img_ext'         => $img_ext,
                    'd_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_design($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('design'));
            } else {
                redirect(base_url('design_create'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect(base_url('design_create'));
        }      
    }

    public function a_design_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_design'] = $this->AdminModel->get_single_design($id);
        $this->load->view('admin/designext/view' , $data);
    }

    public function a_design_update($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_design'] = $this->AdminModel->get_single_design($id);
        $this->load->view('admin/designext/update' , $data);
    }

    public function a_design_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if(!empty($name) &&  !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

            $config['upload_path'] = './uploads/design/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt|jfif';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "d_name"            => $name,
                    "d_name_eng"        => $engname,
                    "d_name_ru"         => $runame,
                    "d_description"     => $description,
                    "d_description_eng" => $engdescription,
                    "d_description_ru"  => $rudescription,
                    "d_price"           => $price,
                    "d_category"        => $category,
                    "d_status"          => $status,
                    'd_img'             => $img,
                    'd_img_ext'         => $img_ext,
                    'd_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_design($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('design'));
            }else{
                $data = [
                    "d_name"            => $name,
                    "d_name_eng"        => $engname,
                    "d_name_ru"         => $runame,
                    "d_description"     => $description,
                    "d_description_eng" => $engdescription,
                    "d_description_ru"  => $rudescription,
                    "d_price"           => $price,
                    "d_category"        => $category,
                    "d_status"          => $status,
                    'd_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_design($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('design'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_design_delete($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_design($id);
        redirect(base_url('design'));
    }

    public function a_prepearing(){
        $data['get_all_prepearing'] = $this->AdminModel->get_all_prepearing();
        $this->load->view('admin/prepearing' , $data);
    }

    public function a_prepearing_create(){
        $this->load->view('admin/prepearingext/create');
    }

    public function a_prepearing_create_act(){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

                $config['upload_path'] = './uploads/prepearing/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "pr_name"            => $name,
                    "pr_name_eng"        => $engname,
                    "pr_name_ru"         => $runame,
                    "pr_description"     => $description,
                    "pr_description_eng" => $engdescription,
                    "pr_description_ru"  => $rudescription,
                    "pr_price"           => $price,
                    "pr_category"        => $category,
                    "pr_status"          => $status,
                    'pr_img'             => $img,
                    'pr_img_ext'         => $img_ext,
                    'pr_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_prepearing($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('prepearing'));
            } else {
                redirect(base_url('prepearing_create'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect(base_url('prepearing_create'));
        }      
    }

    public function a_prepearing_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_prepearing'] = $this->AdminModel->get_single_prepearing($id);
        $this->load->view('admin/prepearingext/view',$data);
    }

    public function a_prepearing_update($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_prepearing'] = $this->AdminModel->get_single_prepearing($id);
        $this->load->view('admin/prepearingext/update',$data);
    }

    
    public function a_prepearing_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if(!empty($name) &&  !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

            $config['upload_path'] = './uploads/prepearing/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt|jfif';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "pr_name"            => $name,
                    "pr_name_eng"        => $engname,
                    "pr_name_ru"         => $runame,
                    "pr_description"     => $description,
                    "pr_description_eng" => $engdescription,
                    "pr_description_ru"  => $rudescription,
                    "pr_price"           => $price,
                    "pr_category"        => $category,
                    "pr_status"          => $status,
                    'pr_img'             => $img,
                    'pr_img_ext'         => $img_ext,
                    'pr_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_prepearing($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('prepearing'));
            }else{
                $data = [
                    "pr_name"            => $name,
                    "pr_name_eng"        => $engname,
                    "pr_name_ru"         => $runame,
                    "pr_description"     => $description,
                    "pr_description_eng" => $engdescription,
                    "pr_description_ru"  => $rudescription,
                    "pr_price"           => $price,
                    "pr_category"        => $category,
                    "pr_status"          => $status,
                    'pr_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_prepearing($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('prepearing'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_prepearing_delete($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_prepearing($id);
        redirect(base_url('prepearing'));  
    }

    public function a_yos(){
        $data['get_all_yos'] = $this->AdminModel->get_all_yos();
        $this->load->view('admin/yos' ,$data);
    }

    public function a_yos_create(){
        $this->load->view('admin/yosext/create');
    }

    public function a_yos_create_act(){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

                $config['upload_path'] = './uploads/yos/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "y_name"            => $name,
                    "y_name_eng"        => $engname,
                    "y_name_ru"         => $runame,
                    "y_description"     => $description,
                    "y_description_eng" => $engdescription,
                    "y_description_ru"  => $rudescription,
                    "y_price"           => $price,
                    "y_category"        => $category,
                    "y_status"          => $status,
                    'y_img'             => $img,
                    'y_img_ext'         => $img_ext,
                    'y_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_yos($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('yos'));
            } else {
                redirect(base_url('yos_create'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect(base_url('yos_create'));
        }      
    }

    public function a_yos_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_yos'] = $this->AdminModel->get_single_yos($id);
        $this->load->view('admin/yosext/view', $data);
    }

    public function a_yos_update($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_yos'] = $this->AdminModel->get_single_yos($id);
        $this->load->view('admin/yosext/update', $data);
    }

    public function a_yos_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if(!empty($name) &&  !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

            $config['upload_path'] = './uploads/yos/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt|jfif';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "y_name"            => $name,
                    "y_name_eng"        => $engname,
                    "y_name_ru"         => $runame,
                    "y_description"     => $description,
                    "y_description_eng" => $engdescription,
                    "y_description_ru"  => $rudescription,
                    "y_price"           => $price,
                    "y_category"        => $category,
                    "y_status"          => $status,
                    'y_img'             => $img,
                    'y_img_ext'         => $img_ext,
                    'y_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_yos($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('yos'));
            }else{
                $data = [
                    "y_name"            => $name,
                    "y_name_eng"        => $engname,
                    "y_name_ru"         => $runame,
                    "y_description"     => $description,
                    "y_description_eng" => $engdescription,
                    "y_description_ru"  => $rudescription,
                    "y_price"           => $price,
                    "y_category"        => $category,
                    "y_status"          => $status,
                    'y_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_yos($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('yos'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_yos_delete($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_yos($id);
        redirect(base_url('yos'));
    }

    public function a_translation(){
        $data['get_all_translation'] = $this->AdminModel->get_all_translation();
        $this->load->view('admin/translation', $data);
    }

    public function a_translation_create(){
        $this->load->view('admin/translationext/create');
    }

    public function a_translation_create_act(){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

                $config['upload_path'] = './uploads/translation/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "tr_name"            => $name,
                    "tr_name_eng"        => $engname,
                    "tr_name_ru"         => $runame,
                    "tr_description"     => $description,
                    "tr_description_eng" => $engdescription,
                    "tr_description_ru"  => $rudescription,
                    "tr_price"           => $price,
                    "tr_category"        => $category,
                    "tr_status"          => $status,
                    'tr_img'             => $img,
                    'tr_img_ext'         => $img_ext,
                    'tr_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_translation($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('translation'));
            } else {
                redirect(base_url('tranlation_create'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect(base_url('tranlation_create'));
        }      
    }

    public function a_translation_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_translation'] = $this->AdminModel->get_single_translation($id);
        $this->load->view('admin/translationext/view', $data);
    }

    public function a_translation_update($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_translation'] = $this->AdminModel->get_single_translation($id);
        $this->load->view('admin/translationext/update', $data);
    }

    public function a_translation_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if(!empty($name) &&  !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

            $config['upload_path'] = './uploads/translation/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt|jfif';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "tr_name"            => $name,
                    "tr_name_eng"        => $engname,
                    "tr_name_ru"         => $runame,
                    "tr_description"     => $description,
                    "tr_description_eng" => $engdescription,
                    "tr_description_ru"  => $rudescription,
                    "tr_price"           => $price,
                    "tr_category"        => $category,
                    "tr_status"          => $status,
                    'tr_img'             => $img,
                    'tr_img_ext'         => $img_ext,
                    'tr_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_translation($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('translation'));
            }else{
                $data = [
                    "tr_name"            => $name,
                    "tr_name_eng"        => $engname,
                    "tr_name_ru"         => $runame,
                    "tr_description"     => $description,
                    "tr_description_eng" => $engdescription,
                    "tr_description_ru"  => $rudescription,
                    "tr_price"           => $price,
                    "tr_category"        => $category,
                    "tr_status"          => $status,
                    'tr_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_translation($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('translation'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_translation_delete($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_translation($id);
        redirect(base_url('translation'));
    }

    public function a_training(){
        $data['get_all_training'] = $this->AdminModel->get_all_training();
        $this->load->view('admin/training' , $data);
    }

    public function a_training_create(){
        $this->load->view('admin/trainingext/create');
    }

    public function a_training_create_act(){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

                $config['upload_path'] = './uploads/training/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "trg_name"            => $name,
                    "trg_name_eng"        => $engname,
                    "trg_name_ru"         => $runame,
                    "trg_description"     => $description,
                    "trg_description_eng" => $engdescription,
                    "trg_description_ru"  => $rudescription,
                    "trg_price"           => $price,
                    "trg_category"        => $category,
                    "trg_status"          => $status,
                    'trg_img'             => $img,
                    'trg_img_ext'         => $img_ext,
                    'trg_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_training($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('training'));
            } else {
                redirect(base_url('training_create'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect(base_url('training_create'));
        }      
    }

    public function a_training_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_training'] = $this->AdminModel->get_single_training($id);
        $this->load->view('admin/trainingext/view' , $data);
    }

    public function a_training_update($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_training'] = $this->AdminModel->get_single_training($id);
        $this->load->view('admin/trainingext/update' , $data);
    }

    public function a_training_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

        if(!empty($name) &&  !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

            $config['upload_path'] = './uploads/training/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt|jfif';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "trg_name"            => $name,
                    "trg_name_eng"        => $engname,
                    "trg_name_ru"         => $runame,
                    "trg_description"     => $description,
                    "trg_description_eng" => $engdescription,
                    "trg_description_ru"  => $rudescription,
                    "trg_price"           => $price,
                    "trg_category"        => $category,
                    "trg_status"          => $status,
                    'trg_img'             => $img,
                    'trg_img_ext'         => $img_ext,
                    'trg_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_training($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('training'));
            }else{
                $data = [
                    "trg_name"            => $name,
                    "trg_name_eng"        => $engname,
                    "trg_name_ru"         => $runame,
                    "trg_description"     => $description,
                    "trg_description_eng" => $engdescription,
                    "trg_description_ru"  => $rudescription,
                    "trg_price"           => $price,
                    "trg_category"        => $category,
                    "trg_status"          => $status,
                    'trg_update_date'     => date("Y-m-d H:i:s"),
                ];
                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);
                $this->AdminModel->update_training($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('training'));
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_training_delete($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_training($id);
        redirect(base_url('training'));
    }

    public function a_study(){
        $data['get_all_study'] = $this->AdminModel->get_all_study();
        $this->load->view('admin/studyabroad', $data);
    }

    public function a_study_create(){
        $this->load->view('admin/studyext/create');
    }

    public function a_study_create_act(){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

                $config['upload_path'] = './uploads/studyabroad/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "s_name"            => $name,
                    "s_name_eng"        => $engname,
                    "s_name_ru"         => $runame,
                    "s_description"     => $description,
                    "s_description_eng" => $engdescription,
                    "s_description_ru"  => $rudescription,
                    "s_price"           => $price,
                    "s_category"        => $category,
                    "s_status"          => $status,
                    's_img'             => $img,
                    's_img_ext'         => $img_ext,
                    's_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_study($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('study_abr'));
            } else {
                redirect(base_url('study_abr_create'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect(base_url('study_abr_create'));
        }      
    }

    public function a_study_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_study'] = $this->AdminModel->get_single_study($id);
        $this->load->view('admin/studyext/view', $data);
    }

    public function a_study_update($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_study'] = $this->AdminModel->get_single_study($id);
        $this->load->view('admin/studyext/update', $data);
    }

    public function a_study_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];
        $price          = $_POST['price'];
        $category       = $_POST['category'];
        $status         = $_POST['status'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription) && !empty($price) && !empty($category) &&!empty($status)){

                $config['upload_path'] = './uploads/studyabroad/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "s_name"            => $name,
                    "s_name_eng"        => $engname,
                    "s_name_ru"         => $runame,
                    "s_description"     => $description,
                    "s_description_eng" => $engdescription,
                    "s_description_ru"  => $rudescription,
                    "s_price"           => $price,
                    "s_category"        => $category,
                    "s_status"          => $status,
                    's_img'             => $img,
                    's_img_ext'         => $img_ext,
                    's_update_date'     => date("Y-m-d H:i:s"),
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->AdminModel->update_study($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('study_abr'));
            } else {
                $data = [
                    "s_name"            => $name,
                    "s_name_eng"        => $engname,
                    "s_name_ru"         => $runame,
                    "s_description"     => $description,
                    "s_description_eng" => $engdescription,
                    "s_description_ru"  => $rudescription,
                    "s_price"           => $price,
                    "s_category"        => $category,
                    "s_status"          => $status,
                    's_update_date'     => date("Y-m-d H:i:s"),
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->AdminModel->update_study($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('study_abr'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_study_delete($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_study($id);
        redirect(base_url('study_abr'));
    }

    public function a_customers(){
        $data['get_all_customers'] = $this->AdminModel->get_all_customers();
        $this->load->view('admin/customers', $data);
    }

    public function a_customers_create(){
        $this->load->view('admin/customerext/create');
    }

    public function a_customers_create_act(){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        

           if(!empty($name) && !empty($engname) && !empty($runame)){

                $config['upload_path'] = './uploads/customers/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "cs_name"            => $name,
                    "cs_name_eng"        => $engname,
                    "cs_name_ru"         => $runame,
                    'cs_img'             => $img,
                    'cs_img_ext'         => $img_ext,
                    'cs_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_customer($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('customers'));
            } else {
                redirect(base_url('customers'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect(base_url('customers'));
        }      
    }

    public function a_customers_update($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_customer'] = $this->AdminModel->get_single_customer($id);
        $this->load->view('admin/customerext/update', $data);
    }

    public function a_customers_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        
           if(!empty($name) && !empty($engname) && !empty($runame)){

                $config['upload_path']   = './uploads/customers/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "cs_name"            => $name,
                    "cs_name_eng"        => $engname,
                    "cs_name_ru"         => $runame,
                    'cs_img'             => $img,
                    'cs_img_ext'         => $img_ext,
                    'cs_update_date'     => date("Y-m-d H:i:s"),
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->AdminModel->update_customer($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('customers'));
            } else {
                $data = [
                    "cs_name"            => $name,
                    "cs_name_eng"        => $engname,
                    "cs_name_ru"         => $runame,
                    'cs_update_date'     => date("Y-m-d H:i:s"),
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->AdminModel->update_customer($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('customers'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_customers_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_customer'] = $this->AdminModel->get_single_customer($id);
        $this->load->view('admin/customerext/view', $data);
    }

    public function a_customers_delete($id){
        $this->AdminModel->delete_customers($id);
        redirect(base_url($uri = "customers")); 
    }

    public function a_colleagues(){
        $data['get_all_colleagues'] = $this->AdminModel->get_all_colleagues();
        $this->load->view('admin/colleagues', $data);
    }

    public function a_colleagues_crate(){
        $this->load->view('admin/colleagueext/create');
    }

    public function a_colleagues_crate_act(){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription)){

                $config['upload_path'] = './uploads/colleagues/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "cl_name"            => $name,
                    "cl_name_eng"        => $engname,
                    "cl_name_ru"         => $runame,
                    "cl_description"     => $description,
                    "cl_description_eng" => $engdescription,
                    "cl_description_ru"  => $rudescription,
                    'cl_img'             => $img,
                    'cl_img_ext'         => $img_ext,
                    'cl_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_colleagues($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('colleagues'));
            } else {
                redirect(base_url('colleagues_create'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect(base_url('colleagues_create'));
        }      
    }

    public function a_colleagues_update($id){
        $data['get_single_colleagues'] = $this->AdminModel->get_single_colleagues($id);
        $this->load->view('admin/colleagueext/update', $data);
    }

    public function a_colleagues_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription)){

                $config['upload_path'] = './uploads/colleagues/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "cl_name"            => $name,
                    "cl_name_eng"        => $engname,
                    "cl_name_ru"         => $runame,
                    "cl_description"     => $description,
                    "cl_description_eng" => $engdescription,
                    "cl_description_ru"  => $rudescription,
                    'cl_img'             => $img,
                    'cl_img_ext'         => $img_ext,
                    'cl_update_date'     => date("Y-m-d H:i:s"),
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->AdminModel->update_colleagues($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('colleagues'));
            } else {
                $data = [
                    "cl_name"            => $name,
                    "cl_name_eng"        => $engname,
                    "cl_name_ru"         => $runame,
                    "cl_description"     => $description,
                    "cl_description_eng" => $engdescription,
                    "cl_description_ru"  => $rudescription,
                    'cl_update_date'     => date("Y-m-d H:i:s"),
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->AdminModel->update_colleagues($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('colleagues'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_colleagues_view($id){
        $data['get_single_colleagues'] = $this->AdminModel->get_single_colleagues($id);
        $this->load->view('admin/colleagueext/view',$data);
    }

    public function a_colleagues_delete($id){
        $this->AdminModel->delete_colleagues($id);
        redirect(base_url($uri = "colleagues")); 
    }

    public function a_students(){
        $data['get_all_students'] = $this->AdminModel->get_all_students();
        $this->load->view('admin/students', $data);
    }

    public function a_students_create(){
        $this->load->view('admin/studentext/create');
    }

    public function a_students_create_act(){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription)){

                $config['upload_path'] = './uploads/students/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "st_name"            => $name,
                    "st_name_eng"        => $engname,
                    "st_name_ru"         => $runame,
                    "st_description"     => $description,
                    "st_description_eng" => $engdescription,
                    "st_description_ru"  => $rudescription,
                    'st_img'             => $img,
                    'st_img_ext'         => $img_ext,
                    'st_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_students($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('students'));
            } else {
                redirect(base_url('students_create'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect(base_url('students_create'));
        }      
    }

    public function a_students_update($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_student'] = $this->AdminModel->get_single_student($id);
        $this->load->view('admin/studentext/update', $data);
    }

    public function a_students_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        $description    = $_POST['description'];
        $engdescription = $_POST['engdescription'];
        $rudescription  = $_POST['rudescription'];

           if(!empty($name) && !empty($engname) && !empty($runame) && !empty($description) && !empty($engdescription) && !empty($rudescription)){

                $config['upload_path'] = './uploads/students/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "st_name"            => $name,
                    "st_name_eng"        => $engname,
                    "st_name_ru"         => $runame,
                    "st_description"     => $description,
                    "st_description_eng" => $engdescription,
                    "st_description_ru"  => $rudescription,
                    'st_img'             => $img,
                    'st_img_ext'         => $img_ext,
                    'st_update_date'     => date("Y-m-d H:i:s"),
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->AdminModel->update_students($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('students'));
            } else {
                $data = [
                    "st_name"            => $name,
                    "st_name_eng"        => $engname,
                    "st_name_ru"         => $runame,
                    "st_description"     => $description,
                    "st_description_eng" => $engdescription,
                    "st_description_ru"  => $rudescription,
                    'st_update_date'     => date("Y-m-d H:i:s"),
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->AdminModel->update_students($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('students'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_students_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_student'] = $this->AdminModel->get_single_student($id);
        $this->load->view('admin/studentext/view', $data);
    }

    public function a_students_delete($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_student($id);
        redirect(base_url('students'));
    } 

    public function a_user_reguest(){
        $data['get_all_message'] = $this->AdminModel->get_all_message();
        $this->load->view('admin/user_message', $data);
    }

    public function a_user_reguest_delete($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_reguest($id);
        redirect(base_url('user_reguest'));
    }

    public function a_user_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_message'] = $this->AdminModel->get_single_message($id);
        $this->load->view('admin/userext/view', $data);
    }

    public function a_user_gallery(){
        $data['get_all_gallery'] = $this->AdminModel->get_all_gallery();
        $this->load->view('admin/a_gallery', $data);
    }

    public function a_user_gallery_create(){
        $this->load->view('admin/galleryext/create');
    }

    public function a_user_gallery_create_act(){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        

           if(!empty($name) && !empty($engname) && !empty($runame)){

                $config['upload_path'] = './uploads/gallery/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "g_name"            => $name,
                    "g_name_eng"        => $engname,
                    "g_name_ru"         => $runame,
                    'g_img'             => $img,
                    'g_img_ext'         => $img_ext,
                    'g_create_date'     => date("Y-m-d H:i:s"),
                ];

                $data = $this->security->xss_clean($data);

                $this->AdminModel->insert_gallery($data);
                $this->session->set_flashdata('success', 'Məlumat uğurla daxil edildi!');
                redirect(base_url('a_gallery'));
            } else {
                redirect(base_url('gallery_create'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect(base_url('gallery_create'));
        }      
    }
    
    public function a_user_gallery_update($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_img'] = $this->AdminModel->get_single_img($id);
        $this->load->view('admin/galleryext/update', $data);
    }

    public function a_user_gallery_update_act($id){
        $name           = $_POST['name'];
        $engname        = $_POST['engname'];
        $runame         = $_POST['runame'];
        
           if(!empty($name) && !empty($engname) && !empty($runame)){

                $config['upload_path']   = './uploads/gallery/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|doc|ppt';
                // $config['max_size'] = '100';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

            if($this->upload->do_upload("images")) {

                $img      = $this->upload->data('file_name');
                $img_ext  = $this->upload->data('file_ext');

                $data = [
                    "g_name"            => $name,
                    "g_name_eng"        => $engname,
                    "g_name_ru"         => $runame,
                    'g_img'             => $img,
                    'g_img_ext'         => $img_ext,
                    'g_update_date'     => date("Y-m-d H:i:s"),
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->AdminModel->update_customer($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('a_gallery'));
            } else {
                $data = [
                    "g_name"            => $name,
                    "g_name_eng"        => $engname,
                    "g_name_ru"         => $runame,
                    'g_update_date'     => date("Y-m-d H:i:s"),
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->AdminModel->update_gallery($id, $data);
                $this->session->set_flashdata('success', 'Məlumat uğurla yeniləndi!');
                redirect(base_url('a_gallery'));
            }
        } else {
            // $this->session->set_flashdata('error', 'Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function a_user_gallery_view($id){
        $id = $this->security->xss_clean($id);
        $data['get_single_img'] = $this->AdminModel->get_single_img($id);        
        $this->load->view('admin/galleryext/view', $data);
    }

    public function a_user_gallery_delete($id){
        $id = $this->security->xss_clean($id);
        $this->AdminModel->delete_img($id);
        redirect(base_url('a_gallery'));
    }

}