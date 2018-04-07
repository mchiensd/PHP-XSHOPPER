<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quanao;
use App\chude;
use App\loaiquanao;
use App\kichthuoc;


class PageControler extends Controller
{

    //
    public function getIndex()
    {
    	$quanao = quanao::simplePaginate(24);
        $chude = chude::all();
        $loaiquanao=loaiquanao::all();

       // dd($quanao);
        //exit();
    	
    	
    	return view('page.trangchu',compact('quanao','chude','loaiquanao'));
    }
    public function getDetails(Request $req)
    {
        $quanao = quanao::where('MaQuanAo',$req->id)->first();
        $kichthuoc= kichthuoc::where('MaKichThuoc',$quanao->MaKichThuoc)->get();

        //($kichthuoc);
        //exit();
    	return view('chitiet',compact('quanao','kichthuoc'));
    }
     public function getHeader()
    {
        $chude = chude::all();
       // print_r($quanao);
        //exit();
        return $chude;
    }
public function getLoaiSanPham($type)
    {
       
        $chude = chude::all();
        $loaiquanao=loaiquanao::all();
        $quanao= quanao::where('MaLoaiQuanAo',$type)->get();

        return view('page.loaisanpham',compact('quanao'));
    }



}
    