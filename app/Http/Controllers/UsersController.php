<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show()
    {
        // get data from database
        $users = User::all();
        // show data in table
        // return view('users.index', ['users' => $users]);
        return view('users.index', compact('users'));
    }
}