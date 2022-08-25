<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        //dd($users);

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        //$user = User::where('id', '=', $id)->first();
        if(!$user = User::find($id)) 
            return redirect()->route('users.index');
        
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        //return redirect()->route('users.show', $user->id);
        return redirect()->route('users.index');


        // $user = New User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();
    }
}
