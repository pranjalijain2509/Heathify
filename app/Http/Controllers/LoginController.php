<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  
    public function index()
    {
        return view('auth.login');
    }
    public function storeData(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($request->only('email', 'password'), $request->remember)) {
            // $role = auth()->user()->role;

            return redirect()->route('dashboard');
        } else {
            return back()->with('status', 'Invalid username or password');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('login');
    }
}
