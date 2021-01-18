@extends('templateclient.base3')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                     <h3>{{ $produk->nama }}</h3>
                    </div>
                    <div class="card-body">
                     <p > 
                         Rp. {{ number_format($produk->harga) }} |
                         Stock : {{ $produk->stok }} |
                         Berat : {{ $produk->berat }} gr |                         
                         Seller : {{ $produk->seller->username }}
                     </p>                     
                     <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ url('public', $produk->foto) }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                     <p >
                       {!! nl2br($produk->deskripsi) !!}
                     </p>
                     <br>
                       <a href="{{ url("user/client/create") }}" class="btn btn-primary float-right"><i class="fa fa-plus"> Keranjang </i></a>
   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection