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


use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/add', 'TaskController@get_add_task_form')->name('add_task');
Route::get('/', 'HomeController@index')->name('home');

Route::post('/insert', 'TaskController@insert')->name('insert_task');
Route::get('/edit_{id}', 'TaskController@edit')->name('edit_task');

Route::post('/update_{id}', 'TaskController@update')->name('update_task');
Route::get('/delete_{id}', 'TaskController@delete')->name('delete_task');
Route::get('/check_off_{id}', 'TaskController@check_off')->name('check_off_task');

