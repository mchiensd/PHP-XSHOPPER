<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
class adminController extends Controller
{
	public $timestamps = false;
    //
    public function getDS(){
    	$admin = admin::all();
    	return view('admin.qladmin.danhsachadmin',['admin'=>$admin]);
    }

    
    public function postThem(Request $request){
    	$ad = $request->all();
    	

    	//$checkuser = admin::find($ad['UserAdmin']);

   
    	$this->validate($request,
    		[
    			'UserAdmin' => 'required|min:6|max:24|unique:admin,UserAdmin',
    			'HoTenAdmin' => 'required|min:6|max:24',
    			'PassAdmin' => 'required|min:6|max:24',
    			'RePassAdmin' => 'required|min:6|max:24|same:PassAdmin',
    		],

    		[
    			'UserAdmin.required' => 'Bạn chưa nhập tên tài khoản. ',
    			'UserAdmin.min' => 'Tên tài khoản phải ít nhất 6 kí tự.',
    			'UserAdmin.max' => 'Tên tài khoản phải có ít hơn 24 kí tự.',
    			'UserAdmin.unique' => 'Tên tài khoản đã tồn tại.',
    			'HoTenAdmin.required' => 'Bạn chưa nhập họ tên.',
    			'HoTenAdmin.min' => 'Họ tên phải ít nhất 6 kí tự.',
    			'HoTenAdmin.max' => 'Họ tên phải có ít hơn 24 kí tự.',
    			'PassAdmin.required' => 'Bạn chưa nhập mật khẩu.',
    			'PassAdmin.min' => 'Mật khẩu phải ít nhất 6 kí tự.',
    			'PassAdmin.max' => 'Mật khẩu phải có ít hơn 24 kí tự.',
    			'RePassAdmin.required' => 'Bạn chưa nhập mật khẩu xác nhận.',
    			'RePassAdmin.min' => 'Mật khẩu xác nhận phải ít nhất 6 kí tự.',
    			'RePassAdmin.max' => 'Mật khẩu xác nhận phải có ít hơn 24 kí tự.',
    			'RePassAdmin.same' => 'Xác nhận mật khẩu không khớp.',

    		]);




    	$dataInsertToDataBase = array(
    		'UserAdmin' => $ad['UserAdmin'],
    		'PassAdmin' => $ad['PassAdmin'],
    		'Hoten' => $ad['HoTenAdmin'],
    	);
    	$admin = new admin;
    	$admin->insert($dataInsertToDataBase);
    	$idadmin= admin::where('UserAdmin', '=', $ad['UserAdmin'])->first();
    	$data['shared'] =[$ad['UserAdmin'],$ad['HoTenAdmin'], $idadmin->IdAdmin];

    	
    	
   
    	return $data;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

    }


      public function postSua(Request $request){
    	$ad = $request->all();
    	

    	//$checkuser = admin::find($ad['UserAdmin']);

   
    	/*$this->validate($request,
    		[
    			
    			'eHoTenAdmin' => 'required|min:6|max:24',
    			'ePassAdmin' => 'required|min:6|max:24',
    			'eRePassAdmin' => 'required|min:6|max:24|same:ePassAdmin',
    		],

    		[
    			
    			'eHoTenAdmin.required' => 'Bạn chưa nhập họ tên.',
    			'eHoTenAdmin.min' => 'Họ tên phải ít nhất 6 kí tự.',
    			'eHoTenAdmin.max' => 'Họ tên phải có ít hơn 24 kí tự.',
    			'PassAdmin.required' => 'Bạn chưa nhập mật khẩu.',
    			'PassAdmin.min' => 'Mật khẩu phải ít nhất 6 kí tự.',
    			'PassAdmin.max' => 'Mật khẩu phải có ít hơn 24 kí tự.',
    			'RePassAdmin.required' => 'Bạn chưa nhập mật khẩu xác nhận.',
    			'RePassAdmin.min' => 'Mật khẩu xác nhận phải ít nhất 6 kí tự.',
    			'RePassAdmin.max' => 'Mật khẩu xác nhận phải có ít hơn 24 kí tự.',
    			'RePassAdmin.same' => 'Xác nhận mật khẩu không khớp.',

    		]);*/

    	if($ad['eNewPassAdmin'] == "" || $ad['eOldPassAdmin'] == "" || $ad['eRePassAdmin'] == "" ){
    			$this->validate($request,
    		[
    			
    			'eHoTenAdmin' => 'required|min:6|max:24',
    			
    		],

    		[
    			
    			'eHoTenAdmin.required' => 'Bạn chưa nhập họ tên.',
    			'eHoTenAdmin.min' => 'Họ tên phải ít nhất 6 kí tự.',
    			'eHoTenAdmin.max' => 'Họ tên phải có ít hơn 24 kí tự.',
    			

    		]);

				admin::where('IdAdmin',$ad['eIdAdmin'])->update(['Hoten'=>$ad['eHoTenAdmin']]);



    	}


    	

    	
    	
   
    	return $ad;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

    }

    public function postXoa(Request $request){
    	$ad = $request->all();   	
				admin::where('IdAdmin',$ad['IdAdmin'])->delete();
    	return $ad;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

    }

    
}
