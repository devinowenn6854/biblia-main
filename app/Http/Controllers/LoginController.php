<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login',
            // 'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // dd($request->all());
        $user = User::where('nama', $request->input('nama'))->get();
        if($user[0]->password == $request->input('password'))
        {
            $request->session()->put('user', $user[0]->name);
            return redirect('/home');
        }
        if($user[0]->password != $request->input('password'))
        {
            $request->session()->put('user', $user[0]->name);
            return view('login');
        }
    }


    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
