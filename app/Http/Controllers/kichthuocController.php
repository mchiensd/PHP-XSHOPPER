<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kichthuoc;
class kichthuocController extends Controller
{
    //
    public function getDS(){
    	$kichthuoc = kichthuoc::all();
    	return view('admin.qladmin.danhsachkichthuoc',['kichthuoc'=>$kichthuoc]);
    }


     public function postThem(Request $request){
    	$ad = $request->all();
    	

    	//$checkuser = admin::find($ad['UserAdmin']);

   
    	$this->validate($request,
    		[
    			'TenKichThuoc' => 'required|min:1|max:24|unique:kichthuoc,TenKichThuoc',
    			'Mota' => 'required|min:6|max:100',
    		],

    		[
    			'TenKichThuoc.required' => 'Bạn chưa nhập tên kích thước. ',
    			'TenKichThuoc.min' => 'Tên kích thước phải ít nhất 1 kí tự.',
    			'TenKichThuoc.max' => 'Tên kích thước phải có ít hơn 24 kí tự.',
    			'TenKichThuoc.unique' => 'Tên kích thước đã tồn tại.',
    			'Mota.required' => 'Bạn chưa nhập mô tả. ',
    			'Mota.min' => 'Mô tả phải ít nhất 6 kí tự.',
    			'Mota.max' => 'Mô tả phải có ít hơn 24 kí tự.',
    		]);




    	$dataInsertToDataBase = array(
    		'TenKichThuoc' => $ad['TenKichThuoc'],
    		'Mota' => $ad['Mota'],
    	);
    	$kichthuoc = new kichthuoc;
    	$kichthuoc->insert($dataInsertToDataBase);
    	$idkichthuoc= kichthuoc::where('TenKichThuoc', '=', $ad['TenKichThuoc'])->first();
    	$data['shared'] =[$idkichthuoc->MaKichThuoc,$ad['TenKichThuoc'],$ad['Mota']];
    	return $data;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

    }



      public function postSua(Request $request){
    	$ad = $request->all();
    	
    			$this->validate($request,
    		[
    			
    			'eTenKichThuoc' => 'required|min:1|max:24',
    			'eMota' => 'required|min:6|max:100',
    			
    		],

    		[
    			
    			'eTenKichThuoc.required' => 'Bạn chưa nhập tên kích thước. ',
    			'eTenKichThuoc.min' => 'Tên kích thước phải ít nhất 1 kí tự.',
    			'eTenKichThuoc.max' => 'Tên kích thước phải có ít hơn 24 kí tự.',
    			'eMota.required' => 'Bạn chưa nhập mô tả. ',
    			'eMota.min' => 'Mô tả phải ít nhất 6 kí tự.',
    			'eMota.max' => 'Mô tả phải có ít hơn 24 kí tự.',
    			

    		]);

				kichthuoc::where('MaKichThuoc',$ad['eMaKichThuoc'])->update(['TenKichThuoc'=>$ad['eTenKichThuoc'],'Mota'=>$ad['eMota']]);

    	return $ad;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

   }


    public function postXoa(Request $request){
   	$ad = $request->all();   	
				kichthuoc::where('MaKichThuoc',$ad['MaKichThuoc'])->delete();
   	return $ad;
    	//return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

   }


}
