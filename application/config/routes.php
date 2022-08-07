<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'form/index';

$route['form'] = 'form/index';
$route['form/create'] = 'form/create';
$route['form/edit'] = 'form/edit';
$route['form/search'] = 'form/search';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['form'] = 'form/index';
// $route['form/create'] = 'form/create';
// $route['form/edit'] = 'form/edit';
// $route['form/search'] = 'form/search';
// $route['(:any)'] = 'pages/view/$1';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;

