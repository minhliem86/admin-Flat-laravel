<?php
Route::group(['prefix' => 'admin'], function(){
  Route::get('/admin',function(){
    return "admin";
  });
});
