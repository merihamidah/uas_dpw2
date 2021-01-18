<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Produk::all();
       
    }

    /**
     * Show the form for creating a new resource.
     *
     *@return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if(request('nama')&& request('harga') && request('berat') && request('stok') && request('deskripsi')){
        $produk = new Produk;
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->stok = request('stok');
        $produk->deskripsi = request('deskripsi');
        $produk->save();
        
        return collect([
            'respond'=> 200,
            'data'=> $produk
        ]);
    } else{
           return collect([
               'respond' => 500,
               'message' => "Field Ada Yang Kosong"
           ]);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        if($produk){
            return collect([
                'status' => 200,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk Tidak ditemukan"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
        $produk = Produk::find($id);
        if($produk) {
            $produk->nama = request('nama') ?? $produk->nama;
            $produk->harga = request('harga')?? $produk->harga;
            $produk->berat = request('berat')?? $produk->berat;
            $produk->stok = request('stok')?? $produk->stok;
            $produk->deskripsi = request('deskripsi')?? $produk->deskripsi;
            $produk->save();
        
            return collect([
                'respond'=> 200,
                'data'=> $produk
            ]);
        }
        return colllect([
            'respond' => 500,
            'message' => "Produk Tidak ditemukan"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        if($produk) {
            $produk->delete();
            return collect([
                'status' => 200,
                'data' => "Produk Berhasil dihapus"
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk Tidak Ditemukan"
        ]);
    }
}
