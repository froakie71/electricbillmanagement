<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(): View
    {
        return view('client.loginpages.login');
    }
    public function register(): View
    {
        return view('auth.register');
    }
    public function postLogin(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required'],
            'password' => 'required',
        ]);

       $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            return redirect()->intended('mainpage')->with('message','You have Successfully loggedin');
        }
        return redirect('login')->with('message','Oppes! You have entered invalid credentials');
    }
    
    public function postRegistration(Request $request): RedirectResponse
    {
        $admin = 'admin';
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        
        // $check = $this->create($data);
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_type' => 'Admin'
        ]);

        return redirect()->intended('mainpage')->with('message','Great! You have Successfully loggedin');
    }
    public function dashboard(): View
    {
        if(Auth::check()){
            return view('pages.dashboard');
        }

        return redirect("login")->with('message','Opps! You do not have access');
    }
    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
}