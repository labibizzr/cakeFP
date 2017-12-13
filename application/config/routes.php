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
$route['admin/tabel/menu/create'] = 'C_admin/createMenu';
$route['admin/tabel/menu/delete/(:num)'] = 'C_admin/deleteMenu/$1';
// user
$route['menu'] = 'C_pages/menu';
$route['basket'] = 'C_pages/basket';
$route['register'] = 'C_pages/register';
$route['logout'] = 'C_pages/logout';
$route['login'] = 'C_pages/login';
$route['customer_order'] = 'C_pages/customerOrderPage';
$route['customer_order/view/(:any)'] = 'C_pages/customerOrderDetail/$1';
$route['checkout'] = 'C_pages/checkout';
$route['checkout1'] = 'C_pages/checkout1';
$route['checkout2'] = 'C_pages/checkout2';
$route['menu/add/(:num)'] = 'C_pages/addMenuCart/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
