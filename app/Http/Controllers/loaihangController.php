<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaihang;
use App\chude;
class loaihangController extends Controller
{
    //
    public $timestamps = false;
    //
    public function getDS(){
    	$loaihang = loaihang::all();
    	$chude = chude::all();
    	return view('admin.qladmin.danhsachloaihang',compact('loaihang','chude'));
    }

    
    public function postThem(Request $request){
    	$ad = $request->all();
    	

    	//$checkuser = admin::find($ad['UserAdmin']);

   
    	$this->validate($request,
    		[
    			'TenLoaiQuanAo' => 'required|min:6|max:24|unique:loaiquanao,TenLoaiQuanAo',
    		],

    		[
    			'TenLoaiQuanAo.required' => 'Bạn chưa nhập tên chủ đề. ',
    			'TenLoaiQuanAo.min' => 'Tên chủ đề phải ít nhất 6 kí tự.',
    			'TenLoaiQuanAo.max' => 'Tên chủ đề phải có ít hơn 24 kí tự.',
    			'TenLoaiQuanAo.unique' => 'Tên chủ đề đã tồn tại.',
    			
    		]);




    	$dataInsertToDataBase = array(
    		'TenLoaiQuanAo' => $ad['TenLoaiQuanAo'],
    		'MaCD' => $ad['MaCD'],
    	);
    	$loaihang = new loaihang;
    	$loaihang->insert($dataInsertToDataBase);
    	$idloaihang= loaihang::where('TenLoaiQuanAo', '=', $ad['TenLoaiQuanAo'])->first();
    	$data['shared'] =[$ad['TenLoaiQuanAo'], $idloaihang->MaLoaiQuanAo];
    	return $data;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

    }


      public function postSua(Request $request){
    	$ad = $request->all();
    	

    	//$checkuser = admin::find($ad['UserAdmin']);

   
    	

    	
    			$this->validate($request,
    		[
    			
    			'eTenLoaiQuanAo' => 'required|min:6|max:24',
    			
    		],

    		[
    			
    			'eTenLoaiQuanAo.min' => 'Tên chủ đề phải ít nhất 6 kí tự.',
    			'eTenLoaiQuanAo.max' => 'Tên chủ đề phải có ít hơn 24 kí tự.',
    			'eTenLoaiQuanAo.unique' => 'Tên chủ đề đã tồn tại.',
    			

    		]);

				loaihang::where('MaLoaiQuanAo',$ad['eMaLoaiQuanAo'])->update(['TenLoaiQuanAo'=>$ad['eTenLoaiQuanAo'], 'MaCD'=>$ad['eMaCD']]);



    	


    	

    	
    	
   
    	return $ad;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

   }

   public function postXoa(Request $request){
   	$ad = $request->all();   	
				loaihang::where('MaLoaiQuanAo',$ad['MaLoaiQuanAo'])->delete();
   	return $ad;
    	//return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

   }

}
