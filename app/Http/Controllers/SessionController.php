<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
			'email'    => 'required|email',
			'password' => 'required|alphaNum|min:3'
        );
        
        $remember = $request->remember;
        if ($remember === 'on') {
            $remember = 1;
        } else {
            $remember = 0;
        }

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect()->route('admindashboard');
        } else {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }
    }

    /**
     * Destroy session
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
