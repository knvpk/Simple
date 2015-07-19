<?php

Route::group(['prefix' => 'sample', 'namespace' => 'Modules\Sample\Http\Controllers'], function()
{
	Route::get('/', 'SampleController@index');
});