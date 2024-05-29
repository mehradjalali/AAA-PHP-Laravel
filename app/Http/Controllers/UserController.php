<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller {
    public function allUsers() {
        if (Gate::allows('hasPermission', 'allUsers')) {
            $users = User::all();
            return view('users.allusers', compact('users'));
        }
        abort(403);
    }
}