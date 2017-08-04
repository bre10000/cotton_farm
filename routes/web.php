<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/hello', 'TasksController@home' );

/*
Route::get('/home', function(){
	return view('home');
});
*/


// return an element based on the given id
Route::get('/activity/{id}','api@getActivityId');
Route::get('/plan/{id}','api@getPlanId');
Route::get('/accomplishment/{id}','api@getAccomplishmentId');
Route::get('/machine/{id}','api@getMachineId');
Route::get('/fieldstable/{id}','api@getFieldsTableId');
Route::get('/fuelreport/{id}','api@getFuelReportTableId');

// returns every row in table
Route::get('/activity','api@getActivity');
Route::get('/plan','api@getPlan');
Route::get('/accomplishment','api@getAccomplishment');
Route::get('/machine','api@getMachine');
Route::get('/fieldstable','api@getFieldsTable');
Route::get('/fuelreport','api@getFuelReportTable');


//insert data
Route::post('/activity','api@storeActivity');
Route::post('/plan','api@storePlan');
Route::post('/accomplishment','api@storeAccomplishment');
Route::post('/machine','api@storeMachine');
Route::post('/fieldstable','api@storeFieldsTable');
Route::post('/fuelreport','api@storeFuelReportTable');

//delete data by id

Route::delete('/activity/{id}','api@deleteActivity');
Route::delete('/plan/{id}','api@deletePlan');
Route::delete('/accomplishment/{id}','api@deleteAccomplishment');
Route::delete('/machine/{id}','api@deleteMachine');
Route::delete('/field/{id}','api@deleteField');
Route::delete('/fuelreport/{id}','api@deleteFuelReport');

//update data by id
Route::put('activity/{id}', 'api@updateActivity');
Route::put('plan/{id}', 'api@updatePlan');
Route::put('accomplishment/{id}', 'api@updateAccomplishment');
Route::put('machine/{id}', 'api@updateMachine');
Route::put('fieldstable/{id}', 'api@updateFieldsTable');
Route::put('fuelreport/{id}', 'api@updateFuelReport');


/*
Route::get('/', function () {
    return view('welcome');
});