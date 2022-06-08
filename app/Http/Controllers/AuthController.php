<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class AuthController extends Controller
{
    function index()
    {
        return view('pages.login');
    }

    function authorization(Request $request)
    {
        $this->validate($request, [
            'email'     =>  'required | email',
            'password'  =>  'required | alphaNum | min:3'
        ]);

        $userData = [
            'email'     =>  $request->get('email'),
            'password'  =>  $request->get('password')
        ];

        if (Auth::attempt($userData)) {
            return redirect('/');
        } else {
            return back()->with('error', 'Wrong login details');
        }
    }

    function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
