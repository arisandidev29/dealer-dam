<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        if(Gate::allows("viewDashboard")){
            return view("admin.dashboard");
        }else {
            return redirect(route("product"));
        }
    }
}
