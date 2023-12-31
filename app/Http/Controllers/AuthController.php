<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    
   

    public function teacherID(){
        return view('admin.auth.teacherID');
    }
    public function studentID(){
        return view('admin.auth.studentID');
    }
    public function registerView(){
        return view('admin.auth.register');
    }
    
    public function registerAuth(request $request){
        $request -> validate([
            'name' => 'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:6'
        ]);

        
        $data = $request->all();
        //$check = $this->create($data);
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect()->intended('/dashboard')->with('message','Great! You have Successfully loggedin');

        // $user = new User();
        // $user -> name = $request->name;
        // $user -> email = $request->email;
        // $user -> password = Hash::make($request->password);

        // $user -> save();
        
        // return back()-> with('success', 'Register Successfully');
        
    }
    
    public function loginView(){
        return view('admin.auth.login');
    }
    public function loginAuth(request $request){
        $request -> validate([
            'email'=>'required',
            'password' => 'required'
        ]);

       $credentials = [ 
            'email' => $request->email,
            'password' => $request->password,
       ];

       if(Auth::attempt($credentials)){
        return redirect('/dashboard') -> with('success', 'Login Sucessful');
       }
       return back()-> with('error','bogoa sa giatay kalimot sa password');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('showLandingPage');
    }
}
