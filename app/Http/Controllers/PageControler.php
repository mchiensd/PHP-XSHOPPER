<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quanao;
use App\chude;
use App\loaiquanao;
use App\kichthuoc;
use App\nhasanxuat;

use App\mausac;


class PageControler extends Controller
{

    //
    public function getIndex()
    {
    	$quanao = quanao::simplePaginate(24);
        $chude = chude::all();
        $loaiquanao=loaiquanao::all();

        //dd($quanao);
        //exit();
    	
    	
    	return view('page.trangchu',compact('quanao','chude','loaiquanao'));
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




    public function getChiTietQuanAo($id)
    {
        $quanao = quanao::where('MaQuanAo',$id)->first();
       
        $nhasanxuat=nhasanxuat::all();
        $chude=chude::all();
        $mausac=mausac::all();

        $kichthuoc= kichthuoc::all();
        //$kichthuoc= kichthuoc::where('MaKichThuoc',$quanao->MaKichThuoc)->get();

        //dd($nhasanxuat);
        //exit();
        return view('page.chitiet',compact('quanao','nhasanxuat','mausac','chude','kichthuoc'));
    }



}
    