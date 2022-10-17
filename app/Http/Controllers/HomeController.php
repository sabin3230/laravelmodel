<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    return view('layout.homepage');
   }

     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
  
        Post::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us']);
    }

   public function list(){
        $data  = Post::with('category')->get();
        return view('layout.homepage', ['data'=>$data]);
    }
}
