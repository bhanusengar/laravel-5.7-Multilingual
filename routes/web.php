<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/stocks');
});

Route::get('/stocks','StockController@index')->middleware('locale');
Route::get('/stocks/create/','StockController@create')->middleware('locale')->middleware('locale');
Route::post('/stocks/store/','StockController@store')->name("stocks.store")->middleware('locale');
Route::get('/stocks/show/{id}','StockController@show')->name("stocks.show")->middleware('locale');
Route::get('/stocks/edit/{id}','StockController@edit')->name("stocks.edit")->middleware('locale');
Route::patch('/stocks/update/{id}','StockController@update')->name("stocks.update")->middleware('locale');
Route::delete('/stocks/destroy/{id}','StockController@destroy')->name("stocks.destroy")->middleware('locale');
Route::post('/localization/create/','LocalizationController@create')->name("localization.create");
