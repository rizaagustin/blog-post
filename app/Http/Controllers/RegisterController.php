<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'register',
            'active' => 'login'
        ]);
    }

    public function store(Request $request){
        //    return request()->all();        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:4|max:255'
        ]);

        // 1. cara pertama
        // $validatedData['password'] = bcrypt($validatedData['password']);
        // 2. cara kedua
        // keduanya sama2 pakai bcrypt
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        // $request->session()->flash('success', 'Registration successfull! Please Login');
        return redirect('login')->with('success', 'Registration successfull! Please Login');

    }
        // dd('berhasil');
}
