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

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'qladmin'], function(){
		
		// quan lí admin ---> done
		Route::get('danh-sach-admin','adminController@getDS');
		//Route::get('sua-admin','adminController@getSua');
		Route::post('sua-admin','adminController@postSua');
		//Route::any('them-admin','adminController@getThem');
		Route::post('them-admin','adminController@postThem');
		Route::post('xoa-admin','adminController@postXoa');


		// quan li mat hang

		Route::get('danh-sach-chude','chudeController@getDS');
		//Route::get('sua-admin','adminController@getSua');
		Route::post('sua-chude','chudeController@postSua');
		//Route::any('them-admin','adminController@getThem');
		Route::post('them-chude','chudeController@postThem');
		Route::post('xoa-chude','chudeController@postXoa');


		//quanli kich thuoc

		Route::get('danh-sach-kichthuoc','kichthuocController@getDS');
		//Route::get('sua-admin','adminController@getSua');
		Route::post('sua-kichthuoc','kichthuocController@postSua');
		//Route::any('them-admin','adminController@getThem');
		Route::post('them-kichthuoc','kichthuocController@postThem');
		Route::post('xoa-kichthuoc','kichthuocController@postXoa');



		// nha san xuat
		Route::get('danh-sach-nhasanxuat','nhasanxuatController@getDS');
		//Route::get('sua-admin','adminController@getSua');
		Route::post('sua-nhasanxuat','nhasanxuatController@postSua');
		//Route::any('them-admin','adminController@getThem');
		Route::post('them-nhasanxuat','nhasanxuatController@postThem');
		Route::post('xoa-nhasanxuat','nhasanxuatController@postXoa');


		// mau sac

			// nha san xuat
		Route::get('danh-sach-mausac','mausacController@getDS');
		//Route::get('sua-admin','adminController@getSua');
		Route::post('sua-mausac','mausacController@postSua');
		//Route::any('them-admin','adminController@getThem');
		Route::post('them-mausac','mausacController@postThem');
		Route::post('xoa-mausac','mausacController@postXoa');


		//loaihang
				// nha san xuat
		Route::get('danh-sach-loaihang','loaihangController@getDS');
		//Route::get('sua-admin','adminController@getSua');
		Route::post('sua-loaihang','loaihangController@postSua');
		//Route::any('them-admin','adminController@getThem');
		Route::post('them-loaihang','loaihangController@postThem');
		Route::post('xoa-loaihang','loaihangController@postXoa');

		//khach hang

		Route::get('danh-sach-khachhang','khachhangController@getDS');
		//Route::get('sua-admin','adminController@getSua');
		Route::post('sua-khachhang','khachhangController@postSua');
		//Route::any('them-admin','adminController@getThem');
		Route::post('them-khachhang','khachhangController@postThem');
		Route::post('xoa-khachhang','khachhangController@postXoa');

		// san pham ---> phần phê nhất
		Route::get('danh-sach-sanpham','quanaoController@getDS');
		//Route::get('sua-admin','adminController@getSua');
		Route::post('sua-sanpham','quanaoController@postSua');
		//Route::any('them-admin','adminController@getThem');
		Route::post('them-sanpham','quanaoController@postThem');
		Route::post('xoa-sanpham','quanaoController@postXoa');

	});
});