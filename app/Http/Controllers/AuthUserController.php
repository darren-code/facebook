<?php

namespace App\Http\Controllers;

use App\Http\Resources\User;
use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    public function show()
    {
        return new User(auth()->user());
    }
}
