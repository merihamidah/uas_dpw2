<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pembeli;
use App\Models\Penjual;

class AuthController extends Controller {
    function login(){
        return view('login');
    } 
    function loginProcess(){
        if(Auth::attempt(['email'=> request('email'),'password'=> request('password')])){
            $user = Auth::user();
        if($user->level == 1) return redirect('beranda/admin')->with('success', 'Login Berhasil');
        if($user->level == 2) return redirect('beranda/penjual')->with('success', 'Login Berhasil');
        if($user->level == 3) return redirect('templateclient')->with('success', 'Login Berhasil');
            
        }else{
            return back()->with('danger', 'Login Gagal,silahkan cek email dan password anda');
        }
        //menggunakan multi table auth
        //digunakan saat user memeliki tujuan atau misi yang berbeda.
        //contohnya:
        //pembeli dan penjual atau mahasiswa dan pegawai
       /* if(request('login_as')== 1){
            if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])){
                return redirect('templateclient')->with('success', 'Login Berhasil');
            }else {
                return back()->with('danger', 'Login Gagal,silahkan cek email dan password anda');
            }
         } else  {
             if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])){
                return redirect('beranda/penjual')->with('success', 'Login Berhasil');
            }else {
                return back()->with('danger', 'Login Gagal,silahkan cek email dan password anda');
            }
        }*/
    }
    function logout(){
        Auth::logout();
        Auth::guard('pembeli')->logout();
        Auth::guard('penjual')->logout();

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