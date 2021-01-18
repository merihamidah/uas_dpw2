<?php 
namespace App\Http\Controllers;
use App\Models\Provinsi;

class HomeController extends Controller{
    function showBeranda(){
        return view('beranda');
    } 
    function showAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('show-ajax', $data);
    }
}