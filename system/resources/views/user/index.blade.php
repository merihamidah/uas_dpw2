@extends('template.base')
@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                    <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                        </div>                      
                        Filter
                    </div>
                    <div class="card-body">
                       <form action="{{ url('admin/user/filter') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="control-label"> Username </label>
                                <input type="text" name="username" class="form-control" value="{{ $username ?? "" }}">
                            </div>
                            </div>   
                            <div class="col-md-4">                               
                            <div class="form-group">                              
                                    <label for="" class="control-label"> Nama </label>
                                    <input type="text" name="nama" class="form-control" value="{{ $nama ?? "" }}">
                            </div>
                            </div>                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label"> Email </label>
                                    <input type="text" name="email" class="form-control" value="{{ $email ?? "" }}">
                                </div>
                             </div>
                        </div>
                         <button class="btn btn-dark float-right"><i class="fa fa-search"> Cari </i></button>
                        </form>
                    </div>
                <div class="card">
                    <div class="card-header">
                        Data User
                        <a href="{{ url("admin/user/create") }}" class="btn btn-dark float-right"><i class="fa fa-plus"> Tambah Data</i></a>
                    </div>
                    <div class="card-body">
                         <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Produk</th>
                                <th>Email</th>

                            </thead>
                            <tbody>
                                   @foreach($list_user as $user)
                                <tr>
                                   <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('admin/user', $user->id) }}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{ url('admin/user', $user->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>  
                                              @include('template.utils.delete', ['url' => url('admin/user', $user->id)])                             
                                    
                                        </div>
                                    </td>
                                   <td>{{ $user->nama }}</td>
                                   <td>{{ ($user->username) }} </td>
                                   <td>{{ $user->produk_count }}</td>
                                   <td>{{ $user->email }}</td>
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