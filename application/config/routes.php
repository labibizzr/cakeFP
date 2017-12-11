<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'C_pages';

// admin
$route['admin'] = 'C_admin/index';
$route['admin/login'] = 'C_admin/login';
$route['admin/logout'] = 'C_admin/logout';
$route['admin/tabel/order'] = 'C_admin/tabelOrder';
$route['admin/tabel/customer'] = 'C_admin/tabelCustomer';
$route['admin/tabel/menu'] = 'C_admin/tabelMenu';
$route['admin/tabel/menu/edit/(:num)'] = 'C_admin/editMenu/$1';
// user
$route['menu'] = 'C_pages/menu';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
