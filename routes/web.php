<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;



Route::get('/customer/profile', 'customer\CustomerController@index')->name('customer.profile');
Route::get('customer/login','customer\LoginController@showLoginForm');
Route::post('customer/login','customer\LoginController@login')->name('customer.login');
Route::post('logout/customer', 'customer\LoginController@logout')->name('logout.customer');

// Registration Routes...
if ($options['customerregister'] ?? true) {
    Route::get('customerregister', 'customer\RegisterController@showRegistrationForm')->name('customerregister');
    Route::post('customerregister', 'customer\RegisterController@register');
}

Auth::routes();

    
    Route::controller(\App\Http\Controllers\FrontendController::class)->group(function(){ 
        Route::get('/', 'HomeMain')->name('home');
        
    });



Route::get('logout',function(){ Auth::logout();});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth']], function () {
    Route::any('setting','SettingController@index')->name('setting');
    Route::get('backup','SettingController@getBackup')->name('backup');

    Route::get('language','LanguageController@index')->name('language');
    Route::match(['get', 'post'], 'create', 'LanguageController@create')->name('language.create');
    Route::get('language/edit/{id?}', 'LanguageController@edit')->name('language.edit');
    Route::patch('language/update/{id}', 'LanguageController@update')->name('language.update');
    Route::delete('/language/delete/{id}', 'LanguageController@delete')->name('language.delete');

    /*::::::::::::::user role Permission:::::::::*/
	 Route::group(['as' => 'user.', 'prefix' => 'user'], function () {
        Route::get('/role', 'RoleController@index')->name('role');
        Route::get('/role/datatable', 'RoleController@datatable')->name('role.datatable');
        Route::any('/role/create', 'RoleController@create')->name('role.create');
        Route::get('/role/edit/{id}', 'RoleController@edit')->name('role.edit');
        Route::post('/role/edit', 'RoleController@update')->name('role.update');
        Route::delete('/role/delete/{id}', 'RoleController@distroy')->name('role.delete');
        //user:::::::::::::::::::::::::::::::::
        Route::get('/index', 'UserController@index')->name('index');
        Route::get('/datatable', 'UserController@datatable')->name('datatable');
        Route::any('/create', 'UserController@create')->name('create');
        Route::put('/change/{value}/{id}', 'UserController@status')->name('change');
        Route::get('/edit/{id}', 'UserController@edit')->name('edit');
        Route::put('/edit', 'UserController@update')->name('update');
        Route::delete('/delete/{id}', 'UserController@destroy')->name('delete');
    });
});




// Route::get('/installs', 'Install\InstallController@index');
// Route::get('install/database', 'Install\InstallController@database');
// Route::post('install/process_install', 'Install\InstallController@process_install');
// Route::get('install/create_user', 'Install\InstallController@create_user');
// Route::post('install/store_user', 'Install\InstallController@store_user');
// Route::get('install/system_settings', 'Install\InstallController@system_settings');
// Route::post('install/finish', 'Install\InstallController@final_touch');	
