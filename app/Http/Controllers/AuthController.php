<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthFormRequest;
use App\Http\Requests\SignUpFormRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        // User::create([
        //     'name' => 'Pathé PK',
        //     'username' => 'pathepk4',
        //     'email' => 'pk4diallo@gmail.com' ,
        //     'role' => 'admin',
        //     'password' => Hash::make('pathepk'),
        // ]);

        return view('auth.login');
    }

    public function doLogin(AuthFormRequest $request)
    {
        $credentials = $request->validated();

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.post.index'));
        }

        return to_route('auth.login')->withErrors([
            'username' => 'Identifiant incorrect'
        ])->onlyInput('username');
    }

    public function signup()
    {
        return view('auth.signup', ['user' => new Post()]);
    }

    public function store(SignUpFormRequest $request)
    {
        $user = User::create($request->validated());
        
        return redirect()->route('auth.login')->with('success', 'Inscription reussi avec succès');
    }

    public function edit()
    {
        
    }

    public function update()
    {

    }

    public function logout()
    {
        Auth::logout();
        return to_route('auth.login');
    }
}
