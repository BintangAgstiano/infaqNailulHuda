<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function auth(){
        $user = User::get();
        return view('auth.auth',compact('user'));
    }
    public function authProses(){
        $validator = Validator::make(request()->all(), [
          
            'email' => 'required',
            'password' => 'required'
        ], [
        
            'email.required' => 'Email wajib di isi',
            'password.required' => 'Password wajib di isi'
        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        }
        if ($validator->passes()) {
            if (Auth::attempt([
                
                'email' => request()->input('email'),
                'password' => request()->input('password'),
            ])) {
                
                request()->session()->regenerate();
                return redirect()->intended('/');
            }
        }
        return back()->with('error','Gagal login! Cek email, dan password anda');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
      return redirect('login');
    }
}
