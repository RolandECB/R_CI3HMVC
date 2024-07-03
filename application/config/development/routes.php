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

$route['default_controller'] = 'auth/login_ctl';

$route['dashboard']  = 'dashboard/dashboard';

$route['bank'] = 'bank/manage';
$route['bank/(:any)'] = 'bank/manage/$1';
$route['bank/(:any)/(:any)'] = 'bank/manage/$1/$2';

$route['brand'] = 'brand/manage';
$route['brand/(:any)'] = 'brand/manage/$1';
$route['brand/(:any)/(:any)'] = 'brand/manage/$1/$2';

$route['banners'] = 'banners/manage';
$route['banners/(:any)'] = 'banners/manage/$1';
$route['banners/(:any)/(:any)'] = 'banners/manage/$1/$2';

$route['categories'] = 'categories/manage';
$route['categories/(:any)'] = 'categories/manage/$1';
$route['categories/(:any)/(:any)'] = 'categories/manage/$1/$2';

$route['contact'] = 'contact/manage';
$route['contact/(:any)'] = 'contact/manage/$1';
$route['contact/(:any)/(:any)'] = 'contact/manage/$1/$2';

$route['tags'] = 'tags/manage';
$route['tags/(:any)'] = 'tags/manage/$1';
$route['tags/(:any)/(:any)'] = 'tags/manage/$1/$2';

$route['discount'] = 'discount/manage';
$route['discount/(:any)'] = 'discount/manage/$1';
$route['discount/(:any)/(:any)'] = 'discount/manage/$1/$2';


$route['help'] = 'help/manage';
$route['help/(:any)'] = 'help/manage/$1';
$route['help/(:any)/(:any)'] = 'help/manage/$1/$2';

$route['fitsize'] = 'fitsize/manage';
$route['fitsize/(:any)'] = 'fitsize/manage/$1';
$route['fitsize/(:any)/(:any)'] = 'fitsize/manage/$1/$2';

$route['promo'] = 'promo/manage';
$route['promo/(:any)'] = 'promo/manage/$1';
$route['promo/(:any)/(:any)'] = 'promo/manage/$1/$2';

$route['users'] = 'users/manage';
$route['users/(:any)'] = 'users/manage/$1';
$route['users/(:any)/(:any)'] = 'users/manage/$1/$2';


$route['profile'] = 'profile/manage';
$route['profile/(:any)'] = 'profile/manage/$1';

$route['settings'] = 'settings/manage';
$route['settings/(:any)'] = 'settings/manage/$1';

$route['permission'] = 'permission/manage';
$route['permission/(:any)'] = 'permission/manage/$1';
$route['permission/(:any)/(:any)'] = 'permission/manage/$1/$2';

//$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
