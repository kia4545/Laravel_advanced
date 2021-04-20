<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id','desc')->paginate(9);
        
        return view('welcome', [
            'users' => $user,
            ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        $movies = $user->movies()->orderBy('id','desc')->paginate(9);
        
        $data=[
            'user' => $user,
            'movies' => $movies,
            ];
            
        $data += $this->counts($user);
        
        return view('users.show',$data);
    }
}
