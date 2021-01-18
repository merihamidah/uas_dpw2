@extends('template.base')
@section('content')
    <div class="container">
        <div classs"col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                       Detail Data Produk
                    </div>
                    <div class="card-body">
                     <h3>{{ $produk->nama }}</h3>
                     <hr>
                   @include('produk.show.detail')
                    <p >
                       <img src="{{url("public",$produk->foto)  }}" alt="">
                     </p>
                     
                     <p >
                       {!! nl2br($produk->deskripsi) !!}
                     </p> 
                    
                    
                </div>
            </div>
        </div>
    </div>
@endsection