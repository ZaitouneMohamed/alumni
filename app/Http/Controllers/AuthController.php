<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request,[
            "email" => "required",
            "password" => "required"
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/admin');
        }else {
            return redirect()->back()->with([
                "error" => "somethings went wrong"
            ]);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
