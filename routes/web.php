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
Route::get('test2', function () {
    return view('page.giohang');
});


Route::get('index',
	['as' => 'Trang-chu',
	'uses'=>'PageControler@getIndex'
]);

Route::get('loai-san-pham/{type}',[
'as' =>'loaisanpham',
'uses'=>'PageControler@getLoaiSanPham']);



Route::get('chitietquanao/{id}',[
'as' =>'chitietquanao',
'uses'=>'PageControler@getChiTietQuanAo']);


//Route::get('chitietquanao/{id}','PageControler@getChiTietQuanAo');

