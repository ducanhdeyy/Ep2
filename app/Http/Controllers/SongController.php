<?php

namespace App\Http\Controllers;

use App\Http\Requests\createSong;
use App\Http\Requests\updateSong;
use App\Models\album;
use App\Models\category;
use App\Models\singer;
use App\Models\song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $song = song::orderBy('created_at','DESC')->paginate(2);
        return view('admin.song.index',compact('song'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $singer = singer::all();
        $albums = album::all();
        $categories = category::all();
        return view('admin.song.add',compact('singer','albums','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createSong $request)
    {
        //
        $song = [
            'name'=>$request->name,
            'singer_id'=>$request->singer_id,
            'albums_id'=>$request->albums_id,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'introduction'=>$request->introduction
        ];
        if($request->hasFile('image')){
            $file = $request->image;
            $imageName = $file->getClientOriginalName();
            $file->move(public_path('uploads/img'),$imageName);
            $song['image_path'] = $imageName;
        }

        if($request->hasFile('audio')){
            $file = $request->audio;
            $audioName = $file->getClientOriginalName();
            $file->move(public_path('uploads/audio'),$audioName);
            $song['music_path'] = $audioName;
        }
        $request->merge(['music_path'=>$audioName]);
        $songg = song::create($song);
        return redirect()->route('song.index');
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
        $albums = album::all();
        $categories = category::all();
        $songg = song::find($id);
        return view('admin.song.edit',compact('songg','singer','albums','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateSong $request, string $id)
    {
        //
        $song = [
            'name'=>$request->name,
            'singer_id'=>$request->singer_id,
            'albums_id'=>$request->albums_id,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'introduction'=>$request->introduction
        ];
        if($request->hasFile('image')){
            $file = $request->image;
            $imageName = $file->getClientOriginalName();
            $file->move(public_path('uploads/img'),$imageName);
            $song['image_path'] = $imageName;
        }

        if($request->hasFile('audio')){
            $file = $request->audio;
            $audioName = $file->getClientOriginalName();
            $file->move(public_path('uploads/audio'),$audioName);
            $song['music_path'] = $audioName;
        }

        $songg = song::find($id)->update($song);
        return redirect()->route('song.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $songs = album::find($id)->delete();
        return redirect()->back();
    }
}
