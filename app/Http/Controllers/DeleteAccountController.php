<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteAccountController extends Controller
{
    public function index()
    {
        return view('account.delete');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $user = Auth::user();

        // Periksa kata sandi
        if (!Hash::check($request->input('password'), $user->password)) {
            return back()->with('passwordError', 'Incorrect password.');
        }

        // Hapus pengguna
            $user->delete();

        return redirect('/')->with('accountDeleted', 'Your account has been deleted.');
    }
}
