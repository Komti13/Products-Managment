<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function Index()
    {
        return view('home.userpage');
    }
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('error', 'User logout Successfully');
    }
}
