<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {

//        dd($request->all());

        $user = User::create([
            'name' => $request['name'],
            'eth_address' => $request['eth_address'],
            'email' => $request['email'],
            'password' => $request['password'],
            'gender' => $request['gender'],

        ]);

//        return redirect('users-show')->with('success', __('User Successfully created!'));

    }
}
