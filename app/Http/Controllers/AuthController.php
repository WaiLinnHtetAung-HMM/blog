<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {
        $formData = request()->validate([
            'name' => 'required|min:3',
            'username' => ['required', Rule::unique('users', 'username')],
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => 'required',
        ]);

        $user = User::create($formData);

        auth()->login($user);

        return redirect('/')->with('status', 'Your registration is successful. Welcome '.$user->name);
    }

    public function logout() {
        auth()->logout();

        return redirect('/')->with('status', 'Good Bye');
    }
}
