<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orangtua;
use App\Anak;
class MyController extends Controller
{
    //
    public function index()
    {
    	$a = "dede hikmat";
    	return "Nama Saya Adalah <b>".$a."</b>";
    }

    public function tampilan()
    {
    	return view('about');
    }

    public function tampilmodel()
    {
    	$ortu = Orangtua::all();
    	$anak = Anak::all();
    	return view('about', compact('ortu', 'anak'));
    }
}
