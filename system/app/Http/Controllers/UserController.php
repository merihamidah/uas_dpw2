<?php
namespace App\Http\Controllers;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller{
    function index(){
        $data['list_user'] = User::withCount('produk')->get();
        return view('user.index', $data);
    }
     function create(){
        return view('user.create');
    }
     function store(UserStoreRequest $request){
         $user = new User;
         $user->nama = request('nama');
         $user->username = request('username');
         $user->email = request('email');
         $user->password = bcrypt(request('password'));        
         $user->save();
         
        $userDetail = new UserDetail;
        $userDetail->id_user = $user->id;
        $userDetail->no_handphone = request('no_handphone');
        $userDetail->save();
        

         return redirect('admin/user')->with('success','Data Berhasil Ditambahkan');
    
    }    
    function show(User $user){
         $loggedUser = request()->user();
        if($loggedUser->id != $user->id) return abort(403);

         $data['user'] = $user;
        return view('user.show',$data);
    }
    function edit(User $user){
         $data['user'] = $user;
        return view('user.edit',$data);
    }
    function update(User $user){
         $user->nama = request('nama');
         $user->username = request('username');
         $user->email = request('email');
         if(request('password')) $user->password = bcrypt(request('password'));
         $user->save();

         return redirect('admin/user')->with('success','Data Berhasil Diedit');
    }
    function destroy(User $user){
        $user->handleDelete();
        $user->delete();
        return redirect('admin/user')->with('danger', 'Data berhasil dihapus');
    }
    
     function filter(){
            $nama = request('nama');
            $username = request('username');
            $email = request('email');
            $data['list_user'] = User::where('nama','like', "%$nama%")->where('username', 'like', "%$username%")->where('email', 'like', "%$email%")->get();
            $data['nama'] = $nama;
            $data['username'] = $username;
            $data['email'] = $email;

        return view('user.index', $data);
    }
   
}