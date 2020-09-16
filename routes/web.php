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
// Route::middleware('role:Admin')->group(function(){
    Route::prefix('admin')->group(function () {

Route::get('/dashboard','admin\AdminPageController@dashboard')->name('dashboard');

Route::get('/companies','admin\AdminPageController@company')->name('company');

Route::get('/deletecompany/{id}','admin\AdminPageController@deletecompany')->name('admin.deletecompany');

Route::get('/appjoblist','admin\AdminPageController@appjoblist')->name('admin.approvedjoblist');

Route::get('/unappjoblist','admin\AdminPageController@unappjoblist')->name('admin.unapprovedjoblist');

Route::get('/jobdetail/{id}','admin\AdminPageController@jobdetail')->name('admin.jobdetail');

Route::get('/deletejob/{id}','admin\AdminPageController@deletejob')->name('admin.deletejob');

Route::get('/approvejob/{id}','admin\AdminPageController@approvejob')->name('admin.approvejob');

Route::get('/unapprovejob/{id}','admin\AdminPageController@unapprovejob')->name('admin.unapprovejob');

Route::get('/job_seeker','admin\AdminPageController@job_seeker')->name('job_seeker');

Route::get('/deleteseeker/{id}','admin\AdminPageController@deleteseeker')->name('admin.deleteseeker');

Route::resource('categories', 'admin\AdminCategoryController');

Route::resource('natures', 'admin\AdminNatureController');

Route::get('/userinfo/{id}','admin\AdminPageController@userinfo')->name('admin.userinfo');
});
// });


//job_provider route
// Route::middleware('role:Provider')->group(function(){
Route::prefix('provider')->group(function () {

    Route::resource('postjobs', 'provider\ProviderJobController');

    Route::resource('company', 'provider\ProviderCompanyController');

    Route::get('/postjobs/delete/{id}','provider\ProviderJobController@delete')->name('postjobs.delete');

    Route::get('/register','provider\ProviderController@register')->name('customregister');

    Route::get('/login','provider\ProviderController@login')->name('customlogin');

    Route::get('/viewapplicant','provider\ProviderController@viewapplicant')->name('provider.applicant');

    Route::get('/delete/{id}','provider\ProviderCompanyController@delete')->name('company.delete');
    
});
// });

//job_seeker route
// Route::middleware('role:Seeker')->group(function(){
Route::prefix('seeker')->group(function () {

    Route::resource('applyjobs', 'seeker\SeekerJobController');

    Route::get('/login','seeker\SeekerPageController@login')->name('seekerlogin');
       
    Route::get('/register','seeker\SeekerPageController@register')->name('seekerregister');
    
    Route::get('/home','seeker\SeekerPageController@home')->name('seeker.home');

    Route::get('/applyjobs/add/{id}','seeker\SeekerPageController@insert')->name('seeker.insert');

    Route::get('/viewapplyjob','seeker\SeekerPageController@viewapplyjob')->name('seeker.viewapplyjobs');

    Route::get('/editprofile','seeker\SeekerPageController@editprofile')->name('seeker.editprofile');

    Route::post('/editprofile/{id}','seeker\SeekerPageController@updateprofile')->name('seeker.updateprofile');
});
// });





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
