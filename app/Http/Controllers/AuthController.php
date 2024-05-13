<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswardMail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function createUser(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $user =  new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(40);
        $user->save();

        Mail::to($user->email)->send(new RegisterMail($user));

        return redirect('login')->with('success', 'Account Registered Successfully, Check email to verify');

    }

    public function verifyUser($token){
        $user = User::where('remember_token', '=', $token) -> first();
        if (!empty($user)) {
            $user->email_verified_at =  date('Y-m-d H:i:s');
            $user->remember_token = Str::random(40);
            $user->save();
        } else {
            abort(404);
        }
    }

    public function authLogin(Request $request) {
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['email' => $request->useremail, 'password' => $request->password],$remember)) {
            if(!empty(Auth::user()->email_verified_at)) {
                return redirect('panel/dashboard');
            } else {
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::getSingle($user_id);
                $user->remember_token = Str::random(40);
                $user->save();

                // $user = User::getSingle(Auth::user()->id);
                // $user->remember_token = Str::random(40);
                // $user->save();
                // Auth::logout();

                return redirect('login')->with('error', "First verify your email address");
                //Try your luck with new password
            }

        } else {
            return redirect()->back()->with('error', 'Please enter correct email and password');
        }
    }

    public function forgotPassword(Request $request) {
        return view('auth.forgotpassword');
    }

    public function resetPassword(Request $request) {
        $user = User::where('email', '=', $request->useremail)->first();
        if(!empty($user)) {
            $user->remember_token = Str::random(40);
            $user->save();
            Mail::to($user->email)->send(new ForgotPasswardMail($user));
            return redirect()->back()->with('success', "Please check your email");
        } else {
            return redirect()->back()->with('error', "Email not found in the system.");
        }
    }

    public function reset(Request $request) {
        $user = User::where('email', '=', $request->useremail)->first();
        if(!empty($user)) {
            $data['user'] = $user;

            return view('auth.forgotpassword');
        } else {
            abort(404);
        }
    }

    public function resetPost($token, Request $request) {
        $user = User::where('email', '=', $request->useremail)->first();
        if(!empty($user)) {
            $data['user'] = $user;

            return view('auth.forgotpassword');
        } else {
            abort(404);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
