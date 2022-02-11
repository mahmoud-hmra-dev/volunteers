<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.jobs.index')->with('status', session('status'));
    }

    return redirect()->route('admin.jobs.index');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Skills
    Route::delete('skills/destroy', 'SkillsController@massDestroy')->name('skills.massDestroy');
    Route::resource('skills', 'SkillsController');

    // Jobs
    Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
    Route::resource('jobs', 'JobsController');
});
Route::get('/', function () {
 
    

    return view('welcome');
});


Route::get('country-state-city','CountryStateCityController@index');
Route::post('get-states-by-country','CountryStateCityController@getState');
Route::post('get-cities-by-state','CountryStateCityController@getCity');

// Route::get('country-state-city','JobsController@index');
// Route::post('get-states-by-country','JobsController@getState');
// Route::post('get-cities-by-state','JobsController@getCity');


