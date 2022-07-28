<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;
use Hash;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
        return view('home');
    }


    public function login()
    {
        return view('auth.login');
    }

       public function loginStore(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('estimate-desktop')
                        ->with('success','You have Successfully logged in');
        }
  
        return redirect("login")->with('error','Sorry! You have entered invalid credentials');
    }


      public function logout(Request $request) 
    {
 
      Auth::logout();
      return redirect('/home');
    }


      public function contact()
    {
        return view('contact');
    }
    
}
