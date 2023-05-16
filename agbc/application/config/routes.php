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

$route['Labs-Equipment'] = 'Undergraduate_programme';
$route['Equipment'] = 'Advanced_module';

$route['Service-Charges'] = 'Postgraduate_programme';

$route['Staff'] = 'Staff';

$route['Training-Workshops'] = 'News';
$route['Training-Workshops/(:num)'] = 'News';
$route['training-workshops/training-detail/(:num)/(:any)'] = 'News/news_detail';

$route['News-Events'] = 'Publications';
$route['News-Events/(:num)'] = 'Publications';
$route['news/news-detail/(:num)/(:any)'] = 'Publications/publications_detail';

$route['Ongoing-Research'] = 'Ongoing_research';
$route['ongoing-research/ongoing-research-detail/(:num)/(:any)'] = 'Ongoing_research/ongoing_research_detail';
$route['Completed-Research'] = 'Completed_research';
$route['Completed-Research/(:num)'] = 'News';
$route['completed-research/completed-research-detail/(:num)/(:any)'] = 'Completed_research/completed_research_detail';

$route['Undergraduate-Research-Students'] = 'Student_alumni';
$route['Postgraduate-Research-Students'] = 'Module';
// $route['Module-EAE'] = 'Module_eae';
// $route['Module-GIP'] = 'Module_gip';
// $route['Module-MBB'] = 'Module_mbb';
// $route['Module-PPM'] = 'Module_ppm';

/* End of file routes.php */

/* Location: ./application/config/routes.php */