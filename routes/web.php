<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
	{
		/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	/*	Route::get('/', function()
		{
			return View::make('hello');
		});

		Route::get('test',function(){
			return View::make('test');
		});*/
		Route::group(['middleware'=>'web'],function(){
			Route::get('/','Front@index');
	    	Auth::routes();
		});
	});

/*Route::group(['middleware'=>'web'],function(){
		/*Route::get('/', function () {
	    return view('welcome');
	    });*/
	  /* Route::get('/','Front@index');
	    Auth::routes();
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware'=>'admin'],function(){
    Route::resource('/admin','AdminController');
    Route::resource('/brand','BrandController');
    Route::resource('brand','BrandController');
	Route::get('brand/{brand}/delete','BrandController@destroy');
	Route::get('brand/{brand}/active','BrandController@active');		
	Route::get('brand/{brand}/noactive','BrandController@noactive');
	Route::resource('service','ServiceController');
    Route::get('service/{service}/edit','ServiceController@edit');
    Route::post('service/{service}/update','ServiceController@update');
    Route::get('service/{service}/delete','ServiceController@destroy');
    Route::get('service/{service}/active','ServiceController@active');
    Route::get('service/{service}/noactive','ServiceController@noactive');
    Route::resource('about','AboutController');
	Route::get('about/{about}/edit','AboutController@edit');
	Route::post('about/{about}/update','AboutController@update');
	Route::get('about/{about}/delete','AboutController@destroy');
	Route::get('about/{about}/active','AboutController@active');
	Route::get('about/{about}/noactive','AboutController@noactive');
	Route::resource('team','TeamController');
	Route::get('team/{team}/edit','TeamController@edit');
	Route::post('team/{team}/update','TeamController@update');
	Route::get('team/{team}/delete','TeamController@destroy');
	Route::get('team/{team}/active','TeamController@active');
	Route::get('team/{team}/noactive','TeamController@noactive');
	Route::resource('slide','SliderController');
	Route::get('slide/{team}/edit','SliderController@edit');
	Route::post('slide/{team}/update','SliderController@update');
	Route::get('slide/{team}/delete','SliderController@destroy');
	Route::get('slide/{team}/active','SliderController@active');
	Route::get('slide/{team}/noactive','SliderController@noactive');
	Route::resource('setting','SettingController');
	Route::get('setting/{setting}/edit','SettingController@edit');
	Route::post('setting/{setting}/update','SettingController@update');
	Route::get('setting/{setting}/delete','SettingController@destroy');
	Route::resource('cat','CatController');
	Route::get('cat/{cat}/edit','CatController@edit');
	Route::post('cat/{cat}/update','CatController@update');
	Route::get('cat/{cat}/delete','CatController@destroy');
	Route::resource('post','PostController');
	Route::get('post/{post}/edit','PostController@edit');
	Route::post('post/{post}/update','PostController@update');
	Route::get('post/{post}/delete','PostController@destroy');
/*
|--------------------------------------------------------------------------
| Image Routes
|--------------------------------------------------------------------------
|
*/
    Route::get('/images/brand/{$brandimage}',function($name){
	   return public_path('images/'.$name); 
	});
	Route::get('/images/service/{$simage}',function($name){
		return public_path('images/'.$name); 
	});
	Route::get('/images/about/{$about_image}',function($name){
		return public_path('images/'.$name); 
	});
	Route::get('/images/team/{$teamimage}',function($name){
		return public_path('images/'.$name); 
	});
	Route::get('/images/slider/{$imageslide}',function($name){
		return public_path('images/'.$name); 
	});
	Route::get('/images/slider/{$image}',function($name){
		return public_path('images/'.$name); 
	});
});