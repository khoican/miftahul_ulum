<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login() {
        if(Auth::check()) {
            return redirect('dashboard');
        }

        return view('auth.login');
    }

    public function proses_login(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('name', 'password');

        if(Auth::attempt($credential)) {
            return redirect('dashboard');
        }

        return redirect('auth/login')->withInput()->withErrors(['login-gagal'=>'Username atau Password salah!']);
    }

    public function change_password() {
        return view('auth.changePassword');
    }

    public function proses_change_password(Request $request) {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
        ]);

        $old_password = Hash::check($request->old_password, Auth::user()->password);

        if($old_password) {
            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);

            return redirect()->back()->with('message', 'Password Berhasil Diubah');
        }

        return redirect()->back()->with('error', 'Gagal Ganti Password');
    }

    public function logout(Request $request) {
        $request->session()->flush();

        Auth::logout();
        return redirect('/auth/login');
    }
}
