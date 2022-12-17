<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index(){
        return view('login.index',[
            'title' => 'login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
        
        // dd('berhasil login');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        
        return back()->with('loginError','login failed!');

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
       
        Auth::logout();
 
        // di invalidate sesionnya
        $request->session()->invalidate();
     
        // bikin baru token agar tidak dibajak
        $request->session()->regenerateToken();
     
        //redirect
        return redirect('/');
    }

}
