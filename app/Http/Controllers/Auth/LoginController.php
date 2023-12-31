<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('pages.auth.login');
    }

    public function authenticate(Request $request){
        if(Auth::attempt(['email' => $request->uid, 'password' => $request->password])){
            $request->session()->regenerate();

            $user = User::where('email', $request->uid)->first();
            $request->session()->put('user', $user);
        }
        if(Auth::attempt(['nip' => $request->uid, 'password' => $request->password])){
            $request->session()->regenerate();

            $user = User::where('nip', $request->uid)->first();
            $request->session()->put('user', $user);
        }

        return back()->with('error', 'Email/NIP atau Password salah');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
