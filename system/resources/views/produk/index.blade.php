@inject('timeService' , 'App\Services\TimeServices')
@extends('template.base')
@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                    <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                              Jam : {{ $timeService->showTimeNow() }}

                        </div>                      
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/produk/filter') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                             <div class="form-group">
                                <label for="" class="control-label"> Nama </label>
                                <input type="text" name="nama" class="form-control" value="{{ $nama ?? "" }}">
                             </div>
                            </div>
                            <div class="col-md-3">                               
                            <div class="form-group">
                                <label for="" class="control-label"> Stok </label>
                                <input type="text" name="stok" class="form-control" value="{{ $stok ?? "" }}">
                            </div>
                            </div>                            
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label"> Harga Min </label>
                                    <input type="text" name="harga_min" class="form-control" value="{{ $harga_min ?? "" }}">
                                </div>
                             </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label"> Harga Max </label>
                                    <input type="text" name="harga_max" class="form-control" value="{{ $harga_max ?? "" }}">
                                </div>
                             </div>
                        </div>
                         <button class="btn btn-dark float-right"><i class="fa fa-search"> Cari </i></button>
                        </form>
                    </div>
                <div class="card">
                    <div class="card-header">
                        Data Produk
                        <a href="{{ url("admin/produk/create") }}" class="btn btn-dark float-right"><i class="fa fa-plus"> Tambah Data</i></a>
                    </div>
                    <div class="card-body">
                         <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                                   @foreach($list_produk->sortBy('nama') as $produk)
                                <tr>
                                   <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('admin/produk', $produk->id) }}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{ url('admin/produk', $produk->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>  
                                              @include('template.utils.delete', ['url' => url('admin/produk', $produk->id)])                             
                                        </div>
                                    </td>
                                   <td>{{ $produk->nama }}</td>
                                   <td>{{ ($produk->harga) }} </td>
                                   <td>{{ $produk->stok }}</td>
                                 </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection