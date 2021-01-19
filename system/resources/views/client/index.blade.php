@extends('templateclient.base2')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3 mt-5">
            <div class="card">
                        <div class="card-header">
                            Filter
                        </div>
                        <div class="card-body">
                            <form action="{{ url('user/client/filter') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                    <label for="" class="control-label"> Nama </label>
                                    <input type="text" name="nama" class="form-control" value="{{ $nama ?? "" }}">
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">                               
                                <div class="form-group">
                                    <label for="" class="control-label"> Stok </label>
                                    <input type="text" name="stok" class="form-control" value="{{ $stok ?? "" }}">
                                </div>
                                </div> 
                            </div>   
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="" class="control-label"> Harga Min </label>
                                        <input type="text" name="harga_min" class="form-control" value="{{ $harga_min ?? "" }}">
                                    </div>
                                </div>
                                </div>                        
                                <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="" class="control-label"> Harga Max </label>
                                        <input type="text" name="harga_max" class="form-control" value="{{ $harga_max ?? "" }}">
                                    </div>
                                </div>
                                </div>
                                <button class="btn btn-dark float-right"><i class="fa fa-search"> Cari </i></button>
                            </form>
                        </div>
                    </div>
                </div>
        <div class="col-md-9">
                  <div class="container">
                    <div class="row">
                        @foreach($list_produk->sortBy('nama') as $produk)                        
                        <div class="col-md-4 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <img src="{{ url('public', $produk->foto) }}" alt="" class="img-fluid">
                                  </div>
                            <div class="card-body">
                                <a href="{{ url('user/client', $produk->id) }}"> {{ $produk->nama }}</a>
                                 <br>
                                Rp. {{ number_format($produk->harga) }} | stok : {{ $produk->stok }}
                            </div>
                        </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-9 ">
                            <div class="d-flex justify-content-center">
                            {!! $list_produk->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
             </div>
       
    </div>
</div>

           
       

@endsection