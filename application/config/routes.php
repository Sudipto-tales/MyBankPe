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
$route['default_controller'] = 'PageController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// $route['auth'] = 'AuthController/auth';
// // $route['auth/(:num)'] = 'AdminController/yip/$1/$2';
// $route['auth_refresh'] = 'AuthController/refresh_limit';

$route['features'] = 'PageController/feature';
$route['comming_soon'] = 'ErrorController/index';

//service pages
$route['services/payout'] = 'PageController/payout';
$route['services/payment_getway'] = 'PageController/payment_getway';
$route['services/current_account'] = 'PageController/current_account';
$route['services/source_to_pay'] = 'PageController/source_to_pay';

//Blogs
$route['blog_single'] = 'BlogController/index';
$route['blog'] = 'BlogController/blog';
$route['blogs/search_result'] = 'BlogController/blog_search';


//contact us page
$route['contact_us'] = 'ContactUsController/index';
$route['contact_us/remove/(:num)'] = 'ContactUsController/remove/$1';


//Admin Pages
$route['admin'] = 'AdminController/index';
$route['admin/contact_us'] = 'ContactUsController/contact_view';
$route['admin/mail'] = 'EmailController/index';
$route['admin/blogs'] = 'BlogController/blog_upload';

