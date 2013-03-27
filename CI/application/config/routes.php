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
// 1:  If there's nothing in the uri string use this page
$route['default_controller'] = "page";
// 2: Set your default 404 page here
$route['404_override'] = '';
// 3: If the uri string is admin with nothing else, send them to the admin controller
$route['admin'] = 'admin';
// 4: admin/anything goers to admin controller, anything method
$route['admin/(:any)'] = 'admin/$1';
// 5: Apart from those mentioned before this, anything in the uri(1) will be called as the method in pages
$route['(:any)'] = 'page/$1';
// 6: One last one to handle the second uri segment
$route['(:any)/(:num)'] = "page/$1/$2";

/* End of file routes.php */
/* Location: ./application/config/routes.php */