<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function success()
    {
        return view("success");
    }

    public function signup()
    {
        return view("register");
    }

    public function showLogin()
    {
        return view("login");
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => 'required|string',
            "email" => 'required|email|string|unique:users,email',
            'password' => 'required_with:password_confirmation|same:password_confirmation|min:4',
            'password_confirmation' => 'min:4'
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return redirect()->route('success');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|string|exists:users,email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($credentials)) {
            return redirect('login')->withErrors($credentials)->withInput();
        }

        $user = Auth::user();
        return redirect()->route("home", ["user" => $user]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
