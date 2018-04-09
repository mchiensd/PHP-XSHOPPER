<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chude;
class chudeController extends Controller
{
	public $timestamps = false;
    //
    public function getDS(){
    	$chude = chude::all();
    	return view('admin.qladmin.danhsachchude',['chude'=>$chude]);
    }

    
    public function postThem(Request $request){
    	$ad = $request->all();
    	

    	//$checkuser = admin::find($ad['UserAdmin']);

   
    	$this->validate($request,
    		[
    			'TenChuDe' => 'required|min:2|max:24|unique:chude,TenChuDe',
    		],

    		[
    			'TenChuDe.required' => 'Bạn chưa nhập tên chủ đề. ',
    			'TenChuDe.min' => 'Tên chủ đề phải ít nhất 2 kí tự.',
    			'TenChuDe.max' => 'Tên chủ đề phải có ít hơn 24 kí tự.',
    			'TenChuDe.unique' => 'Tên chủ đề đã tồn tại.',
    			
    		]);




    	$dataInsertToDataBase = array(
    		'TenChuDe' => $ad['TenChuDe'],
    	);
    	$chude = new chude;
    	$chude->insert($dataInsertToDataBase);
    	$idchude= chude::where('TenChuDe', '=', $ad['TenChuDe'])->first();
    	$data['shared'] =[$ad['TenChuDe'], $idchude->MaCD];
    	return $data;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

    }


      public function postSua(Request $request){
    	$ad = $request->all();
    	

    	//$checkuser = admin::find($ad['UserAdmin']);

   
    	

    	
    			$this->validate($request,
    		[
    			
    			'eTenChuDe' => 'required|min:2|max:24',
    			
    		],

    		[
    			
    			'eTenChuDe.required' => 'Bạn chưa nhập chủ đề.',
    			'eTenChuDe.min' => 'Chủ đề phải ít nhất 2 kí tự.',
    			'eTenChuDe.max' => 'Chủ đề phải có ít hơn 24 kí tự.',
    			

    		]);

				chude::where('MaCD',$ad['eMaCD'])->update(['TenChuDe'=>$ad['eTenChuDe']]);



    	


    	

    	
    	
   
    	return $ad;
    //	return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

   }

   public function postXoa(Request $request){
   	$ad = $request->all();   	
				chude::where('MaCD',$ad['MaCD'])->delete();
   	return $ad;
    	//return view('admin.qladmin.danhsachadmin',with('quanao','chude','loaiquanao'));

   }

    
}
