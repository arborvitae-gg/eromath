<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view("auth.register");
    }
    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            "name" => ["required", "string", "max:255"],
            "email" => ["required", "email", "unique:users"],
            "password" => ["required", "string", "min:8", "confirmed"],
        ]);

        $user = User::create($validated);
        Auth::login($user);

        return redirect()->route("show.home");
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required", "string"],
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route("show.home");
        }

        throw ValidationException::withMessages([
            'credentials' => 'Incorrect email or password. Please try again.'
        ]);

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("show.login");
    }

}
