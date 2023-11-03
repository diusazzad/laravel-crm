<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginform(){
        return view('login');
    }
    public function login(Request $request)
    {
        // Validate the login request.
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Attempt to authenticate the user.
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // The user is an admin.
            return redirect()->route('admin.primary');
        } elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // The user is a regular user.
            return redirect()->route('user.dashboard');
        } else {
            // The user authentication failed.
            return redirect()->route('login.form')->withErrors([
                'email' => 'Invalid email or password.',
            ]);
        }
    }


}
