<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
| my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'login_controller';
$route['login'] = 'login_controller';
$route['dashboard'] = 'Controller_Dashboard/dashboard';
$route['users'] = 'Controller_Users/users';
$route['newUser'] = 'Controller_Users/newUser';
$route['changepassword'] = 'Controller_Users/changePassword';
$route['profile'] = 'Controller_Users/profile';


$route['newstudent'] = 'Controller_Student/newstudent';

$route['students'] = 'Controller_Student/students';

$route['newEmployee'] = 'Controller_Employee/newEmployee';


















$route['user'] = 'UsersManagementController/index';

$route['classes'] = 'ClassesController/index';
$route['kids'] = 'KidsController/index';
$route['guardians'] = 'GuardiansController/index';
$route['staffs'] = 'StaffsController/index';

$route['dropoff'] = 'reportController/dropoff';
$route['pickup'] = 'reportController/pickup';
$route['logout'] = 'login_controller/logout';







$route['role'] = 'RoleManagementController/index';
$route['data'] = 'DataUtilitiesController/index';
$route['utilities'] = 'OrganisationUtilities/index';
$route['onboarding'] = 'OrganisationOnboarding/index';

$route['cashin'] = 'DataUtilitiesController/cashin';




$route['suscribers'] = 'subscribersAnalytics/suscribers';

$route['ministatement'] = 'subscribersAnalytics/ministatement';

$route['registerSuscriber'] = 'subscribersAnalytics/registerSuscriber';

$route['suscriberCashin'] = 'subscribersAnalytics/suscriberCashin'; //suscriberCashin










$route['agcall'] = 'agentCollectionController/agentcollection';

$route['orgcoll'] = 'agentCollectionController/organisationcollection';   

$route['mobilecoll'] = 'agentCollectionController/mobilemoneycollection'; 

$route['cashout'] = 'agentCollectionController/cashout';    


 






$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
