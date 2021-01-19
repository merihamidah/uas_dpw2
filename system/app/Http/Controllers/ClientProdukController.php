<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Faker;

class ClientProdukController extends Controller{
     function index(){
        $user = request()->user();
        $data['list_produk'] = $user->produk=Produk::paginate(9);
        return view('client.index', $data);  
    }    
    function show(Produk $produk){
         $data['produk'] = $produk;
        return view('client.show', $data);
    }
    
    function showAlamat(){
        $data['list_provinsi'] = Provinsi::all();
        return view('alamat', $data);
    }
  
    function filter(){
        $nama = request('nama');
        $stok = explode(",", request('stok'));              
        $data['harga_min'] = $harga_min = request('harga_min');  
        $data['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = Produk::where('nama','like', "%$nama%")->whereBetween('harga', [$harga_min, $harga_max])->whereIn('stok', $stok)->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');

        return view('client.index', $data);
    }
  


}