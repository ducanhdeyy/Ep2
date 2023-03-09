<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use App\Http\Requests\updateUser;
use App\Models\Album;
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
        $user = User::orderBy('created_at','DESC')->search()->paginate(2);
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
    public function store(CreateUser $request)
    {
        //
        $users = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'password'=>bcrypt($request->password),
            'wallet'=>$request->wallet,
        ];
        if($request->hasFile('file')){
            $file=$request->file;
            $imageName = $file->getClientOriginalName();
            $file->move(public_path('uploads/img'),$imageName);
            $users['image'] = $imageName;
        }
        return User::create($users)
            ? redirect()->route('user.index')->with('success', 'You are add success')
            : redirect()->route('user.add', $id)->with('error', 'You are add failed');
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
        $userss = [
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password'=>bcrypt($request->password),
            'wallet'=>$request->wallet,
        ];
        return User::find($id)->update($userss)
            ? redirect()->route('user.index')->with('success', 'You are update success')
            : redirect()->route('user.edit', $id)->with('error', 'You are update failed');
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
