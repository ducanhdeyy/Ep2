<?php

namespace App\Http\Controllers;

use App\Models\album;
use App\Models\singer;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $album = album::orderBy('created_at','DESC')->paginate(2);
        return view('admin.album.index',compact('album'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $singer = singer::all();
        return view('admin.album.add',compact('singer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if($request->hasFile('file')){
            $file = $request->file;
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$fileName);
        }else{
            $fileName = '';
        }
        $request->merge(['image_path'=>$fileName]);
        $albums = album::create($request->all());
        return redirect()->route('album.index');
        
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
        $singer = singer::all();
        $alb = album::find($id);
        return view('admin.album.edit',compact('alb','singer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if($request->hasFile('file')){
            $file = $request->file;
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/img'),$fileName);
        }else{
            $fileName = '';
        }
        $request->merge(['image_path'=>$fileName]);
        $alb = album::find($id)->update($request->all());
        return redirect()->route('album.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $albums = album::find($id)->delete();
        return redirect()->back();
    }
}
