<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/grid', function () {
    return view('grid');
});

Route::match(['get', 'post'], '/grid_data', "GridController@data");

Route::get('/scheduler', function () {
    return view('scheduler');
});

Route::match(['get', 'post'], '/scheduler_data', "SchedulerController@data");

Route::get('/gantt', function () {
    return view('gantt');
});

Route::match(['get', 'post'], '/gantt_data', "GanttController@data");