<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller {
    function login(){
        return view('login');
    } 
    function loginProcess(){
        if(Auth::attempt(['email'=> request('email'),'password'=> request('password')])){
            return redirect('beranda')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal,silahkan cek email dan password anda');
        }
       
        //menggunakan leveling
        /*if(Auth::attempt(['email'=> request('email'),'password'=> request('password')])){
            $user = Auth::user();
            //if($user->level == 1) return redirect('home/admin')->with('success', 'Login Berhasil');
           // if($user->level == 0) return redirect('home/pengguna')->with('success', 'Login Berhasil');
            
        }else{
            return back()->with('danger', 'Login Gagal,silahkan cek email dan password anda');
        }*/
        //menggunakan multi table auth
        //digunakan saat user memeliki tujuan atau misi yang berbeda.
        //contohnya:
        //pembeli dan penjual atau mahasiswa dan pegawai
        /*if(request('login_as')== 1){
            if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])){
                return redirect('home/pembeli')->with('success', 'Login Berhasil');
            }else {
                return back()->with('danger', 'Login Gagal,silahkan cek email dan password anda');
            }
    } else {
         if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])){
                return redirect('home/penjual')->with('success', 'Login Berhasil');
            }else {
                return back()->with('danger', 'Login Gagal,silahkan cek email dan password anda');
            }
    }*/
}
    function logout(){
        Auth::logout();
        return redirect('login');
    }
     function showRegistration(){
        return view('register');

    }
    function registerProcess(){
        $user = new User;
        $user->username = request('username');
        $user->email = request('email');
        $user->nama = request('nama');
        $user->password = bcrypt(request('password'));
        $user->save();
        
       return redirect('loginp3')->with('success','Data Berhasil Ditambahkan');
    }

     function showForgot(){
        return view('forgot');
    }
}