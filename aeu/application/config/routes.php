<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

|	http://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There area two reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router what URI segments to use if those provided

| in the URL cannot be matched to a valid route.

|

*/



$route['default_controller'] = "home";

$route['adminpanel'] = 'adminpanel/login';
$route['login'] = 'adminpanel/login';

$route['International'] = 'Undergraduate_programme';
$route['Description'] = 'Advanced_module';
// $route['Description/(:num)'] = 'Advanced_module/load_detail/';

$route['Local'] = 'Local';
$route['Local-Description'] = 'Local_description';

$route['Staff'] = 'Staff';

$route['News'] = 'News';
$route['News/(:num)'] = 'News';
$route['news/news-detail/(:num)/(:any)'] = 'News/news_detail';

$route['Events'] = 'Publications';
$route['Events/(:num)'] = 'Publications';
$route['events/events-detail/(:num)/(:any)'] = 'Publications/publications_detail';

$route['Current-Year'] = 'Current_year';
$route['Current-Year/(:num)'] = 'Current_year';
$route['current-year/current-year-detail/(:num)/(:any)'] = 'Current_year/current_year_detail';
$route['Previous-Years'] = 'Previous_year';
$route['Previous-Years/(:num)'] = 'Previous_year';
$route['previous-year/previous-year-detail/(:num)/(:any)'] = 'Previous_year/previous_year_detail';

// $route['Student-Alumni'] = 'Student_alumni';
// $route['Module'] = 'Module';
// $route['Module-EAE'] = 'Module_eae';
// $route['Module-GIP'] = 'Module_gip';
// $route['Module-MBB'] = 'Module_mbb';
// $route['Module-PPM'] = 'Module_ppm';





/* End of file routes.php */

/* Location: ./application/config/routes.php */