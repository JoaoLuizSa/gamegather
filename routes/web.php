<?php

Route::group(['namespace'=>'Painel'], function(){
Route::resource('/usuario','UserController');
Route::post('/usuario/login','UserController@fazerlogin');
Route::get('/teste','ProdutoController@tests');
Route::resource('/produtos','ProdutoController');
});

Route::group(['namespace'=>'Site'], function(){
	//Principais Tags
	Route::get('/','SiteController@index');
	Route::resource('/home','SiteController');
	Route::get('/jogadorestoxicos','SiteController@jogadorestoxicos');
	Route::resource('/formulario','FormController');
	Route::post('/formulario/shows','FormController@shows');
	//GameGather
	Route::get('/historia', 'SiteController@historia');
	Route::get('/equipe', 'SiteController@equipe');
	Route::get('/objetivos', 'SiteController@objetivos');
	Route::get('/mercado-games', 'SiteController@mercadogames');
	Route::get('/parceiros', 'SiteController@parceiros');
	Route::get('/doc', 'SiteController@doc');
	Route::get('/fale-conosco', 'SiteController@faleconosco');
	//Jogos e api's
	Route::get('/lol','SiteController@lol');
	Route::get('/dota','SiteController@dota');
	Route::get('/wow','SiteController@wow');
	Route::get('/fifa','SiteController@fifa');
	Route::get('/cs-go','SiteController@csgo');
	Route::get('/discord','SiteController@discord');
});