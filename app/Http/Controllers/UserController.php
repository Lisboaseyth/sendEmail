<?php

namespace App\Http\Controllers;

use App\Models\Users;

class UserController extends Controller
{
    public function index() {

        $users = Users::all();

        return view('welcome',
        ['users' => $users]);
    }

    public function createUser(){
        return view('users.register');
    }

    public function loginUser(){
        return view('users.login');
    }
}
