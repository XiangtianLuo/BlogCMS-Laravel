<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index')->with('users', User::all());
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'about'=> $request->about
        ]);

        return redirect()->back();
    }

    public function makeAdmin(User $user){
        $user->role = 'admin';

        $user->save();

        return redirect(route('users.index'));
    }

    public function edit()
    {
        return view('users.edit')->with('user',auth()->user());
    }
}