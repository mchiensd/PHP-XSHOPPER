<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quanao;
use App\chude;
use App\loaiquanao;


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
    public function getDetails()
    {
        $quanao = quanao::all();
       // print_r($quanao);
        //exit();
    	return view('page.chitiet');
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
        $loaisanpham = loaisanpham::where('MaCD',$type)->get();

       // $SanPham_TheoLoai=quanao::where('MaLoaiQuanAo',$loaisanpham->MaLoaiQuanAo)->get();
        dd($loaisanpham);
        exit();
        return view('page.loaisanpham',compact('SanPham_TheoLoai'));
    }
}
