<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function index()
    {

    }

    public function register(Request $request)
    {
        $errorMsg = [
            'email.unique' => 'E-Mail bereits vergeben!'
        ];
        $request->validate([
            'firstname' => 'string|required|max:255',
            'lastname' => 'string|required|max:255',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])/',
        ], $errorMsg);

        $lastname = ucfirst($request->lastname);
        $username = strtoupper(substr($request->firstname, 0, 1)) . $lastname;

        $user = new User([
            'name' => $request->firstname . ' ' . $request->lastname,
            'username' => $username,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
        $user->save();

        return $user;
    }

    public function login(Request $request)
    {
        $error = "Logindaten Inkorrekt!";
        if(filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email', $request->username)->first();
        } else {
            $user = User::where('username', $request->username)->first();
        }

        if($user){
            if (Hash::check($request->password, $user->password)){

                Auth::login($user);
                return to_route('dashboard');

            } else {
                return back()->withErrors($error);
            }
        } else {
            return back()->withErrors($error);
        }
    }
}
