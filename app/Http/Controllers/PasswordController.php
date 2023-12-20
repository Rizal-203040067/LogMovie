<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return view('password.update');
    }

public function update(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = auth()->user();

        // Periksa kata sandi lama
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return back()->with('passwordError', 'Incorrect current password.');
        }

        // Update kata sandi baru
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('/movies')->with('passwordSuccess', 'Password updated successfully.');
    }
}
