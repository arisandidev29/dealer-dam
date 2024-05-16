<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Tests\TestCase;

class policyTest extends TestCase
{
   public function testPolicy()
   {
     $user = User::where("name","arisandi kader")->first();

     Auth::login($user);

     $this->assertTrue(Gate::allows("viewDashboard",$user));
   }
}
