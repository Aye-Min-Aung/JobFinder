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
    /*return 'hello';*/
});


//admin route
Route::prefix('admin')->group(function () {

Route::get('/dashboard','admin\AdminPageController@dashboard')->name('dashboard');

Route::get('/companies','admin\AdminPageController@company')->name('company');

Route::get('/job_seeker','admin\AdminPageController@job_seeker')->name('job_seeker');

Route::resource('categories', 'admin\AdminCategoryController');
});

//job_provider route
Route::prefix('provider')->group(function () {

    Route::resource('jobs', 'provider\ProviderJobController');
    
});

//job_seeker route
Route::prefix('seeker')->group(function () {

    Route::resource('jobs', 'seeker\SeekerJobController');
});



