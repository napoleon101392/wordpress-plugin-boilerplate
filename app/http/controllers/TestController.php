<?php

namespace App\Http\Controllers;

use Models\User;

class TestController
{
    public function create()
    {
        $users = User::all();

        return view('index', compact('users'));
    }
}
