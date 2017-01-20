<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['Home'] = 'Home';
$route['Student'] = 'Student/Home';
$route['Student/Profile'] = 'Student/myacc';

$route['Admin'] = 'Admin';
$route['Admin/Dashboard'] = 'Admin_Dashboard';
$route['Admin/Manual'] = 'Admin_Dashboard/Manual';
$route['Admin/Changelogs'] = 'Admin_Dashboard/Changelogs';

$route['Faculty'] = 'Faculty';
$route['Faculty/Dashboard'] = 'Faculty_Dashboard';