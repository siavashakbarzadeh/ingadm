<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users=User::all();
        return view('Users/users-show',compact('users'));
    }
    public function create()
    {
        return view('Users/users-create');
    }
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

        return redirect('users-show')->with('success', __('User Successfully created!'));

    }
    public function edit(User  $user , $id)
    {
        $user = User::findOrFail($id);

        return view('Users/users-edit', compact('user'));
    }

    public function update(Category $category,Request $request, $id)
    {
        $category=Category::where('id',$id)->firstOrFail();
        $category->update($request->all());
        return redirect('categories-show')->with('success', 'Category  Data is successfully updated');
    }
    public function destroy(User $user,$id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('users-show')->with('success', 'user Data is successfully deleted');
    }
}
