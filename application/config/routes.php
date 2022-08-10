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

$route['about-us'] = 'about_us';
$route['faculty-statistic-undergraduate'] = 'Faculty_statistic_undergraduate';
$route['faculty-statistic-academic-staff'] = 'Faculty_statistic_academic_staff';
$route['dean-office'] = 'Dean_office';
$route['faculty-board'] = 'Faculty_board';
$route['faculty-board/(:any)'] = 'Faculty_board/meeting_schedule_detail';
$route['history'] = 'History';
$route['faculty-organization'] = 'Faculty_organization';
$route['faculty-brochure'] = 'Faculty_brochure';
$route['quality/functions-of-foaqac'] = 'Quality/index';
$route['quality/foaqac'] = 'Quality/foaqac';
$route['quality/member-of-foaqac'] = 'Quality/member_of_foaqac';
$route['quality/schedule-of-meetings'] = 'Quality/schedule_of_meetings';

$route['undergraduate-programme'] = 'Undergraduate_programme';
$route['postgraduate-programme'] = 'Postgraduate_programme';

$route['international'] = 'International/index';
$route['international/current-foreign-students'] = 'International/current_foreign_students';
$route['international/info-for-foreign-students'] = 'International/info_for_foreign_students';
$route['international/opportunities-study-abroad'] = 'International/opportunities_study_abroad';
$route['research/faculty-research'] = 'Research/index';
$route['research/ethical-clearance-committee'] = 'Research/ethical_clearance_committee';
$route['research/faculty-research-committee'] = 'Research/faculty_research_committee';
$route['quality/frc'] = 'Quality/frc';
$route['quality/cdc'] = 'Quality/cdc';
$route['quality/cdc/(:any)'] = 'Quality/cdc';
$route['quality/ltc'] = 'Quality/ltc';
$route['quality/ltc/(:any)'] = 'Quality/ltc';
$route['quality/lc'] = 'Quality/lc';
$route['quality/lc/(:any)'] = 'Quality/lc';
$route['quality/pprc'] = 'Quality/pprc';
$route['quality/pprc/(:any)'] = 'Quality/pprc';
$route['quality/elcumc'] = 'Quality/elcumc';
$route['quality/elcumc/(:any)'] = 'Quality/elcumc';
$route['quality/ttc'] = 'Quality/ttc';
$route['quality/ttc/(:any)'] = 'Quality/ttc';
$route['quality/tmu'] = 'Quality/tmu';
$route['quality/tmu/(:any)'] = 'Quality/tmu';
$route['quality/sawc'] = 'Quality/sawc';
$route['quality/sawc/(:any)'] = 'Quality/sawc';

$route['404_override'] = '';





/* End of file routes.php */

/* Location: ./application/config/routes.php */