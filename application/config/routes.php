<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']          = 'UserController';
$route['home']                        = 'UserController/u_index';
$route['all_languages']               = 'UserController/u_all_languages';


$route['all_languages/(:num)']        = 'UserController/u_all_languages';
$route['languages_detail/(.*)']       = 'UserController/u_languages_detail/$1';

$route['computer']                    = 'UserController/u_all_compcourse';
$route['computer/(:num)']             = 'UserController/u_all_compcourse';
$route['computer_detail/(.*)']        = 'UserController/u_compcourse_detail/$1';

$route['all_psychology']              = 'UserController/u_all_psychology';
$route['all_psychology/(:num)']       = 'UserController/u_all_psychology';
$route['psychology_detail/(.*)']      = 'UserController/u_psychology_detail/$1';


$route['all_toefl']                   = 'UserController/u_all_toefl';
$route['all_toefl/(:num)']            = 'UserController/u_all_toefl';
$route['toefl_detail/(.*)']           = 'UserController/u_toefl_detail/$1';


$route['all_acca']                    = 'UserController/u_all_acca';
$route['all_acca/(:num)']             = 'UserController/u_all_acca';
$route['acca_detail/(.*)']            = 'UserController/u_acca_detail/$1';


$route['all_design']                  = 'UserController/u_all_design';
$route['all_design/(:num)']           = 'UserController/u_all_design';
$route['design_detail/(.*)']          = 'UserController/u_design_detail/$1';


$route['all_prepearing']              = 'UserController/u_all_prepearing';
$route['all_prepearing/(:num)']       = 'UserController/u_all_prepearing';
$route['prepearing_detail/(.*)']      = 'UserController/u_prepearing_detail/$1';


$route['all_yos']                     = 'UserController/u_all_yos';
$route['all_yos/(:num)']              = 'UserController/u_all_yos';
$route['yos_detail/(.*)']             = 'UserController/u_yos_detail/$1';


$route['all_translation']             = 'UserController/u_all_translation';
$route['translation_detail/(.*)']     = 'UserController/u_translation_detail/$1';


$route['all_training']                = 'UserController/u_all_training';
$route['all_training/(:num)']         = 'UserController/u_all_training';
$route['training_detail/(.*)']        = 'UserController/u_training_detail/$1';


$route['all_study_abr']               = 'UserController/u_all_study_abroad';
$route['all_study_abr/(:num)']        = 'UserController/u_all_study_abroad';
$route['study_abr_detail/(.*)']       = 'UserController/u_study_abroad_detail/$1';


$route['call_us']                    = 'UserController/u_call_us';
$route['call_us_education']          = 'UserController/u_call_us_education';
$route['call_us_kids']               = 'UserController/u_call_us_kids';
$route['call_us_consulting']         = 'UserController/u_call_us_consulting';


$route['register']                   = 'UserController/u_register';
$route['reguest_act']                = 'UserController/u_reguest_act';


$route['all_customers']              = 'UserController/u_all_customers';
$route['all_customers/(:num)']       = 'UserController/u_all_customers';

$route['all_colleagues']             = 'UserController/u_all_colleagues';
$route['all_colleagues/(:num)']      = 'UserController/u_all_colleagues';
$route['colleagues_detail/(.*)']     = 'UserController/u_all_colleagues_detail/$1';


$route['gallery']                    = 'UserController/u_gallery';

// Adminpanelroutes

$route['login']                       = 'AdminController/index';
$route['login_act']                   = 'AdminController/index_act';
$route['log_out']                     = 'AdminController/log_out_act';
$route['dashboard']                   = 'AdminController/a_dashboard';
$route['allcourses']                  = 'AdminController/a_all_courses';
$route['allcourses_create']           = 'AdminController/a_all_courses_create';


$route['languages']                   = 'AdminController/a_languages';
$route['languages_create']            = 'AdminController/a_languages_create';
$route['languages_create_act']        = 'AdminController/a_languages_create_act';
$route['delete_language/(.*)']        = 'AdminController/a_delete_language/$1';
$route['update_language/(.*)']        = 'AdminController/a_update_language/$1';
$route['update_language_act/(.*)']    = 'AdminController/a_update_language_act/$1';
$route['view_language/(.*)']          = 'AdminController/a_view_language/$1';


$route['computercourses']             = 'AdminController/a_computer_course';
$route['computercourses_create']      = 'AdminController/a_computer_course_create';
$route['compcourses_create_act']      = 'AdminController/a_compcourse_create_act';
$route['update_comp/(.*)']            = 'AdminController/a_update_comp/$1';
$route['update_comp_act/(.*)']        = 'AdminController/a_update_comp_act/$1';
$route['delete_comp_act/(.*)']        = 'AdminController/a_delete_comp/$1';
$route['comp_view/(.*)']              = 'AdminController/a_comp_view/$1';


$route['psychology']                  = 'AdminController/a_psychology';
$route['psychology_create']           = 'AdminController/a_psychology_create';
$route['psychology_create_act']       = 'AdminController/a_psychology_create_act';
$route['view_psychology/(.*)']        = 'AdminController/a_psychology_view/$1';
$route['delete_psychology/(.*)']      = 'AdminController/a_psychology_delete/$1';
$route['update_psychology/(.*)']      = 'AdminController/a_psychology_update/$1';
$route['update_psychology_act/(.*)']  = 'AdminController/a_psychology_update_act/$1';


$route['toefl']                       = 'AdminController/a_toefl';
$route['toefl_create']                = 'AdminController/a_toefl_create';
$route['toefl_create_act']            = 'AdminController/a_toefl_create_act';
$route['toefl_view/(.*)']             = 'AdminController/a_toefl_view/$1';
$route['toefl_update/(.*)']           = 'AdminController/a_toefl_update/$1';
$route['toefl_update_act/(.*)']       = 'AdminController/a_toefl_update_act/$1';
$route['toefl_delete/(.*)']           = 'AdminController/a_toefl_delete/$1';


$route['acca']                        = 'AdminController/a_acca';
$route['acca_create']                 = 'AdminController/a_acca_create';
$route['acca_create_act']             = 'AdminController/a_acca_create_act';
$route['acca_view/(.*)']              = 'AdminController/a_acca_view/$1';
$route['acca_update/(.*)']            = 'AdminController/a_acca_update/$1';
$route['acca_update_act/(.*)']        = 'AdminController/a_acca_update_act/$1';
$route['acca_delete/(.*)']            = 'AdminController/a_acca_delete/$1';


$route['design']                      = 'AdminController/a_design';
$route['design_create']               = 'AdminController/a_design_create';
$route['design_create_act']           = 'AdminController/a_design_create_act';
$route['design_update/(.*)']          = 'AdminController/a_design_update/$1';
$route['design_update_act/(.*)']      = 'AdminController/a_design_update_act/$1';
$route['design_delete/(.*)']          = 'AdminController/a_design_delete/$1';
$route['design_view/(.*)']            = 'AdminController/a_design_view/$1';


$route['prepearing']                  = 'AdminController/a_prepearing';
$route['prepearing_create']           = 'AdminController/a_prepearing_create';
$route['prepearing_create_act']       = 'AdminController/a_prepearing_create_act';
$route['prepearing_view/(.*)']        = 'AdminController/a_prepearing_view/$1';
$route['prepearing_update/(.*)']      = 'AdminController/a_prepearing_update/$1';
$route['prepearing_update_act/(.*)']  = 'AdminController/a_prepearing_update_act/$1';
$route['prepearing_delete/(.*)']      = 'AdminController/a_prepearing_delete/$1';


$route['yos']                         = 'AdminController/a_yos';
$route['yos_create']                  = 'AdminController/a_yos_create';
$route['yos_create_act']              = 'AdminController/a_yos_create_act';
$route['yos_view/(.*)']               = 'AdminController/a_yos_view/$1';
$route['yos_update/(.*)']             = 'AdminController/a_yos_update/$1';
$route['yos_update_act/(.*)']         = 'AdminController/a_yos_update_act/$1';
$route['yos_delete/(.*)']             = 'AdminController/a_yos_delete/$1';


$route['translation']                 = 'AdminController/a_translation';
$route['translation_create']          = 'AdminController/a_translation_create';
$route['translation_create_act']      = 'AdminController/a_translation_create_act';
$route['translation_view/(.*)']       = 'AdminController/a_translation_view/$1';
$route['translation_update/(.*)']     = 'AdminController/a_translation_update/$1';
$route['translation_update_act/(.*)'] = 'AdminController/a_translation_update_act/$1';
$route['translation_delete/(.*)']     = 'AdminController/a_translation_delete/$1';


$route['training']                    = 'AdminController/a_training';
$route['training_create']             = 'AdminController/a_training_create';
$route['training_create_act']         = 'AdminController/a_training_create_act';
$route['training_view/(.*)']          = 'AdminController/a_training_view/$1';
$route['training_update/(.*)']        = 'AdminController/a_training_update/$1';
$route['training_update_act/(.*)']    = 'AdminController/a_training_update_act/$1';
$route['training_delete/(.*)']        = 'AdminController/a_training_delete/$1';


$route['study_abr']                   = 'AdminController/a_study';
$route['study_abr_create']            = 'AdminController/a_study_create';
$route['study_abr_create_act']        = 'AdminController/a_study_create_act';
$route['study_abr_view/(.*)']         = 'AdminController/a_study_view/$1';
$route['study_abr_update/(.*)']       = 'AdminController/a_study_update/$1';
$route['study_abr_update_act/(.*)']   = 'AdminController/a_study_update_act/$1';
$route['study_abr_delete/(.*)']       = 'AdminController/a_study_delete/$1';


$route['customers']                   = 'AdminController/a_customers';
$route['customers_create']            = 'AdminController/a_customers_create';
$route['customers_create_act']        = 'AdminController/a_customers_create_act';
$route['customers_update/(.*)']       = 'AdminController/a_customers_update/$1';
$route['customers_update_act/(.*)']   = 'AdminController/a_customers_update_act/$1';
$route['customers_view/(.*)']         = 'AdminController/a_customers_view/$1';
$route['customers_delete/(.*)']       = 'AdminController/a_customers_delete/$1';


$route['colleagues']                  = 'AdminController/a_colleagues';
$route['colleagues_create']           = 'AdminController/a_colleagues_crate';
$route['colleagues_create_act']       = 'AdminController/a_colleagues_crate_act';
$route['colleagues_update/(.*)']      = 'AdminController/a_colleagues_update/$1';
$route['colleagues_update_act/(.*)']  = 'AdminController/a_colleagues_update_act/$1';
$route['colleagues_view/(.*)']        = 'AdminController/a_colleagues_view/$1';
$route['colleagues_delete/(.*)']      = 'AdminController/a_colleagues_delete/$1';

$route['students']                    = 'AdminController/a_students';
$route['students_create']             = 'AdminController/a_students_create';
$route['students_create_act']         = 'AdminController/a_students_create_act';
$route['students_update/(.*)']        = 'AdminController/a_students_update/$1';
$route['students_update_act/(.*)']    = 'AdminController/a_students_update_act/$1';
$route['students_view/(.*)']          = 'AdminController/a_students_view/$1';
$route['students_delete/(.*)']        = 'AdminController/a_students_delete/$1';


$route['user_reguest']                = 'AdminController/a_user_reguest';
$route['user_reguest_view/(.*)']      = 'AdminController/a_user_view/$1';
$route['user_reguest_delete/(.*)']    = 'AdminController/a_user_reguest_delete/$1';


$route['a_gallery']                   = 'AdminController/a_user_gallery';
$route['gallery_create']              = 'AdminController/a_user_gallery_create';
$route['gallery_create_act']          = 'AdminController/a_user_gallery_create_act';
$route['gallery_update/(.*)']         = 'AdminController/a_user_gallery_update/$1';
$route['gallery_update_act/(.*)']     = 'AdminController/a_user_gallery_update_act/$1';
$route['gallery_view/(.*)']           = 'AdminController/a_user_gallery_view/$1';
$route['gallery_delete/(.*)']         = 'AdminController/a_user_gallery_delete/$1';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;