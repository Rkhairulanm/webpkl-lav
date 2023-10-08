<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    function index()
    {
        return view('user.login', [
            'title' => "Login Section"
        ]);
    }
    function attempt(Request $request)
    {
        Session::flash('email',$request->email);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'Email Required',
            'email.email' =>  'Email Not Valid',
            'password.required' => 'Password Required'
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($login)) {
            return redirect('produksi');
        }else {
            return redirect('/login')->withErrors('Wrong Password or Email');
        }
    }
    function logout(){
        Auth::logout();
        return redirect('/login')->with('success', 'You have Logget Out');
    }
}
