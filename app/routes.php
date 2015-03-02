<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

//Route::any(
//	'attendance/list',
//	array('before' => array('authRequireUser', 'authRequireOrganization'),'uses' => 'BeaconController@listBeacons')
//);

// ======= Attendance ========
Route::any('attendance', function()
{
    return Redirect::to('attendance/list');
});

Route::any('attendance', ['as' => 'attendance', 'uses' => 'AttendanceController@index']);

Route::any('attendance/{local}', ['uses' => 'AttendanceController@getLocales']);

Route::any('show-attendance/{local}/{attendance}', ['uses' => 'AttendanceController@getAttendance']);

//Route::get('attendance', 'AttendanceController@index');
//Route::get('attendance/{locale}', 'AttendanceController@getLocales');

// ====== Masterlist =======
Route::any('masterlist', ['as' => 'masterlist', 'uses' => 'MasterlistController@index']);

Route::any('masterlist/{local}', ['uses' => 'MasterlistController@getLocales']);

Route::any('masterlist/{local}/{member}', ['uses' => 'MasterlistController@getProfile']);

Route::any('/meetings', ['as' => 'meetings', 'uses' => 'MeetingsController@index']);

