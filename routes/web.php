<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'frontEnd\frontEndController@index');
Route::get('/donate', 'frontEnd\donateController@donate_home');
Route::get('/donor/account', 'frontEnd\donateController@donor_home_page');
Route::get('/donor/register', 'frontEnd\donateController@donor_reg');
Route::post('/donor/registration', 'frontEnd\donateController@add_donor');
Route::post('/donor/account/login', 'frontEnd\donateController@donor_login');
Route::get('/donor/login', 'frontEnd\donateController@donor_login_form');
Route::get('/volunteer-reg', 'frontEnd\frontEndController@volunteer_reg');
Route::get('/volunteer-login', 'frontEnd\frontEndController@volunteer_login');
Route::get('/help-poor', 'frontEnd\frontEndController@help_poor');
Route::post('/volunteer/registration', 'frontEnd\volunteerColroller@add_volunteer');
Route::post('/volunteer/account', 'frontEnd\volunteerColroller@volunteer_account_page');
Route::get('/logout', 'frontEnd\volunteerColroller@logout');
Route::post('/volunteer/agree', 'frontEnd\volunteerColroller@volunteer_agree');
Route::get('/service/{id}','frontEnd\servicesController@view_services');
Route::get('/sub_service/{id}','frontEnd\servicesController@sub_services');
Route::post('/donate','frontEnd\donateController@donate_sub_services');
Route::get('/volunteer/donate/blood','frontEnd\volunteerColroller@donate_blood');
Route::post('/volunteer/search/blood','frontEnd\volunteerColroller@search_blood');
Route::get('/volunteer/post/blood','frontEnd\volunteerColroller@post_blood');
Route::post('volunteer/insert/blood/post','frontEnd\volunteerColroller@insert_blood_post');
Route::get('/service/blood/donate','frontEnd\servicesController@service_donate_blood');
Route::get('/volunteer/post_causes','frontEnd\volunteerColroller@post_causes');
Route::post('volunteer/post/causes','frontEnd\volunteerColroller@insert_post_causes');
Route::get('/volunteer/causes/view_all','frontEnd\volunteerColroller@volunteer_view_causes');
Route::POST('donate/confirm/transaction/id','frontEnd\donateController@confirm_transaction');
Route::get('/causes/donate/{id}','frontEnd\donateController@cause_donate_from');
Route::get('check/donate/list','frontEnd\donateController@check_donate_list');
Route::get('check/donation/report','frontEnd\donateController@check_donation_report');





/*====================== backEnd===========================*/




Route::get('/admin', 'backEnd\backEndController@admin');

Route::get('/admin/view_volunteer_list', 'backEnd\backEndController@view_volunteer_list');

Route::get('/admin/index', 'backEnd\backEndController@index');

Route::get('/admin/delete/volunteer/{id}', 'backEnd\backEndController@delete_volunteer');

Route::get('/admin/services', 'backEnd\servicesController@services_page');

Route::get('admin/add/sub/services', 'backEnd\servicesController@add_service');

Route::get('admin/add/services/category', 'backEnd\servicesController@add_services_category');

Route::get('admin/view/services/category', 'backEnd\servicesController@view_services_category');

Route::post('admin/insert/services/category', 'backEnd\servicesController@insert_services_category');

Route::post('admin/insert/service','backEnd\servicesController@add_services');

Route::get('admin/view/all/services','backEnd\servicesController@view_all_services');

Route::get('admin/view/active/services','backEnd\servicesController@view_active_services');

Route::get('admin/view/inactive/services','backEnd\servicesController@view_inactive_services');

Route::post('/admin/inactive/service/{id}','backEnd\servicesController@inactive_services');

Route::post('/admin/active/service/{id}','backEnd\servicesController@active_services');

Route::get('/admin/edit/service/{id}','backEnd\servicesController@edit_services');

Route::post('/admin/update/service','backEnd\servicesController@update_services');

Route::get('/admin/delete/service/{id}','backEnd\servicesController@delete_services');
Route::get('/admin/causes/event/alert','backEnd\eventController@causes_event_alert');
Route::get('/admin/service/event/alert','backEnd\eventController@service_event_alert');
Route::get('/admin/causes','backEnd\causesController@causes_home');
Route::get('/admin/add/causes','backEnd\causesController@add_cuases');
Route::get('/admin/causes/request','backEnd\causesController@causes_request');
Route::post('/admin/insert/causes','backEnd\causesController@insert_causes');
Route::get('/admin/view/all_causes','backEnd\causesController@view_all_causes');
Route::get('/admin/view/request/{id}','backEnd\causesController@today_causes_request');

Route::get('/admin/accept/request/{id}','backEnd\causesController@accept_causes_request');
Route::post('admin/insert/request/causes','backEnd\causesController@accept_insert_causes_request');
Route::get('/admin/view/all/causes_request','backEnd\causesController@view_all_causes_request');
Auth::routes();
Route::get('/admin/fund/add','backEnd\fundController@add_fund_form');
Route::post('admin/insert/fund/type','backEnd\fundController@insert_fund_type');
Route::get('/admin/fund/manage','backEnd\fundController@fund_manage');
Route::get('/admin/add/bank_patnar','backEnd\fundController@add_bank_patner');
Route::post('/admin/add/bank/patner','backEnd\fundController@insert_bank_patner');
Route::get('/admin/manage/bank_patner','backEnd\fundController@manage_bank_patner');
Route::get('/admin/donate/check','backEnd\donateController@confirm_donate');
Route::post('/admin/add/ammount/main/fund/{id}','backEnd\donateController@add_ammount_main_fund');
Route::post('/admin/causes/stop_to_history/{id}','backEnd\eventController@event_stop_to_history');
Route::post('/admin/service/stop_to_history/{id}','backEnd\eventController@ser_event_stop_to_history');
Route::get('/admin/causes/stop_to_event/{id}','backEnd\eventController@stop_to_event');
Route::get('/admin/service/stop_to_event/{id}','backEnd\eventController@ser_stop_to_event');
Route::post('/admin/add/cause/stop_to_event','backEnd\eventController@add_stop_to_event');
Route::post('/admin/add/services/stop_to_event','backEnd\eventController@ser_add_stop_to_event');
Route::get('/admin/event/causes/history','backEnd\eventController@event_causes_history');
Route::get('/admin/ongoing/event','backEnd\eventController@ongoing_event');
Route::get('/admin/todays/check','backEnd\donationController@todays_check');
Route::post('/admin/event/causes/complite/','backEnd\donationController@complite_causes_event');
Route::get('/admin/event/services/complite/{id}','backEnd\donationController@complite_services_event');
Route::get('/home', 'HomeController@index')->name('home');
