<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
  Route::get('/welcome', 'PageController@welcome')->name('welcome');
  Route::get('/consultation', 'PageController@consultation')->name('consultation');

  Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function () {
    Route::resource('pages', 'Admin\PageController')->only(['edit', 'update']);
    Route::resource('checklist_groups', 'Admin\ChecklistGroupController')->except(['index', 'show']);
    Route::resource('checklist_groups.checklists', 'Admin\ChecklistController')->except(['index', 'show']);
    Route::resource('checklists.tasks', 'Admin\TaskController')->except(['index', 'show', 'create']);
    Route::get('/users', 'Admin\UserController@index')->name('users.index');
  });
});
