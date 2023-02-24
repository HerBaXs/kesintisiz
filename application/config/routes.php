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
// TODO: The My Web Site //////////////////////
$route['default_controller'] = 'UserController';
$route['PageUp'] = 'UserController/index';

//End Site/////////////////////////////////////


// TODO: The Admin Login //////////////////////

$route['Login']     = 'AdminController/login';
$route['Welcome']   = 'AdminController/login_act';
$route['Out']       = 'AdminController/login_out';

//End  Login////////////////////////////////////

// TODO: The Admin Panel //////////////////////

$route['Dashboard']              = 'AdminController/dashboard';
$route['Chart']                  = 'AdminController/chart';
$route['HomeView']               = 'AdminController/home_view';
$route['HomeEdit/(:any)']        = 'AdminController/home_edit/$1';
$route['HomeEditAct/(:any)']     = 'AdminController/home_edit_act/$1';
$route['BannerAdd']              = 'AdminController/banner_add';
$route['BannerAddAct']           = 'AdminController/banner_add_action';
$route['BannerView']             = 'AdminController/banner_view';
$route['BannerEdit/(:any)']      = 'AdminController/banner_edit/$1';
$route['BannerEditAct/(:any)']   = 'AdminController/banner_edit_act/$1';
$route['BannerDel/(:any)']       = 'AdminController/banner_del/$1';
// Services ///////////////////////////////////
$route['Services']                  = 'AdminController/services_list';
$route['ServicesAdd']               = 'AdminController/services_add';
$route['ServicesAddAct']            = 'AdminController/services_add_act';
$route['ServicesEdit/(:any)']       = 'AdminController/services_edit/$1';
$route['ServicesEditAct/(:any)']    = 'AdminController/services_edit_act/$1';
$route['ServicesDel/(:any)']        = 'AdminController/services_del/$1';
$route['ServicesView']              = 'AdminController/services_view';
// About //////////////////////////////////////
$route['About']                         = 'AdminController/about_list';
$route['AboutAdd']                      = 'AdminController/about_add';
$route['AboutAddAct']                   = 'AdminController/about_add_act';
$route['AboutEdit/(:any)']              = 'AdminController/about_edit/$1';
$route['AboutEditAct/(:any)']           = 'AdminController/about_edit_act/$1';
$route['AboutView']                     = 'AdminController/about_view';
$route['AboutDel/(:any)']               = 'AdminController/about_del/$1';
$route['AboutTitleAdd']                 = 'AdminController/about_title_add';
$route['AboutTitleAddAct']              = 'AdminController/about_title_add_act';
$route['AboutTitleEdit/(:any)']         = 'AdminController/about_title_edit/$1';
$route['AboutTitleEditAct/(:any)']      = 'AdminController/about_title_edit_act/$1';
$route['AboutTitleDel/(:any)']          = 'AdminController/about_title_del/$1';
$route['AboutTitleView']                = 'AdminController/about_title_view';
$route['AboutImg']                      = 'AdminController/about_img';
$route['AboutImgAct']                   = 'AdminController/about_img_act';
$route['AboutImgEdit/(:any)']           = 'AdminController/about_img_edit/$1';
$route['AboutImgEditAct/(:any)']        = 'AdminController/about_img_edit_act/$1';
$route['AboutImgDel/(:any)']            = 'AdminController/about_img_del/$1';
$route['AboutImgView']                  = 'AdminController/about_img_view';
// Inbox ///////////////////////////////////////
$route['Inbox']                     = 'AdminController/inbox';
$route['InboxDel/(:any)']           = 'AdminController/inbox_del/$1';
// Footer //////////////////////////////////////
$route['Footer']                        = 'AdminController/footer';
$route['Footer_Add']                    = 'AdminController/footer_add';
$route['Footer_Add_Act']                = 'AdminController/footer_add_act';
$route['Footer_Edit/(:any)']            = 'AdminController/footer_edit/$1';
$route['Footer_Edit_Act/(:any)']        = 'AdminController/footer_edit_act/$1';
$route['Footer_Del/(:any)']             = 'AdminController/footer_del/$1';
// OUT OFFICE //////////////////////////////////
$route['Out_Off_Edit/(:any)']           = 'AdminController/our_off_edit/$1';
$route['Out_Off_Edit_Act/(:any)']       = 'AdminController/out_off_edit_act/$1';
// Social Media ///////////////////////////////
$route['Smm_Add']               = 'AdminController/smm_add';
$route['Smm_Add_Act']           = 'AdminController/smm_add_act';
$route['Smm_Edit/(:any)']       = 'AdminController/smm_edit/$1';
$route['Smm_Edit_Act/(:any)']   = 'AdminController/smm_edit_act/$1';
$route['Smm_Del/(:any)']        = 'AdminController/smm_del/$1';
 
// End Panel //////////////////////////////////

// TODO: The Contact Form ////////////////////

$route['Form']          = 'ContFormController/form';
$route['Form_Add']      = 'ContFormController/form_add_act';

// End Form/////////////////////////////////////











////
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
