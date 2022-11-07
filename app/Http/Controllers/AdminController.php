<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('admin.admin_master');
    }

    public function Login(Request $request)
    {
        $check = $request->all();
        if (Auth::attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.dashboard')->with('error', 'Admin login Successfully');
        } else {
            return back()->with('error', 'Invalid email or pasword');
        }
    }
    public function AdminLogout()
    {
        Auth::logout();
        return redirect()->route('login')->with('error', 'Admin logout Successfully');
    }
}
