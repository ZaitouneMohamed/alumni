<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            if (auth()->user()->hasRole("admin")) {
                return redirect()->intended("/admin");
            } else {
                return redirect()->back();
            }
        }else {
            return redirect()->back()->with([
                "error" => "somethings went wrong"
            ]);
        }
    }
    public function register(Request $request)
    {
        $role = $request->role;
        $user = User::create([
            "first_name" => $request->nom,
            "last_name" => $request->prenom,
            "email" => $request->email,
            "phone" => $request->phone,
            "paye"=>$request->paye,
            "password" => $request->password,
        ])->assignRole($role);
        if ($role == "etudiant") {
            $user->update([
                "filliere" =>$request->fillier
            ]);
        } elseif ($role == "encien") {
            $user->update([
                "filliere" =>$request->fillier
            ]);
        }else {
            $user->update([
                "company_name" =>$request->company_name
            ]);
        }
        Auth::login($user);
        return redirect()->back();
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
