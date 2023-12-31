<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
            
        }
        return back()->with('loginError', 'Login Failed!');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }


    // API GOOGLE
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
{
    $googleUser = Socialite::driver('google')->stateless()->user();

    $user = User::firstOrNew(['email' => $googleUser->email]);

    if (!$user->exists) {
        // Jika pengguna belum terdaftar, daftarkan mereka
        $user->name = $googleUser->name;
        $user->email = $googleUser->email;
        $user->email_verified_at = now();
        $user->password = Hash::make(Str::random(16)); // Gunakan password acak atau metode lain
        $user->save();
    }

    Auth::login($user, true);

    return redirect('/');
    }  
}
