<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
       $user = Auth::user()->role;

       if ($user == 0 || $user == 1) {
           return view('user.home');
       }else{
        return view('admin.dashboard');
       }
    }
}
