<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

use function Laravel\Prompts\password;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login", [
            "title" => "Login to account"
        ]);
    }

    public function doLogin(Request $request)
    {

        $validated = $request->validate([
            "name" => ["required"],
            "password" => ["required"]
        ]);

        $remember = $request->input("request");

       if(Auth::attempt($validated,$remember)) {
            $request->session()->regenerate();

            return redirect(route("admin.dashboard"));
       } 

       return back()->withErrors([
        "errors" => "username atau password Salah! coba Lagi"
       ])->onlyInput("name");





    }

    public function register() {
        return view("auth.register", [
            "title" => "Register to Account"
        ]);
    }

    public function doRegister(Request $request)
    {

        $validate = $request->validate([
            "name" => ["required"],
            "email" => ["required","email:rfc",'unique:App\Models\User,email'],
            "password" => [Password::min(8)->letters()->numbers()->symbols()],
            "password_confirm" => ["required","same:password"],
            "profile_pic" => ['required',File::image()->types(['jpg','png','jpeg'])->min("1kb")->max("2mb")]
        ]);

       $user = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => Hash::make($request->input("password")),

        ]);

       $user->img = $request->file("profile_pic")->store("user");
       $user->save();


       echo "registrasi success";








    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect(route("home"));
    }
}
