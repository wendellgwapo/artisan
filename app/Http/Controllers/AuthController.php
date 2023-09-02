<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // app/Http/Controllers/AuthController.php

    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Logic for user login
    }

    public function registerForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Logic for user registration
    }

    public function logout()
    {
        // Logic for user logout
    }

}
