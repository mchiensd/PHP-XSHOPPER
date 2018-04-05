<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quanao;

class PageControler extends Controller
{

    //
    public function getIndex()
    {
    	$quanao = quanao::all();
    	print_r($quanao);
    	exit();
    	return view('page.trangchu');
    }
    public function getDetails()
    {
    	return view('page.chitiet');
    }
}
