<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/admin/home');
        }
        return redirect()->back()->with('status', "Invalid credentials");
    }

    public function studentLogin(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('student')->attempt(['student_username' => $request->username, 'password' => $request->password])) {

            return redirect()->intended('/quiz');
        }
        return redirect()->back()->with('status', "Invalid credentials");
    }

    public function counselorLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('counselor')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/counselor/home');
        }
        return back()->withInput($request->only('email'));
    }

    public function Adminlogout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
