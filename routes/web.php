<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



//admin route
Route::get('/','seeker\SeekerPageController@home');
Route::prefix('admin')->group(function () {
    Route::middleware('role:Admin')->group(function () {
        Route::get('/dashboard', 'admin\AdminPageController@dashboard')->name('dashboard');

        Route::get('/companies', 'admin\AdminPageController@company')->name('company');

        Route::get('/deletecompany/{id}', 'admin\AdminPageController@deletecompany')->name('admin.deletecompany');

        Route::get('/appjoblist', 'admin\AdminPageController@appjoblist')->name('admin.approvedjoblist');

        Route::get('/unappjoblist', 'admin\AdminPageController@unappjoblist')->name('admin.unapprovedjoblist');

        Route::get('/jobdetail/{id}', 'admin\AdminPageController@jobdetail')->name('admin.jobdetail');

        Route::get('/deletejob/{id}', 'admin\AdminPageController@deletejob')->name('admin.deletejob');

        Route::get('/approvejob/{id}', 'admin\AdminPageController@approvejob')->name('admin.approvejob');

        Route::get('/unapprovejob/{id}', 'admin\AdminPageController@unapprovejob')->name('admin.unapprovejob');

        Route::get('/job_seeker', 'admin\AdminPageController@job_seeker')->name('job_seeker');

        Route::get('/deleteseeker/{id}', 'admin\AdminPageController@deleteseeker')->name('admin.deleteseeker');

        Route::resource('categories', 'admin\AdminCategoryController');

        Route::resource('natures', 'admin\AdminNatureController');

        Route::resource('companytypes', 'admin\AdminCompanyTypeController');

        Route::get('/userinfo/{id}', 'admin\AdminPageController@userinfo')->name('admin.userinfo');
    });
    Route::get('/login', 'admin\AdminPageController@login')->name('login');
});


//job_provider route

Route::prefix('provider')->group(function () {
    Route::middleware('role:Provider')->group(function () {
        Route::resource('postjobs', 'provider\ProviderJobController');

        Route::resource('company', 'provider\ProviderCompanyController');

        Route::get('/postjobs/delete/{id}', 'provider\ProviderJobController@delete')->name('postjobs.delete');

        Route::get('/viewapplicant', 'provider\ProviderController@viewapplicant')->name('provider.applicant');

        Route::get('/delete/{id}', 'provider\ProviderCompanyController@delete')->name('company.delete');

        Route::get('/viewapplicantlist/{id}', 'provider\ProviderController@viewapplicantlist')->name('provider.viewapplicantlist');
    });
    Route::get('/register', 'provider\ProviderController@register')->name('customregister');
    Route::get('/login', 'provider\ProviderController@login')->name('customlogin');
});

//job_seeker route

Route::prefix('seeker')->group(function () {
    // Route::middleware('role:Seeker')->group(function () {
        Route::resource('applyjobs', 'seeker\SeekerJobController');
        
Route::middleware('role:Seeker')->group(function () {
        Route::get('/applyjobs/add/{id}', 'seeker\SeekerPageController@insert')->name('seeker.insert');

        Route::get('/viewapplyjob', 'seeker\SeekerPageController@viewapplyjob')->name('seeker.viewapplyjobs');

        Route::get('/deleteapplyjob/{id}', 'seeker\SeekerPageController@deleteapplyjob')->name('seeker.deleteapplyjobs');

        Route::get('/editprofile/{id}', 'seeker\SeekerPageController@editprofile')->name('seeker.editprofile');

        Route::post('/editprofile/{id}', 'seeker\SeekerPageController@updateprofile')->name('seeker.updateprofile');
});
        Route::get('/filter/category/{id}', 'seeker\SeekerPageController@filterbycat')->name('seeker.fcat');

        Route::get('/filter/nature/{id}', 'seeker\SeekerPageController@filterbynature')->name('seeker.fnat');

        Route::get('/filter/experience/{id}', 'seeker\SeekerPageController@filterbyexp')->name('seeker.fexp');

        Route::get('/filter/salary/{id}', 'seeker\SeekerPageController@filterbysal')->name('seeker.fsal');

        Route::get('/filter/name/{id}', 'seeker\SeekerPageController@filterbyname')->name('seeker.name');


    // });

    Route::get('/login', 'seeker\SeekerPageController@login')->name('seekerlogin');

    Route::get('/register', 'seeker\SeekerPageController@register')->name('seekerregister');

    Route::get('/home', 'seeker\SeekerPageController@home')->name('seeker.home');

    Route::get('/contact','seeker\SeekerPageController@contact')->name('seekercontact');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
