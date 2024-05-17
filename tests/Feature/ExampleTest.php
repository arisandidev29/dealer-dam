<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testHast()
    {
       $hash = '$2y$12$f5d/qFQmbP9yRYrFZHXTauYvhTrwo5co696deOlUoIY51i0ed5ZzG';
        $password = "nandi29@";

        $this->assertTrue(Hash::check($password,$hash));
    }

    public function testLogin()
    {
        $user = User::where("name","arisandi kader")->first();

        dd($user);

        Auth::attempt([
            "name" => $user->name,
            "password" => $user->password
        ]
        );


        $this->assertTrue(Auth::check());
    }


}
