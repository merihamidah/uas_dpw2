<?php 
namespace App\Http\Controllers;
use App\Models\Provinsi;

class HomeController extends Controller{
    function showBeranda(){
        return view('beranda');
    } 
    function showTentang(){
        return view('tentang');
    } 
    function showKontak(){
        return view('kontak');
    } 
    function showAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('show-ajax', $data);
    }
}