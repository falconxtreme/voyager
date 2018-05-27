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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('layouts.app');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/alarms', 'NMSController@alarms');

Route::get('/rep-access-internet', 'AccesoInternetController@departments');
Route::get('/rep-access-internet/{department}', 'AccesoInternetController@provinces');
Route::get('/rep-access-internet/department/{province}', 'AccesoInternetController@districts');
Route::post('/rep-access-internet/filter','AccesoInternetController@filter');
//Route::get('/rep-access-internet/{department}/{province}', 'AccesoInternetController@districts');

Route::get('/rep-access-intranet', function(){
	return view('rep_access_intranet');
});

Route::get('/rep-interruption', function(){
	return view('rep_interrupcion');
});

Route::get('/req-receive', function(){
	return view('rep_solicitud');
});

Route::get('/rate-fault', function(){
	return view('rep_incidencia');
});

Route::get('/rate-link', function(){
	return view('rep_ocupacion');
});

Route::get('/rep-monitor-params', function(){
	return view('rep_monitoreo');
});

Route::get('/kpis-beneficiario', function(){
	return view('kpis_beneficiario');
});

Route::get('/kpis-mw-cambium', function(){
	return view('kpis_mw_cambium');
});

Route::get('/kpis-sw-cisco', function(){
	return view('kpis_sw_cisco');
});

Route::get('/kpis-plaza', function(){
	return view('kpis_plaza');
});

Route::get('/kpis-enlace', function(){
	return view('kpis_enlace');
});



