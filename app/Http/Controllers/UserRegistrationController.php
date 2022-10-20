<?php

namespace App\Http\Controllers;

use App\Models\UserRegistration;

use Illuminate\Http\Request;

use Auth;

class UserRegistrationController extends Controller
{
     public function index()
    {
        return view('layout');
    } 

          
     public function register(Request $request)
    {  
        $request->validate([
            'firstname' =>'required',
            'lastname' =>'required',
            'address' =>'required',
            'email' =>'required|email|unique:users',
            'phone' =>'required',
            'dob' =>'required',
             'password' =>'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->createUser($data);
        return redirect("users")->withSuccess('Successfully logged-in!');
    }


    public function createUser(array $data)
    {
      return UserRegistration::create([
        'firstname' => $data['firstname'],
        'lastname' => $data['lastname'],
        'address' => $data['address'],
        'email' => $data['email'],
        'phone'=> $data['phone'],
        'dob' =>$data['dob'],
        'password' => $data['password']
      ]);
    }   
    
    public function show(){
        $users = UserRegistration:: get();

        return view("users", ['users'=>$users]);
    }

}

