<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
    
        $user = User::all();

        return view('usersAdmin.index',compact('user'));
    }

    public function create(){
        return view('usersAdmin.create');
    }

    public function store(Request $request){
        $user = new User();
        $user -> setName($request -> name);
        $user -> setEmail($request -> email);
        $user -> setAddress($request -> address);
        $user -> password = $request -> password;
        $user -> setRole($request -> role);

        $user->save();

        return redirect()->route('usersAdmin.index');
    }

    public function edit($id){
        $user = User::find($id);
        return view('usersAdmin.edit',compact('user'));
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('usersAdmin.index');
    }

    public function destroy($id){
        $user = User::find($id);
        $user -> delete();
        return redirect()->route('usersAdmin.index');
    }
}
