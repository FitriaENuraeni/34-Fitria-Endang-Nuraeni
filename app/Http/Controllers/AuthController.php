<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function loginPage(){
        return view('auth.login');
    }

    public function registerPage(){
        return view('auth.register');
    }

    public function login(Request $request){
        $user= User::where("email",$request->email)->first();
        if($user == null){
            return redirect()->back()->with("error","User tidak ditemukan");
        }
        if(!Hash::check($request->password,$user->password)){
            return redirect()->back()->with("error","Password Salah!");
        }

        $request->session()->regenerate();
        $request->session()->put('isLogged', true);
        $request->session()->put("userId", $user->id);
        $request->session()->put("userName", $user->name);
        if($user->role_id == 1){$request->session()->put("role", "admin");}
        else{$request->session()->put("role", "user");}

        return redirect("/");

    }

    public function register(Request $request){

        $validated = $request->validate([
    		'name' => 'required',
            'email' => 'required|unique:Users',
            'password' => 'required',
    	]);

        User::create([
    		'name' => $request->name,
    		'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
    	]);

        return redirect()-> route("auth.login");
    }

    public function logout(Request $request){
        session()->flush();

        return redirect("/");
    }
}