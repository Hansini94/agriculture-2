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



//$route['loginkasun'] = 'adminpanel/login';

//$route['adminpanel/managedashboard/(:any)'] = 'adminpanel/addproperty';

//$route['managedashboard'] = "adminpanel/login";

//$route['master1/user1/update_user1/(:num)'] = "master/user/update_user/$1";

$route['company-overview'] = 'Company_overview';
$route['customer'] = 'Customer';
$route['technology'] = 'Technology';
$route['awards'] = 'Awards';
$route['awards-and-achievements'] = 'Awards';
$route['annual-reports'] = 'Annual_reports';
$route['quarterly-reports'] = 'Quarterly_reports';
$route['announcements'] = 'Announcements';
$route['product-catalogue'] = 'Product_categories';
$route['international-projects'] = 'Completed_projects';
$route['international-projects/project-details/(:num)'] = 'Completed_projects/view_details';
$route['local-projects'] = 'Ongoing_projects';
$route['local-projects/project-details/(:num)'] = 'Ongoing_projects/project_details';
$route['news/view/(:num)'] = 'News/view';
$route['news/news_detail/(:num)'] = 'News/view_more';
$route['csr/(:any)/(:num)'] = 'Csr/csr_detail';
$route['quality-assuarance'] = 'Quality_assuarance';
$route['research-development'] = 'Research_development';
$route['electrician-club'] = 'Electrician_club';
$route['technical-information'] = 'Technical_information';
$route['certificates'] = 'Certificates';
$route['video-gallery'] = 'Factory_tours';
$route['contact-details'] = 'Contact_us';
$route['distributors'] = 'Distributors';
$route['quick-sales-contacts'] = 'Quick_sales_contacts';
$route['technical-and-other'] = 'Technical_and_other';
$route['sales-contacts'] = 'Sales_contacts';
$route['export-contacts'] = 'Export_contacts';
$route['search/search-result'] = 'Search/search_result';
$route['search/search-result/(:num)'] = 'Search/search_result';

$route['csr/(:num)'] = 'Csr';
// $route['news/view/(:num)'] = 'News';
$route['search-result/(:any)/(:num)'] = 'Search';
$route['distributors/(:num)'] = 'Distributors';
$route['distributors/filter/(:any)/(:num)'] = 'Distributors';
$route['home/chinese'] = 'Home';
$route['chinese'] = 'Home';
$route['company-overview/chinese'] = 'Company_overview';
$route['company-overview/chinese/(:num)'] = 'Company_overview';
$route['products/(:any)'] = 'Products';
$route['products/(:any)/(:num)'] = 'Products';
$route['products/(:any)/(:any)/(:num)'] = 'Products/view_details';
$route['products/(:any)/(:any)/(:num)/(:num)'] = 'Products/view_details';
$route['quick-sales-contacts/(:num)'] = 'Quick_sales_contacts';
$route['technical-and-other/(:num)'] = 'Technical_and_other';
$route['sales-contacts/(:num)'] = 'Sales_contacts';
$route['404_override'] = '';





/* End of file routes.php */

/* Location: ./application/config/routes.php */