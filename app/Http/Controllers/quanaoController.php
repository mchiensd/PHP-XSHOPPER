<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quanao;
use App\loaihang;
use App\mausac;
use App\chude;
use App\kichthuoc;
class quanaoController extends Controller
{
    //
     public function getDS(){
    	$quanao = quanao::all();
    	$loaihang = loaihang::all();
    	$chude = chude::all();
    	$mausac = mausac::all();
    	$kichthuoc = kichthuoc::all();

    	return view('admin.qladmin.danhsachsanpham',compact('loaihang','chude','mausac','quanao','kichthuoc'));
    }

    
    public function postThem(Request $request){
    	$ad = $request->all();
    	

    	//$checkuser = admin::find($ad['UserAdmin']);

   
    	$this->validate($request,
    		[
    			'TenNSX' => 'required|min:3|max:24|unique:nhasanxuat,TenNSX',
    		],

    		[
    			'TenNSX.required' => 'Bạn chưa nhập tên chủ đề. ',
    			'TenNSX.min' => 'Tên chủ đề phải ít nhất 3 kí tự.',
    			'TenNSX.max' => 'Tên chủ đề phải có ít hơn 24 kí tự.',
    			'TenNSX.unique' => 'Tên chủ đề đã tồn tại.',
    			
    		]);




    	$dataInsertToDataBase = array(
    		'TenNSX' => $ad['TenNSX'],
    	);
    	$nhasanxuat = new nhasanxuat;
    	$nhasanxuat->insert($dataInsertToDataBase);
    	$idnhasanxuat= nhasanxuat::where('TenNSX', '=', $ad['TenNSX'])->first();
    	$data['shared'] =[$ad['TenNSX'], $idnhasanxuat->MaNSX];
    	return $data;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

    }


      public function postSua(Request $request){
    	$ad = $request->all();
    	

    	//$checkuser = admin::find($ad['UserAdmin']);

   
    	

    	
    			$this->validate($request,
    		[
    			
    			'eTenNSX' => 'required|min:3|max:24',
    			
    		],

    		[
    			
    			'eTenNSX.required' => 'Bạn chưa nhập nhà sản xuất.',
    			'eTenNSX.min' => 'Nhà sản xuất phải ít nhất 3 kí tự.',
    			'eTenNSX.max' => 'Nhà sản xuất phải có ít hơn 24 kí tự.',
    			

    		]);

				nhasanxuat::where('MaNSX',$ad['eMaNSX'])->update(['TenNSX'=>$ad['eTenNSX']]);



    	


    	

    	
    	
   
    	return $ad;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

   }

   public function postXoa(Request $request){
   	$ad = $request->all();   	
				nhasanxuat::where('MaNSX',$ad['MaNSX'])->delete();
   	return $ad;
    	//return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));
}
}
