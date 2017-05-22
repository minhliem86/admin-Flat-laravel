<?php
Route::group(['prefix' => 'admin', 'namespace' => 'App\Modules\Admin\Controllers'], function(){
  // Authentication Routes...
  Route::group(['middleware'=>['web']], function(){

    Route::get('login', 'Auth\AuthController@showLoginForm');
    Route::post('login', 'Auth\AuthController@login');
    Route::get('logout', 'Auth\AuthController@logout');

    // Registration Routes...
    Route::get('register', 'Auth\AuthController@showRegistrationForm');
    Route::post('register', 'Auth\AuthController@register');

    // Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');

    /*ROLE, PERMISSION*/
    Route::get('/create-role', ['as' => 'admin.createRole', 'uses' => 'Auth\RoleController@createRole']);
    Route::post('/create-role', ['as' => 'admin.postCreateRole', 'uses' => 'Auth\RoleController@postCreateRole']);
    Route::post('/ajax-role', ['as' => 'admin.ajaxCreateRole', 'uses' => 'Auth\RoleController@postAjaxRole']);
    Route::post('/ajax-permission', ['as' => 'admin.ajaxCreatePermission', 'uses' => 'Auth\RoleController@postAjaxPermission']);

    Route::group(['middleware' => ['can_login']], function(){
      Route::get('/dashboard', function(){
        return view('Admin::pages.index');
      });
    });
  });

});
