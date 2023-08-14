<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function show(){
        if(Auth::check())
        return redirect()->route($this->checkRole());
        else
        return view('website.auth.login');
    }
    public function checkRole(){
        if(Auth::user()->is_active ==1){
           return route('home');
        }else{
            return route('website.login');
        }
    }
    public function login(Request $request){
        Validator::validate($request->all(),[
            'email'=>['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],

        ],[
            'email.required'=>'The email field is required',
            'email.max'=>'This field is more than 255 letters',


        ]);
        $remember_me = $request->has('remember_me') ? true : false;
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],$remember_me)){
            if(Auth::user()->is_active==1){
                return redirect()->route('home');
            }else{
                return redirect()->route('website.login');
            }
            
        }else{
            return redirect()->route('website.login')->with(['message'=>'Incorrect email or password']);
        }

    }
    public function createUser(){
        return view('website.auth.register');
    }
    public function register(Request $request){
        Validator::validate($request->all(),[
            'name'=>['required', 'string', 'max:255',],
            'email'=>['required', 'string', 'email', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'confirm_password'=>['same:password'],

        ],[
            'name'=>'the name field is required',
            'email.required'=>'The email field is required',
            'email.max'=>'This field is more than 255 letters',
            'email.unique'=>'there is email in the table',
            'email.email'=>'Incorrect email format',
            'password.required'=>'The password field is required',
            'confirm_password.same'=>'password does not match' ,

        ]);

        $u= new User();
        $u->name = $request->name;
        $u->email = $request->email;
        $u->password = Hash::make($request->password);
        $u->remember_token = Str::random(60);

       if($u->save()){
        return redirect()->route('website.login')->with(['success'=>'User created successful']);
       }else{
        return back()->with(['error'=>'can not create user']);
       }

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('website.login');
    }

}
