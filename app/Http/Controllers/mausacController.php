<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mausac;
class mausacController extends Controller
{
      public function getDS(){
    	$mausac = mausac::all();
    	return view('admin.qladmin.danhsachmausac',['mausac'=>$mausac]);
    }


     public function postThem(Request $request){
    	$ad = $request->all();
    	

    	//$checkuser = admin::find($ad['UserAdmin']);

   
    	$this->validate($request,
    		[
    			'TenMauSac' => 'required|min:1|max:24|unique:mausac,TenMauSac',
    			'MaMauCss' => 'required|min:2|max:15',
    		],

    		[
    			'TenMauSac.required' => 'Bạn chưa nhập tênmàu sắc. ',
    			'TenMauSac.min' => 'Tên màu sắc phải ít nhất 1 kí tự.',
    			'TenMauSac.max' => 'Tên màu sắc phải có ít hơn 24 kí tự.',
    			'TenMauSac.unique' => 'Tên màu sắc đã tồn tại.',
    			'MaMauCss.required' => 'Bạn chưa nhập mã màu CSS. ',
    			'MaMauCss.min' => 'Mã màu CSS phải ít nhất 2 kí tự.',
    			'MaMauCss.max' => 'Mã màu CSS phải có ít hơn 15 kí tự.',
    		]);




    	$dataInsertToDataBase = array(
    		'TenMauSac' => $ad['TenMauSac'],
    		'MaMauCss' => $ad['MaMauCss'],
    	);
    	$mausac = new mausac;
    	$mausac->insert($dataInsertToDataBase);
    	$idmausac= mausac::where('TenMauSac', '=', $ad['TenMauSac'])->first();
    	$data['shared'] =[$idmausac->MaMauSac,$ad['TenMauSac'],$ad['MaMauCss']];
    	return $data;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

    }



      public function postSua(Request $request){
    	$ad = $request->all();
    	
    			$this->validate($request,
    		[
    			
    			'eTenMauSac' => 'required|min:1|max:24',
    			'eMaMauCss' => 'required|min:2|max:100',
    			
    		],

    		[
    			
    			'eTenMauSac.required' => 'Bạn chưa nhập tênmàu sắc. ',
    			'eTenMauSac.min' => 'Tên màu sắc phải ít nhất 1 kí tự.',
    			'eTenMauSac.max' => 'Tên màu sắc phải có ít hơn 24 kí tự.',
    			'eMaMauCss.required' => 'Bạn chưa nhập mã màu CSS. ',
    			'eMaMauCss.min' => 'Mã màu CSS phải ít nhất 2 kí tự.',
    			'eMaMauCss.max' => 'Mã màu CSS phải có ít hơn 15 kí tự.',
    			

    		]);

				mausac::where('MaMauSac',$ad['eMaMauSac'])->update(['TenMauSac'=>$ad['eTenMauSac'],'MaMauCss'=>$ad['eMaMauCss']]);

    	return $ad;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

   }


    public function postXoa(Request $request){
   	$ad = $request->all();   	
				mausac::where('MaMauSac',$ad['MaMauSac'])->delete();
   	return $ad;
    	//return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

   }
}
