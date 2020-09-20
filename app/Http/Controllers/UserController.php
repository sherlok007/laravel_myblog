<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // First function to be called on page load
    public function index()
    {
        return view('home');
    }
}
