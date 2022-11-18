<?php

class UserController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->lang->load('message', 'english');
    }

    public function u_index()
    {
        $data['get_all_languages2']  = $this->UserModel->get_all_languages2();
        $data['get_all_compcourse2'] = $this->UserModel->get_all_compcourse2();
        $data['get_all_training2']   = $this->UserModel->get_all_training2();
        $data['get_all_students']    = $this->UserModel->get_all_students();
        $data['get_all_study2']      = $this->UserModel->get_all_study2();
        $this->load->view('user/index', $data);
    }

    public function u_all_languages()
    {
        $this->load->library('pagination');
        $config['base_url']        = base_url('all_languages');
        $config['total_rows']      = $this->UserModel->get_languages_count();
        $config['per_page']        = 3;

        #customize pagination
        $config['full_tag_open']   = '<ul class="myactivebtn">';
        $config['full_tag_close']  = '</ul>';
        $config['attributes']      = ['class' => 'page-link'];
        $config['first_link']      = false;
        $config['last_link']       = false;
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li><i class="fa fa-angle-right">';
        $config['next_tag_close']  = '</i></li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';

        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['get_all_languages'] = $this->UserModel->get_all_languages($config['per_page'], $page);
        $data["links"]             = $this->pagination->create_links();
        $this->load->view('user/alllanguages', $data);
    }

    public function u_languages_detail($id)
    {
        $id = $this->security->xss_clean($id);
        $data['get_single_language'] = $this->UserModel->get_single_language($id);
        $this->load->view('user/meetingdetails/detaillanguages', $data);
    }

    public function u_all_compcourse()
    {
        $this->load->library('pagination');
        $config['base_url']        = base_url('computer');
        $config['total_rows']      = $this->UserModel->get_compcourse_count();
        $config['per_page']        = 3;

        $config['full_tag_open']   = '<ul class="myactivebtn">';
        $config['full_tag_close']  = '</ul>';
        $config['attributes']      = ['class' => 'page-link'];
        $config['first_link']      = false;
        $config['last_link']       = false;
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li><i class="fa fa-angle-right">';
        $config['next_tag_close']  = '</i></li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';
     
        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['get_all_compcourse']= $this->UserModel->get_all_compcourse($config['per_page'], $page);
        $data["links"]             = $this->pagination->create_links();
        $this->load->view('user/computer', $data);
    }

    public function u_compcourse_detail($id)
    {
        $id = $this->security->xss_clean($id);
        $data['get_single_compcourse'] = $this->UserModel->get_single_compcourse($id);
        $this->load->view('user/meetingdetails/detailcomputer', $data);
    }

    public function u_all_psychology()
    {
        $this->load->library('pagination');
        $config['base_url']        = base_url('all_psychology');
        $config['total_rows']      = $this->UserModel->get_psychology_count();
        $config['per_page']        = 3;

        $config['full_tag_open']   = '<ul class="myactivebtn">';
        $config['full_tag_close']  = '</ul>';
        $config['attributes']      = ['class' => 'page-link'];
        $config['first_link']      = false;
        $config['last_link']       = false;
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li><i class="fa fa-angle-right">';
        $config['next_tag_close']  = '</i></li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';

        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;      
        $data['get_all_psychology']= $this->UserModel->get_all_psychology($config['per_page'], $page);
        $data["links"]             = $this->pagination->create_links();
        $this->load->view('user/psychology', $data);
    }

    public function u_psychology_detail($id)
    {
        $id = $this->security->xss_clean($id);
        $data['get_single_psychology'] = $this->UserModel->get_single_psychology($id);
        $this->load->view('user/meetingdetails/detailpsychology', $data);
    }

    public function u_all_toefl()
    {

        $this->load->library('pagination');
        $config['base_url']        = base_url('all_toefl');
        $config['total_rows']      = $this->UserModel->get_toefl_count();
        $config['per_page']        = 3;

        $config['full_tag_open']   = '<ul class="myactivebtn">';
        $config['full_tag_close']  = '</ul>';
        $config['attributes']      = ['class' => 'page-link'];
        $config['first_link']      = false;
        $config['last_link']       = false;
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li><i class="fa fa-angle-right">';
        $config['next_tag_close']  = '</i></li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';
            
        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;     
        $data['get_all_toefl']     = $this->UserModel->get_all_toefl($config['per_page'], $page);
        $data["links"]             = $this->pagination->create_links();
        $this->load->view('user/toefl', $data);
    }

    public function u_toefl_detail($id)
    {
        $id = $this->security->xss_clean($id);
        $data['get_single_toefl'] = $this->UserModel->get_single_toefl($id);
        $this->load->view('user/meetingdetails/detailtoefl', $data);
    }

    public function u_all_acca()
    { 
        $this->load->library('pagination');
        $config['base_url']        = base_url('all_acca');
        $config['total_rows']      = $this->UserModel->get_acca_count();
        $config['per_page']        = 3;

        $config['full_tag_open']   = '<ul class="myactivebtn">';
        $config['full_tag_close']  = '</ul>';
        $config['attributes']      = ['class' => 'page-link'];
        $config['first_link']      = false;
        $config['last_link']       = false;
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li><i class="fa fa-angle-right">';
        $config['next_tag_close']  = '</i></li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';

        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;      
        $data['get_all_acca']      = $this->UserModel->get_all_acca($config['per_page'], $page);
        $data["links"]             = $this->pagination->create_links();
        $this->load->view('user/acca', $data);
    }

    public function u_acca_detail($id)
    {
        $id = $this->security->xss_clean($id);
        $data['get_single_acca'] = $this->UserModel->get_single_acca($id);
        $this->load->view('user/meetingdetails/detailacca', $data);
    }

    public function u_all_design()
    {
        $this->load->library('pagination');
        $config['base_url']        = base_url('all_design');
        $config['total_rows']      = $this->UserModel->get_design_count();
        $config['per_page']        = 3;

        $config['full_tag_open']   = '<ul class="myactivebtn">';
        $config['full_tag_close']  = '</ul>';
        $config['attributes']      = ['class' => 'page-link'];
        $config['first_link']      = false;
        $config['last_link']       = false;
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li><i class="fa fa-angle-right">';
        $config['next_tag_close']  = '</i></li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';

        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['get_all_design']    = $this->UserModel->get_all_design($config['per_page'], $page);
        $data["links"]             = $this->pagination->create_links();
        $this->load->view('user/design', $data);
    }

    public function u_design_detail($id)
    {
        $id = $this->security->xss_clean($id);
        $data['get_single_design'] = $this->UserModel->get_single_design($id);
        $this->load->view('user/meetingdetails/detaildesign', $data);
    }

    public function u_all_prepearing()
    {
        $this->load->library('pagination');
        $config['base_url']        = base_url('all_prepearing');
        $config['total_rows']      = $this->UserModel->get_prepearing_count();
        $config['per_page']        = 3;

        $config['full_tag_open']   = '<ul class="myactivebtn">';
        $config['full_tag_close']  = '</ul>';
        $config['attributes']      = ['class' => 'page-link'];
        $config['first_link']      = false;
        $config['last_link']       = false;
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li><i class="fa fa-angle-right">';
        $config['next_tag_close']  = '</i></li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';

        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['get_all_prepearing']= $this->UserModel->get_all_prepearing($config['per_page'], $page);
        $data["links"]             = $this->pagination->create_links();
        $this->load->view('user/prepearing', $data);
    }

    public function u_prepearing_detail($id)
    {
        $id = $this->security->xss_clean($id);
        $data['get_single_prepearing'] = $this->UserModel->get_single_prepearing($id);
        $this->load->view('user/meetingdetails/detailprepearing', $data);
    }

    public function u_all_yos()
    {
        $this->load->library('pagination');
        $config['base_url']        = base_url('all_yos');
        $config['total_rows']      = $this->UserModel->get_yos_count();
        $config['per_page']        = 3;

        $config['full_tag_open']   = '<ul class="myactivebtn">';
        $config['full_tag_close']  = '</ul>';
        $config['attributes']      = ['class' => 'page-link'];
        $config['first_link']      = false;
        $config['last_link']       = false;
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li><i class="fa fa-angle-right">';
        $config['next_tag_close']  = '</i></li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';

        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['get_all_yos']       = $this->UserModel->get_all_yos($config['per_page'], $page);
        $data["links"]             = $this->pagination->create_links();
        $this->load->view('user/yos', $data);
    }

    public function u_yos_detail($id)
    {
        $id = $this->security->xss_clean($id);
        $data['get_single_yos'] = $this->UserModel->get_single_yos($id);
        $this->load->view('user/meetingdetails/detailyos', $data);
    }

    public function u_all_translation()
    {
        $data['get_all_translation'] = $this->UserModel->get_all_translation();
        $this->load->view('user/translation', $data);
    }

    public function u_translation_detail($id){
        $data['get_single_translation'] = $this->UserModel->get_single_translation($id);
        $this->load->view('user/meetingdetails/detailtranslation', $data);
    }

    public function u_all_training()
    {
        $this->load->library('pagination');
        $config['base_url']        = base_url('all_training');
        $config['total_rows']      = $this->UserModel->get_training_count();
        $config['per_page']        = 3;

        $config['full_tag_open']   = '<ul class="myactivebtn">';
        $config['full_tag_close']  = '</ul>';
        $config['attributes']      = ['class' => 'page-link'];
        $config['first_link']      = false;
        $config['last_link']       = false;
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li><i class="fa fa-angle-right">';
        $config['next_tag_close']  = '</i></li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';

        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['get_all_training']  = $this->UserModel->get_all_training($config['per_page'], $page);
        $data["links"]             = $this->pagination->create_links();
        $this->load->view('user/training', $data);
    }

    public function u_training_detail($id)
    {
        $id = $this->security->xss_clean($id);
        $data['get_single_training'] = $this->UserModel->get_single_training($id);
        $this->load->view('user/meetingdetails/detailtraining', $data);
    }

    public function u_all_study_abroad()
    {
        $this->load->library('pagination');
        $config['base_url']        = base_url('all_study_abr');
        $config['total_rows']      = $this->UserModel->get_stabroad_count();
        $config['per_page']        = 3;

        $config['full_tag_open']   = '<ul class="myactivebtn">';
        $config['full_tag_close']  = '</ul>';
        $config['attributes']      = ['class' => 'page-link'];
        $config['first_link']      = false;
        $config['last_link']       = false;
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li><i class="fa fa-angle-right">';
        $config['next_tag_close']  = '</i></li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';

        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['get_all_study']     = $this->UserModel->get_all_study($config['per_page'], $page);
        $data['links']             = $this->pagination->create_links();
        $this->load->view('user/studyabroad', $data);
    }

    public function u_study_abroad_detail($id)
    {
        $id = $this->security->xss_clean($id);
        $data['get_single_study_abr'] = $this->UserModel->get_single_study_abr($id);
        $this->load->view('user/meetingdetails/detailstudyabr', $data);
    }

    public function u_call_us()
    {
        $this->load->view('user/call_us');
    }

    public function u_call_us_education()
    {
        $this->load->view('user/callus/foreingeducation');
    }

    public function u_call_us_kids()
    {
        $this->load->view('user/callus/callkids');
    }

    public function u_call_us_consulting()
    {
        $this->load->view('user/callus/callconsulting');
    }

    public function u_register()
    {
        $this->load->view('user/register');
    }

    public function u_reguest_act()
    {
        $name     = $_POST['name'];
        $surname  = $_POST['surname'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];
        $subject  = $_POST['subject'];
        $select   = $_POST['select'];
        $message  = $_POST['message'];


        if (!empty($name) && !empty($surname) && !empty($phone) && !empty($subject) && !empty($select)) {

            $data = [
                'us_name'        => $name,
                'us_surname'     => $surname,
                'us_email'       => $email,
                'us_phone'       => $phone,
                'us_subject'     => $subject,
                'us_select'      => $select,
                'us_message'     => $message,
                'us_create_date' => date("Y-m-d H:i:s"),
            ];

            $this->session->set_flashdata('success', 'Müraciətiniz uğurla göndərildi!');
            $data = $this->security->xss_clean($data);
            $this->UserModel->insert_message($data);
            redirect(base_url('register'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function u_all_customers()
    {
        $this->load->library('pagination');
        $config['base_url']        = base_url('all_customers');
        $config['total_rows']      = $this->UserModel->get_customers_count();
        $config['per_page']        = 3;

        $config['full_tag_open']   = '<ul class="myactivebtn">';
        $config['full_tag_close']  = '</ul>';
        $config['attributes']      = ['class' => 'page-link'];
        $config['first_link']      = false;
        $config['last_link']       = false;
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li><i class="fa fa-angle-right">';
        $config['next_tag_close']  = '</i></li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';

        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['get_all_customers'] = $this->UserModel->get_all_customers($config['per_page'], $page);
        $data['links']             = $this->pagination->create_links();
        $this->load->view('user/customers', $data);
    }

    public function u_all_colleagues()
    {
        $this->load->library('pagination');
        $config['base_url']        = base_url('all_colleagues');
        $config['total_rows']      = $this->UserModel->get_colleagues_count();
        $config['per_page']        = 3;

        $config['full_tag_open']   = '<ul class="myactivebtn">';
        $config['full_tag_close']  = '</ul>';
        $config['attributes']      = ['class' => 'page-link'];
        $config['first_link']      = false;
        $config['last_link']       = false;
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li><i class="fa fa-angle-right">';
        $config['next_tag_close']  = '</i></li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';

        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['get_all_colleagues']= $this->UserModel->get_all_colleagues($config['per_page'], $page);
        $data['links']             = $this->pagination->create_links();
        $this->load->view('user/colleagues', $data);
    }

    public function u_all_colleagues_detail($id)
    {
        $id = $this->security->xss_clean($id);
        $data['get_single_colleagues'] = $this->UserModel->get_single_colleagues($id);
        $this->load->view('user/meetingdetails/detailcolleagues', $data);
    }

    public function u_gallery()
    {
        $data['get_all_gallery'] = $this->UserModel->get_all_gallery();
        $this->load->view('user/gallery', $data);
    }
}