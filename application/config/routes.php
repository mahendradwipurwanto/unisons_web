<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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

// login
$route['login'] = 'authentication';
$route['recovery-password'] = 'authentication/recovery_password';
$route['reset-password'] = 'authentication/change_password';
$route['logout'] = 'authentication/logout';

// admin
$route['dashboard'] = 'admin';
$route['dashboard/information'] = 'admin/information';

$route['dashboard/list-gallery'] = 'admin/list_gallery';
$route['dashboard/add-new-gallery'] = 'admin/add_gallery';
$route['dashboard/edit-gallery/(:any)'] = 'admin/edit_gallery/$1';

$route['dashboard/manage-collection'] = 'admin/manage_collection';
$route['dashboard/list-foundation'] = 'admin/list_foundation';
$route['dashboard/add-new-fundation'] = 'admin/new_foundation';

// home
$route['about'] = 'home/about';
$route['gallery'] = 'home/gallery';
$route['gallery/(:any)'] = 'home/gallery_detail/$1';
$route['new-collection'] = 'home/new_collection';
$route['unisons-care'] = 'home/union_care';
$route['search'] = 'home/search';

$route['default_controller'] = 'home';
$route['404_override'] = 'home/not_found';
$route['translate_uri_dashes'] = TRUE;
