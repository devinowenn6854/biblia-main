<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register',
            // 'active' => 'login'
        ]);
    }

    public function store(Request $request)
    {
        $validateData =  $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'lahir' => 'required',
        ]);

        User::create($validateData);
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
