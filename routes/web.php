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
    return view('welcome');
});

Route::get('/milestones', function () {
    return view('milestones');
});

Route::get('/problems', function () {
    //pending
});

Route::get('/problems/{probID}', function () {
    //pending
});

Route::get('/discussions', function () {
    //pending
});

Route::get('/discussions/{discID}', function () {
    //pending
});


Route::get('/projects', function () {
    //pending
});

Route::get('/projects/{projID}', function () {
    //pending
});
?>