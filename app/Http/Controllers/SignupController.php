<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    
 

    public function signup()
    {
        return view('auth.signup');
    }

    public function storeData(Request $request)
    {


        $this->validate(
            $request,
            [
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|confirmed',
                'fullName' => 'required|max:50',
                'gender' => 'required|max:30',
                'address' => 'required|max:100',
                'city' => 'required|max:50',
            ]
        );


        $userCount = User::count();
        // return dd($userCount);

        $userRole = $userCount ? 'patient' : 'admin';


        User::create([
            'fullName' => $request->fullName,
            'username' => $request->email,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $userRole,
            /** Add condition to check if any user existed before, if not so, create the user as admin */
            'address' => $request->address,
            'gender' => $request->gender,
            'city' => $request->city,
        ]);



        auth()->attempt($request->only('email', 'password'));
        if ($userRole == 'admin') {
            return redirect()->route('dashboard');
        } else if ($userRole == 'doctor') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('dashboard');
        }

        // dd(User::all('*'));
    }
}
