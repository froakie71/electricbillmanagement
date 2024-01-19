<?php

namespace App\Http\Controllers\Auth;

use App\Models\subsrcibe_user;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class AuthControllerUser extends Controller
{
    // public function index_user(Request $request)
    // {
    //     $request->validate([
    //         'email' => ['required'],
    //         'password' => 'required',
    //     ]);
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         # code...
    //         return redirect()->intended('subscribeuserpage')->with('message', 'You have Successfully loggedin');
    //     }
    //     return redirect('loginuser')->with('message', 'Oppes! You have entered invalid credentials');
    // }
    public function index_user(Request $request): View
    {
        $userExist = false;

        $credentials = $request->all();
        $data = subsrcibe_user::get();
       

        foreach ($data as $key => $value) {
            if(($value->AccountNo) == $credentials['AccountNo']) {
                $userExist = true;
                break;
               // return redirect()->intended('subscribeuserpage')->with('message', 'You have Successfully loggedin');
            } else {
                $userExist = false;
                //return redirect('loginuser')->with('message', 'Oppes! You have entered invalid credentials');
            }
        }
        if($userExist == true) {
            
            return view('client.mainpageuser.mainpageuser',compact('credentials'))->with('message', 'You have Successfully loggedin');
        } else {
            return redirect('loginuser')->with('message', 'Oppes! You have entered invalid credentials');
        }
    }
}
