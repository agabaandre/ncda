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
$route['default_controller'] = 'dashboard/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//DISTRICTS
	$route['district-list(/:num)?'] = 'districts/index';
	$route['save-district'] = 'districts/store';
	$route['update-district/(:num)'] = 'districts/update/$1';
	$route['delete-district/(:num)'] = 'districts/delete/$1';
	$route['teams-district/(:num)(/:num)?'] = 'districts/get_teams/$1';
	$route['create-branch-team/(:num)'] = 'districts/create_team/$1';
	$route['save-branch-team'] = 'districts/save_branch_team';
	$route['edit-branch-team/(:num)/(:num)'] = 'districts/edit_team/$1/$2';
	$route['update-branch-team'] = 'districts/update_district_team';
	$route['delete-branch-staff/(:num)/(:num)'] = 'districts/delete_district_team/$1/$2';
	
//PROJECTS
	$route['project-list(/:num)?'] = 'projects/index';
	$route['create-project'] = 'projects/create';
	$route['save-project']   = 'projects/store';
	$route['edit-project/(:num)'] = 'projects/singleProject/$1';
	$route['update-project'] = 'projects/update';
	$route['delete-project/(:num)'] = 'projects/delete/$1';
	$route['entry/(:num)'] = 'projects/dataEntry/$1';

//OBJECTIVES
	$route['objective-list'] = 'objectives/index';
	$route['objective-list/(:num)(/:num)?'] = 'objectives/index/$1';
	$route['create-objective/(:num)'] = 'objectives/create/$1';
	$route['save-objective']          = 'objectives/store';
	$route['edit-objective/(:num)']   = 'objectives/singleObjective/$1';
	$route['update-objective']        = 'objectives/update';
	$route['delete-objective/(:num)'] = 'objectives/delete/$1';
	$route['core-objectives'] = 'objectives/core_list';

//ACTIVITIES
	$route['activity-list'] = 'activities/index';
	$route['activity-list/(:num)'] = 'activities/index/$1';
	$route['create-activity/(:num)'] = 'activities/create/$1';
	$route['save-activity'] = 'activities/store';
	$route['edit-activity/(:num)'] = 'activities/singleActivity/$1';
	$route['update-activity'] = 'activities/update';
	$route['delete-activity/(:num)/(:num)'] = 'activities/delete/$1/$1';


//PARAMETERS
	$route['parameter-list'] = 'parameters/index';
	$route['parameter-list/(:num)'] = 'parameters/index/$1';
	$route['create-parameter/(:num)'] = 'parameters/create/$1';
	$route['save-parameter']          = 'parameters/store';
	$route['edit-parameter/(:num)']   = 'parameters/singleParameter/$1';
	$route['update-parameter']        = 'parameters/update';
	$route['delete-parameter/(:num)'] = 'parameters/delete/$1';

//FACILITIES
	$route['facility-list'] = 'facilities/index';
	$route['facility-list/(:num)'] = 'facilities/index/$1';
	$route['create-facility/(:num)'] = 'facilities/create/$1';
	$route['save-facility'] = 'facilities/create';
	$route['edit-facility/(:num)'] = 'facilities/singleParameter/$1';
	$route['update-facility/(:num)'] = 'facilities/update/$1';
	$route['delete-facility/(:num)/(:num)'] = 'facilities/delete/$1/$2';
	$route['facility-teams/(:num)'] = 'facilities/facility_teams/$1';
	$route['create-facility-member/(:num)'] = 'facilities/create_team/$1';

//MEETINGS
	$route['meetings(/:num)?']          = 'meetings/index';
	$route['meeting/(:num)']    = 'meetings/meetingDetail/$1';
	$route['create-meeting']    = 'meetings/create';
	$route['save-meeting']      = 'meetings/store';
	$route['contacts(/:num)?']  = 'meetings/contacts';
	$route['save-contact']      = 'meetings/saveContact';
	$route['save-participant']  = 'meetings/saveContact';
	$route['save-discussion']   = 'meetings/saveDiscussion';
	$route['save-action']		= 'meetings/saveAction';
	$route['meetings-calendar'] = 'meetings/meetingCalendar';
	$route['update-meeting']    = 'meetings/update';
	$route['import-contacts']   = 'meetings/importContacts';

//BRANCH ACTIVITIES
	$route['branch-acts'] 		= 'bactivities/index';
	$route['save-branch-act'] 	= 'bactivities/store';
	$route['branch-params'] 	= 'bparameters/index';
	$route['save-branch-param']   = 'bparameters/store';
	$route['branch-param/(:num)'] = 'bparameters/index/$1';
	$route['branch/dataentry']   = 'bactivities/dataEntry';
	$route['branch/savedata']    = 'bactivities/submitData';
	

//FACILITATION
	$route['facilitation'] 		= 'facilitation/index';
	$route['save-transaction'] = 'facilitation/store';

//CONTACTS
	$route['contacts-list(/:num)?'] = 'teams/get_all_teams';
	
	//collected data submission
	$route['submit-data'] = 'projects/submitData';

	//Report
	$route['project_report'] = 'reports/projects';
	$route['visualize/(:num)'] = 'reports/visual_report/$1';
	$route['reports/activities']    = 'reports/activities';
	$route['reports/facilitation']    = 'reports/facilitation';
    $route['summary'] = 'reports/core';
	//Governance
	$route['board-list(/:num)?'] = 'governance/index';
	$route['save-member']   = 'governance/store';
	$route['update-member'] = 'governance/update';

	//Partners
	$route['partners(/:num)?'] = 'partners/index';
	$route['partner_profile/(:num)'] = 'partners/partner/$1';
	$route['save-partner'] = 'partners/save_partner';
	$route['update-partner'] = 'partners/up_partner';

	//Subscriber
	$route['subscribers(/:num)?'] = 'subscribers/index';
	$route['subscriber/(:num)'] = 'subscribers/subscriber/$1';
	$route['save-subscriber'] = 'subscribers/save_subscriber';
	$route['update-subscriber'] = 'subscribers/update_subscriber';
	$route['save-membership'] = 'subscribers/save_membership';
	

	

	
