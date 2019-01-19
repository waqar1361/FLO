<?php

Route::get('/', 'PagesController@index')->name('index');
Route::get('missing', 'PagesController@missing')->name('missing');
Route::get('missing/{report}/details', 'PagesController@details')->name('missing.details');
Route::get('about','PagesController@about')->name('about');
Route::get('contact','PagesController@contact')->name('contact');

Auth::routes(['register' => false]);
Route::resource('report', 'reportController');
Route::resource('inquiry', 'inquiryController');

Route::prefix('dashboard')->group(function () {
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('settings','HomeController@settings')->name('user.setting');
    Route::post('setting','HomeController@saveSetting');
    Route::get('reports/pending','HomeController@pending')->name('report.pending');
    Route::get('reports/processing','HomeController@processing')->name('report.processing');
    Route::get('reports/archived','HomeController@archived')->name('report.archived');
    Route::patch('reports/{report}/archived','HomeController@completed')->name('report.completed');
    Route::post('reports/verify/{report}','HomeController@verify')->name('report.verify');
});

Route::prefix('admin')->group(function () {
    
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login');
    Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    
    Route::get('/', 'AdminController@home')->name('admin');
    Route::get('users', 'AdminController@index')->name('admin.user.list');
    Route::get('users/create', 'AdminController@create')->name('admin.user.create');
    Route::post('users', 'AdminController@store')->name('admin.user.store');
    Route::get('users/{user}', 'AdminController@show')->name('admin.user.show');
    Route::get('reports','AdminController@reports')->name('admin.reports');
    Route::get('reports/{report}','AdminController@report')->name('admin.report.show');
    Route::delete('users/{user}','AdminController@destroy')->name('admin.user.destroy');
});

