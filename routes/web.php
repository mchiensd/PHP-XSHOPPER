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

Route::get('test', function () {
    return view('page.chitiet');
});


Route::get('index',
	['as' => 'Trang-chu',
	'uses'=>'PageControler@getIndex'
]);
Route::get('details',
	['as' => 'ChiTiet',
	'uses'=>'PageControler@getDetails'
]);
Route::get('loai-san-pham/{type}',[
'as' =>'loaisanpham',
'uses'=>'PageControler@getLoaiSanPham']);

Route::get('Chi-tiet-San-pham/{id}',[
'as' =>'chitietquanao',
'uses'=>'PageControler@getDetails']);

