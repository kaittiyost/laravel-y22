<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request){
        if($request->keyword){
            $users = User::where('username','LIKE','%'.$request->keyword.'%')
            ->orderBy('id','asc')
            ->get();

        }else{
            $users = User::all();
        }
        return view('user',compact('users'));
    }

    public function loginForm(){
        //session()->forget('user');
        return view('login');
    }

    public function logout(){
        session()->forget('user');
        return view('login');
    }

    public function checkUser(Request $request){
        //dd($request);
        $user = User::where('username' , $request->username)
                    ->where('password' , $request->password)
                    ->first();
        if($user){
            session()->put('user',$user);
            return redirect('/');
        }else{
            return redirect('/login')->withErrors(['message'=>'Username and Password Incorrect!']);
        }
    }
}
