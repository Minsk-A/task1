<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __invoke()
    {
        return view('admin.auth');
    }
}
