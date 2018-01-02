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

Route::get('/','vgrmController@login');
Route::get('/login','vgrmController@login');
Route::post('/login','vgrmController@logincon');
Route::get('/Dashboard','vgrmController@dashboard');
Route::get('/logout','vgrmController@logout');

//new routes for Assesment


Route::get('/facilityCategoryList','vgrmController@FacilityCategoryList');
Route::post('/addFacility','vgrmController@AddFacility');


//Assestment list
Route::get('/Assesment-list','vgrmController@AssesmentList');

//Assestment list
Route::get('/AddAssesment','vgrmController@Addassesment');
Route::get('/Assesmentprocess','vgrmController@assesmentProcess');




//FacilityDepartments

Route::get('/FacilityDepartments','vgrmController@addTestimonials');
Route::post('/addFacilityDepartments','vgrmController@saveTestimonials');

//Add Department
Route::get('/AddDepartment','vgrmController@addDept');
Route::post('/addDepartment','vgrmController@saveDept');
Route::get('/Departments','vgrmController@Departments');

//Add FacilityMaster

Route::get('/FacilityMaster','vgrmController@addFacilitycategory');
Route::post('/facilityMaster','vgrmController@savePersonsCategory');

//add Non Support Devices
Route::get('/NonSupportDevices','vgrmController@addNotSupportdevice');
Route::post('/Nonsupportdevices','vgrmController@saveNotSupportDevice');
Route::get('/Nonsupportdevices-list','vgrmController@NotSupportDeviceList');

//SupportedDevices
Route::get('/SupportedDevices','vgrmController@addSupportdevice');
Route::post('/saveSupportDevices','vgrmController@saveSupportDevice');
Route::get('/supportDevice-list','vgrmController@SupportDeviceList');



//add user
Route::get('/Users','vgrmController@addusers');
Route::post('/addUsers','vgrmController@saveUsers');
Route::get('/user-list','vgrmController@allpersonslist');
Route::get('/delete-userlist/{id}','vgrmController@destroyPersons');


