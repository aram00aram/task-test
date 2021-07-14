<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware("guest");
//    }

    public function login()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.register');
    }

    public function register_user(RegisterRequest $request)
    {
        $data = $request->all();
        $user_ref = 0;
        if ($data['email_ref']){
            $user_ref = User::where('email',$data['email_ref'])->first()->id;
        }
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'parent_id' => $user_ref,
            'company' => $data['company'],
            'password' => Hash::make($data['password'])
        ]);
        return redirect("dashboard")->with('success','Successfully logged-in!');
    }

    public function login_user(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withSuccess('You have entered invalid credentials');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect('login')->withSuccess('Logged out.');
    }
}
