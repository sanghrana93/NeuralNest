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
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = "Home";
$route['404_override'] = 'error_404';
$route['translate_uri_dashes'] = FALSE;


/********** FrontEnd **************/
#$route['home'] = 'frontend/Home';

$route['admin'] = 'login';

/*********** USER DEFINED ROUTES *******************/

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['userAnalysisController'] = 'analysis/getAllUserAnalysis';

/*********** Demo *******************/
$route['userListingDemo'] = 'user/userListingDemo';

/*********** Menu List *******************/
$route['menuList'] = 'user/menuList';
$route['menuListEdit/(:num)'] = "user/menuListEdit/$1";
// $route['updateMenuList/(:num)'] = 'user/updateMenuList/$1';
$route['updateMenuList'] = 'user/menuList';   
$route['updateMenuContent'] = 'user/updateMenuContent';   



/*********** Who we are DEFINED ROUTES *******************/
$route['portfolio'] = 'Home/portfolio';
$route['artificialIntelligenceFrontend'] = 'Home/artificialIntelligenceFrontend';
$route['dataScienceFrontend'] = 'Home/dataScienceFrontend';
$route['machineLearningFrontend'] = 'Home/machineLearningFrontend';

/*********** What we serve DEFINED ROUTES *******************/
/*********** Services DEFINED ROUTES *******************/
$route['mlAiIntegration_'] = 'Home/mlAiIntegration_';
$route['dataArchitecture_'] = 'Home/dataArchitecture_';
$route['businessAnalytics_'] = 'Home/businessAnalytics_';
$route['dataGovernance_'] = 'Home/dataGovernance_';
$route['cloudComputing_'] = 'Home/cloudComputing_';
$route['traingSupport'] = 'Home/traingSupport';
$route['team'] = 'Home/team';
$route['teamDetailsFounder'] = 'Home/teamDetailsFounder';
$route['teamDetailsSales'] = 'Home/teamDetailsSales';
$route['teamDetailsArchitect'] = 'Home/teamDetailsArchitect';
$route['teamDetailsDataScientist'] = 'Home/teamDetailsDataScientist';
$route['testimonial_'] = 'Home/testimonial_';
$route['productAndSolutions'] = 'Home/productAndSolutions';
$route['requestDemo'] = 'Home/requestDemo';
$route['blogs'] = 'Home/blogs';
$route['contactUs_'] = 'Home/contactUs_';

$route['demoList'] = 'user/demoList';
$route['demoList/(:num)'] = "user/demoList/$1";
$route['userListing/(:num)'] = "user/userListing/$1";
$route['editUserAnalysis/(:num)'] = "user/editUserAnalysis/$1";
$route['editAnalysis/(:num)'] = "user/editAnalysis/$1";

$route['addNew'] = "user/addNew";
$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['profile'] = "user/profile";
$route['profile/(:any)'] = "user/profile/$1";
$route['profileUpdate'] = "user/profileUpdate";
$route['profileUpdate/(:any)'] = "user/profileUpdate/$1";

/*********** User Analysis *******************/
$route['userAnalysis'] = 'user/userAnalysis';
$route['userAnalysisEdit/(:num)'] = "user/userAnalysisEdit/$1";
$route['updateUserAnalysis/(:num)'] = 'user/updateUserAnalysis/$1';

/*********** Artificial Intelligence *******************/
$route['artificialIntelligence'] = 'user/artificialIntelligence';
$route['artificialIntelligenceEdit/(:num)'] = "user/artificialIntelligenceEdit/$1";
$route['updateArtificialIntelligence/(:num)'] = 'user/updateArtificialIntelligence/$1';

/*********** Data Science *******************/
$route['dataScience'] = 'user/dataScience';
$route['dataScienceEdit/(:num)'] = "user/dataScienceEdit/$1";
$route['updateDataScience/(:num)'] = 'user/updateDataScience/$1';

/*********** Machine Learning *******************/
$route['machineLearning'] = 'user/machineLearning';
$route['machineLearningEdit/(:num)'] = "user/machineLearningEdit/$1";
$route['updateMachineLearning/(:num)'] = 'user/updateMachineLearning/$1';

/*********** mlAiIntegration *******************/
$route['mlAiIntegration'] = 'user/mlAiIntegration';
$route['mlAiIntegrationEdit/(:num)'] = "user/mlAiIntegrationEdit/$1";
$route['updateMlAiIntegration/(:num)'] = 'user/updateMlAiIntegration/$1';

/*********** dataArchitecture *******************/
$route['dataArchitecture'] = 'user/dataArchitecture';
$route['dataArchitectureEdit/(:num)'] = "user/dataArchitectureEdit/$1";
$route['updateDataArchitecture/(:num)'] = 'user/updateDataArchitecture/$1';

/*********** businessAnalytics *******************/
$route['businessAnalytics'] = 'user/businessAnalytics';
$route['businessAnalyticsEdit/(:num)'] = "user/businessAnalyticsEdit/$1";
$route['updateBusinessAnalytics/(:num)'] = 'user/updateBusinessAnalytics/$1';

/*********** dataGovernance *******************/
$route['dataGovernance'] = 'user/dataGovernance';
$route['dataGovernanceEdit/(:num)'] = "user/dataGovernanceEdit/$1";
$route['updateDataGovernance/(:num)'] = 'user/updateDataGovernance/$1';

/*********** cloudComputing *******************/
$route['cloudComputing'] = 'user/cloudComputing';
$route['cloudComputingEdit/(:num)'] = "user/cloudComputingEdit/$1";
$route['updateCloudComputing/(:num)'] = 'user/updateCloudComputing/$1';

/*********** ourTeam *******************/
$route['ourTeam'] = 'user/ourTeam';
$route['addOurTeam'] = 'user/addOurTeam';
$route['saveOurTeam'] = 'user/saveOurTeam';
$route['ourTeamEdit/(:num)'] = 'user/ourTeamEdit/$1';
$route['updateOurTeam/(:num)'] = 'user/updateOurTeam/$1';
$route['deleteOurTeam/(:num)'] = 'user/deleteOurTeam/$1';

/*********** Contact Us *******************/
$route['contactUs'] = 'user/contactUs';
$route['contactUsEdit/(:num)'] = "user/contactUsEdit/$1";
$route['updateContactUs/(:num)'] = 'user/updateContactUs/$1';

/*********** testimonial *******************/
$route['testimonial'] = 'user/testimonial';
$route['addTestimonial'] = 'user/addTestimonial';
$route['saveTestimonial'] = 'user/saveTestimonial';
$route['testimonialEdit/(:num)'] = 'user/testimonialEdit/$1';
$route['updateTestimonial/(:num)'] = 'user/updateTestimonial/$1';
$route['deleteTestimonial/(:num)'] = 'user/deleteTestimonial/$1';

/*********** Blogs *******************/
$route['blog'] = 'user/blog';
$route['addBlog/(:num)'] = 'user/addBlog/$1';
$route['blogList/(:num)'] = 'user/blogList/$1';

// $route['whoWeAre'] = 'user/whoWeAre';

// $route['updateUserAnalysis/(:num)'] = 'user/updateUserAnalysis/$1';

// $route['updateUserAnalysis/(:num)'] = "user/updateUserAnalysis/$1";
// $route['updateUserAnalysis/(:num)'] = "user/updateUserAnalysis/$1";
// $route['deleteUserAnalysis/(:num)'] = "user/deleteUserAnalysis/$1";


// $route['UserAnalysisController'] = "UserAnalysisController::index/$1";

$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['changePassword/(:any)'] = "user/changePassword/$1";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";
$route['login-history'] = "user/loginHistoy";
$route['login-history/(:num)'] = "user/loginHistoy/$1";
$route['login-history/(:num)/(:num)'] = "user/loginHistoy/$1/$2";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";

$route['patients'] = "patient/patientList";
$route['addPatient'] = "patient/addPatient";


$route['patient-history/(:any)'] = "patient/viewPatientHistory/$1";
$route['addPatientHistory/(:any)']= "patient/addPatientHistory/$1";
$route['editPatient/(:any)']= "patient/editPatient/$1";
$route['deletePatient/(:any)']= "patient/deletePatient/$1";

// Add these new routes
$route['api/menus']['GET'] = 'user/getMenus';
$route['api/menus/(:num)/submenus']['GET'] = 'user/getSubmenus/$1';
$route['api/menus']['POST'] = 'user/addMenu';
$route['api/submenus']['POST'] = 'user/addSubmenu';
$route['api/menus/(:num)']['PUT'] = 'user/updateMenu/$1';
$route['api/menus/(:num)']['DELETE'] = 'user/deleteMenu/$1';

$route['addMenu'] = 'user/addMenu';
$route['updateMenu/(:num)'] = 'user/updateMenu/$1';
$route['deleteMenu/(:num)'] = 'user/deleteMenu/$1';
$route['getSubmenus/(:num)'] = 'user/getSubmenus/$1';

$route['menu'] = 'user/index';
$route['menu/add'] = 'user/addMenu';
$route['menu/update'] = 'user/updateMenu';
$route['menu/delete/(:num)'] = 'user/delete/$1';
$route['menu/submenus/(:num)'] = 'user/getSubmenus/$1';

$route['menu/getSubmenus/(:num)'] = 'menu/getSubmenus/$1';

$route['menu/update/(:num)'] = 'user/update/$1';

$route['menu/saveContent'] = 'user/saveContent';

$route['menu/getContent/(:num)/(:num)'] = 'user/getContent/$1/$2';

// Add these new API routes
$route['api/menu/list']['GET'] = 'api/menu/getMenuList';
$route['api/menu/content/(:num)'] = 'api/menu/getMenuContent/$1';

$route['content'] = 'content/index';

// Add these routes
$route['menu/saveContent'] = 'user/saveContent';
// $route['api/menu/content/(:num)'] = 'user/getMenuContent/$1';

// Add this route
$route['menu/getContent/(:num)'] = 'user/getMenuContent/$1';





/* End of file routes.php */
/* Location: ./application/config/routes.php */