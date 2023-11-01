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

$route['Projects'] = 'Ongoing_projetcs';
$route['Completed-Projects'] = 'Completed_projects';

$route['Outreach'] = 'Outreach';

$route['Staff'] = 'Staff';

$route['Foreign'] = 'Foreign';
$route['Local'] = 'Local';

$route['Training'] = 'Training';
$route['Training/(:num)'] = 'Training';
$route['training/training-detail/(:num)/(:any)'] = 'Training/projects_detail';
$route['Consultancies'] = 'Consultancies';
$route['Consultancies/(:num)'] = 'Consultancies';
$route['consultancies/consultancies-detail/(:num)/(:any)'] = 'Consultancies/student_detail';


$route['News'] = 'News';
$route['News/(:num)'] = 'News';
$route['news/news-detail/(:num)/(:any)'] = 'News/news_detail';

$route['Publications'] = 'Publications';
$route['Publications/(:num)'] = 'Publications';
$route['publications/publications-detail/(:num)/(:any)'] = 'Publications/publications_detail';

// $route['Research-Projects'] = 'Research_Projects';
// $route['Research-Projects/(:num)'] = 'Research_Projects';
// $route['research-projects/projects-detail/(:num)/(:any)'] = 'Research_Projects/projects_detail';
// $route['Student-Research'] = 'Student_Research';
// $route['Student-Research/(:num)'] = 'Student_Research';
// $route['student-research/student-detail/(:num)/(:any)'] = 'Student_Research/student_detail';

$route['Student-Alumni'] = 'Student_alumni';
$route['Student-Alumni/(:num)'] = 'Student_alumni';
// $route['Module'] = 'Module';


// $route['Module-EAE'] = 'Module_eae';
// $route['Module-GIP'] = 'Module_gip';
// $route['Module-MBB'] = 'Module_mbb';
// $route['Module-PPM'] = 'Module_ppm';





/* End of file routes.php */

/* Location: ./application/config/routes.php */