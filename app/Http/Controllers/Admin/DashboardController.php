<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adduser;


class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view ('admin.register')->with('users',$users);
    }
    public function registeredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view ('admin.register-edit')->with('users',$users);
    }
    public function registerupdate (Request $request, $id)
    {
        $users =User::find($id);
        $users->name = $request->input('username');
        $users->phone = $request->input('phone');
        $users->email = $request->input('email');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/role-register')->with('status', 'Your Data is Updated');
    }
    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/role-register')->with('status', 'Your Data is Deleted');
    }

    public function store (Request $request)
    {
        $adduser = new Adduser;

        $adduser->id = $request->input('id');
        $adduser->name = $request->input('name');
        $adduser->phone = $request->input('phone');
        $adduser->email = $request->input('email');
        $adduser->password = $request->input('password');

        $adduser->save();
        return redirect('/role-register')->with('status','User Added');
    }
}
