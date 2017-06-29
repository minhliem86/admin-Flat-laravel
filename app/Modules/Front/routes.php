<?php
Route::group([], function(){
  Route::get('/front',function(){
    return "front";
  });
});

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect' , 'localize'], 'namespace' =>'App\Modules\Front\Controllers'], function(){
    Route::get('contact', ['as' =>'f.contact' , 'uses' => 'LangController@getContact']);

    Route::get(LaravelLocalization::transRoute('routes.news'), ['as' => 'f.news', 'uses' => 'LangController@getNews'] );

    Route::get(LaravelLocalization::transRoute('routes.news-detail'), ['f,newsdetail', 'uses' => 'LangController@getNewsdetail'] )
});
