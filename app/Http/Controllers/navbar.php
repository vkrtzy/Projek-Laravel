<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navbar extends Controller
{
    public function showNavbar()
    {
        return view('navbar'); // Sesuaikan dengan nama view yang Anda gunakan
    }
}
