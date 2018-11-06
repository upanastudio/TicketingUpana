<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['admin'] = 'admin/index';
$route['issues/open'] = 'issues/openissues';
$route['issues/close'] = 'issues/closeissues';

$route['client'] =

$route['default_controller'] = 'pages/view';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
