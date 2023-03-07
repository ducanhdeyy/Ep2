<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUser;
use App\Http\Requests\updateUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::orderBy('created_at','DESC')->paginate(2);
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createUser $request)
    {
        //
        $users = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'password'=>bcrypt($request->password),
            'wallet'=>$request->wallet,
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $userss = User::find($id);
        return view('admin.user.edit',compact('userss'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateUser $request, string $id)
    {
        //
        $userss = User::find($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'password'=>bcrypt($request->password),
            'wallet'=>$request->wallet,
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $users = User::find($id)->delete();
        return redirect()->back();
    }


}
