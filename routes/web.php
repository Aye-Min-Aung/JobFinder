<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

    Route::resource('postjobs', 'provider\ProviderJobController');

    Route::resource('company', 'provider\ProviderCompanyController');

    Route::get('/postjobs/delete/{id}','provider\ProviderJobController@delete')->name('postjobs.delete');

    Route::get('/register','provider\ProviderController@register')->name('customregister');

    Route::get('/login','provider\ProviderController@login')->name('customlogin');
    
});

//job_seeker route
Route::prefix('seeker')->group(function () {

    Route::resource('applyjobs', 'seeker\SeekerJobController');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
