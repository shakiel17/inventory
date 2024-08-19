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

//=====================User Routes============================
$route['production'] = 'pages/production_report';
$route['view_receiving_report'] = 'pages/view_receiving_report';
$route['receiving_report'] = 'pages/receiving_report';
$route['count_sheet_print'] = 'pages/count_sheet_print';
$route['count_sheet'] = 'pages/count_sheet';
$route['view_stock_card'] = 'pages/view_stock_card';
$route['stock_card'] = 'pages/stock_card';
$route['post_stock_transfer'] = 'pages/post_stock_transfer';
$route['stock_transfer/(:any)'] = 'pages/stock_transfer/$1';
$route['save_kit_qty'] = 'pages/save_kit_qty';
$route['save_kit_item'] = 'pages/save_kit_item';
$route['save_kit'] = 'pages/save_kit';
$route['add_kit_item/(:any)'] = 'pages/add_kit_item/$1';
$route['add_kit_qty/(:any)'] = 'pages/add_kit_qty/$1';
$route['edit_kit/(:any)'] = 'pages/edit_kit/$1';
$route['add_kit'] = 'pages/add_kit';
$route['kit_assembly'] = 'pages/kit_assembly';
$route['save_production'] = 'pages/save_production';
$route['add_production/(:any)/(:any)'] = 'pages/add_production/$1/$2';
$route['manage_production'] = 'pages/manage_production';
$route['rr_print/(:any)/(:any)'] = 'pages/rr_print/$1/$2';
$route['post_receiving'] = 'pages/post_receiving';
$route['new_receiving'] = 'pages/new_receiving';
$route['manual_receiving'] = 'pages/manual_receiving';
$route['edit_item/(:any)'] = 'pages/edit_item/$1';
$route['save_item'] = 'pages/save_item';
$route['add_item'] = 'pages/add_item';
$route['manage_items'] = 'pages/manage_items';
$route['authentication'] = 'pages/authentication';
$route['save_user'] = 'pages/save_user';
$route['register'] = 'pages/register';
$route['logout'] = 'pages/logout';
$route['login'] = 'pages/login';
$route['default_controller'] = 'pages/index';
$route['attendance'] = 'pages/attendance';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
