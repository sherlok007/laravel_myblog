<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // First function to be called on page load
    public function index()
    {
        $data = [
            'name' => 'George Clooney',
            'email' => 'clonney@hotstar.com',
            'password' => 'Apple@123',
        ];
        User:: create($data);

        //User::where('id', 4)->delete();

        $users = User::all();
        return $users;
        return view('home');
    }
}
