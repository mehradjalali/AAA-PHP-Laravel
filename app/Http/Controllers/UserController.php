<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller {
    public function allUsers() {
        $users = User::all();
        return view('users.allusers', compact('users'));
    }
}