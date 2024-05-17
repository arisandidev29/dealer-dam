<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {

        if(Gate::allows("viewDashboard")){
        $product =  Product::all()->count();
        $user = User::all()->count();
            return view("admin.dashboard",[
                "users" => $user,
                "products" => $product
            ]);
        }else {
            return redirect(route("product"));
        }
    }

    public function users()
    {
        $users = User::whereNot("id",auth()->user()->id)->get();
        return view("admin.users",[
            "users" => $users
        ]);
        
    }

    public function viewUser(string $id)
    {
        $user = User::find($id);
        return view("admin.user", [
            "title" => "view user",
            "user" => $user
        ]);
    }

    public function deleteUser(User $user, string $id)
    {
        Gate::authorize("viewManagementUser");
        User::find($id)->delete();

        return redirect(route("admin.users"));
    }

    public function updateUserRole(Request $request, string $id)
    {
         $validate = $request->validate([
            "type" => "required|in:admin,editor,guest"
        ]);

         $user = User::find($id);
         // dd($user);
         $user->role = $request->input("type");
         $user->save();

         Session::flash("success","succes change role");

         return back();
    }
}

