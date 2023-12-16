<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegister extends Controller
{
    public function login() {
        return view('auth.login');
        }
    public function register() {
        return view('auth.register');
        }
    public function userHomer() {
        return view('auth.home');
        }
    public function adminHome() {
        return view('auth.home');
        }
            
}
