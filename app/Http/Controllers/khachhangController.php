<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khachhang;
class khachhangController extends Controller
{
    //
    public function getDS(){
    	$khachhang = khachhang::all();
    	return view('admin.qladmin.danhsachkhachhang',['khachhang'=>$khachhang]);
    }

    
    public function postThem(Request $request){
    	$ad = $request->all();
    	

    	//$checkuser = admin::find($ad['UserAdmin']);

   
    	$this->validate($request,
    		[
    			'HoTen' => 'required|min:6|max:24',
    			'TaiKhoan' => 'required|min:6|max:24|unique:khachhang,TaiKhoan',
    			'MatKhau' => 'required|min:6|max:24',
    			'DiaChiKH' => 'required',
    			'DienThoaiKH' => 'required',
    			'Email' => 'required|email',
    			'NgaySinh' => 'required',
    		],

    		[
    			'HoTen.required' => 'Bạn chưa nhập tên khách hàng. ',
    			'HoTen.min' => 'Tên khách hàng phải ít nhất 6 kí tự.',
    			'HoTen.max' => 'Tên khách hàng phải có ít hơn 24 kí tự.',

    			'TaiKhoan.required' => 'Bạn chưa nhập tên tài khoản. ',
    			'TaiKhoan.min' => 'Tên tài khoản phải ít nhất 6 kí tự.',
    			'TaiKhoan.max' => 'Tên tài khoản phải có ít hơn 24 kí tự.',
    			'TaiKhoan.unique' => 'Tên tài khoản đã tồn tại.',

    			'MatKhau.required' => 'Bạn chưa nhập mật khẩu. ',
    			'MatKhau.min' => 'Mật khẩu phải ít nhất 6 kí tự.',
    			'MatKhau.max' => 'Mật khẩu phải có ít hơn 24 kí tự.',
    			'DiaChiKH.required' => 'Bạn chưa nhập địa chỉ. ',
    			'DienThoaiKH.required' => 'Bạn chưa nhập điện thoại. ',
    			'Email.required' => 'Bạn chưa nhập email. ',
    			'Email.email' => 'Mail không hợp lệ. ',
    			'NgaySinh.required' => 'Bạn chưa nhập ngày sinh. ',
    			
    		]);




    	$dataInsertToDataBase = array(
    		'HoTen' => $ad['HoTen'],
    		'TaiKhoan' => $ad['TaiKhoan'],
    		'MatKhau' => $ad['MatKhau'],
    		'DiaChiKH' => $ad['DiaChiKH'],
    		'DienThoaiKH' => $ad['DienThoaiKH'],
    		'Email' => $ad['Email'],
    		'NgaySinh' => $ad['NgaySinh'],
    	);
    	$khachhang = new khachhang;
    	$khachhang->insert($dataInsertToDataBase);
    	$idkhachhang= khachhang::where('TaiKhoan', '=', $ad['TaiKhoan'])->first();
    	$data['shared'] =[$idkhachhang->MaKH ,$ad['HoTen'],$ad['TaiKhoan'],$ad['DiaChiKH'],$ad['DienThoaiKH'],$ad['Email'],$ad['NgaySinh'], ];
    	return $data;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

    }


      public function postSua(Request $request){
    	$ad = $request->all();
    	

    	//$checkuser = admin::find($ad['UserAdmin']);

   
    	

    	
    		$this->validate($request,
    		[
    			'eHoTen' => 'required|min:6|max:24',
    			
    			'eDiaChiKH' => 'required',
    			'eDienThoaiKH' => 'required',
    			'eEmail' => 'required|email',
    			'eNgaySinh' => 'required',
    		],

    		[
    			'eHoTen.required' => 'Bạn chưa nhập tên khách hàng. ',
    			'eHoTen.min' => 'Tên khách hàng phải ít nhất 6 kí tự.',
    			'eHoTen.max' => 'Tên khách hàng phải có ít hơn 24 kí tự.',

 

    			
    			'eDiaChiKH.required' => 'Bạn chưa nhập địa chỉ. ',
    			'eDienThoaiKH.required' => 'Bạn chưa nhập điện thoại. ',
    			'eEmail.required' => 'Bạn chưa nhập email. ',
    			'eEmail.email' => 'Mail không hợp lệ. ',
    			'eNgaySinh.required' => 'Bạn chưa nhập ngày sinh. ',
    			
    		]);




				khachhang::where('MaKH',$ad['eMaKH'])->update([
					'HoTen' => $ad['eHoTen'],
		    		'DiaChiKH' => $ad['eDiaChiKH'],
		    		'DienThoaiKH' => $ad['eDienThoaiKH'],
		    		'Email' => $ad['eEmail'],
		    		'NgaySinh' => $ad['eNgaySinh'],

				]);



    	


    	

    	
    	
   
    	return $ad;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

   }

   public function postXoa(Request $request){
   	$ad = $request->all();   	
				khachhang::where('MaKH',$ad['MaKH'])->delete();
   	return $ad;
    	//return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

   }
}
