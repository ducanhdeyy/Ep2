<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSong;
use App\Http\Requests\UpdateSong;
use App\Models\Album;
use App\Models\Category;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $song = Song::orderBy('created_at','DESC')->search()->paginate(2);
        return view('admin.song.index',compact('song'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $singer = Singer::all();
        $albums = Album::all();
        $categories = Category::all();
        return view('admin.song.add',compact('singer','albums','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateSong $request)
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
        if($request->hasFile('image_file')){
            $file = $request->image_file;
            $imageName = $file->getClientOriginalName();
            $file->move(public_path('uploads/img'),$imageName);
            $song['image_path'] = $imageName;
        }

        if($request->hasFile('audio_file')){
            $file = $request->audio_file;
            $audioName = $file->getClientOriginalName();
            $file->move(public_path('uploads/audio'),$audioName);
            $song['music_path'] = $audioName;
        }
        $request->merge(['music_path'=>$audioName]);
        return Song::create($song)
            ? redirect()->route('song.index')->with('success', 'You are add success')
            : redirect()->route('song.add')->with('error', 'You are add failed');
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
        $singer = Singer::all();
        $albums = Album::all();
        $categories = Category::all();
        $songg = Song::find($id);
        return view('admin.song.edit',compact('songg','singer','albums','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSong $request, string $id)
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
        if($request->hasFile('image_file')){
            $file = $request->image_file;
            $imageName = $file->getClientOriginalName();
            $file->move(public_path('uploads/img'),$imageName);
            $song['image_path'] = $imageName;
        }

        if($request->hasFile('audio_file')) {
            $file = $request->audio_file;
            $audioName = $file->getClientOriginalName();
            $file->move(public_path('uploads/audio'), $audioName);
            $song['music_path'] = $audioName;
        }
        return Song::find($id)->update($song)
            ? redirect()->route('song.index')->with('success', 'You are update success')
            : redirect()->route('song.edit',$id)->with('error', 'You are update failed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $songs = Song::find($id)->delete();
        return redirect()->back();
    }
}
