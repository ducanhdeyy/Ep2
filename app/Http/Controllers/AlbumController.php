<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlbum;
use App\Http\Requests\UpdateAlbum;
use App\Models\Album;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $album = Album::orderBy('created_at', 'DESC')->search()->paginate(2);
        return view('admin.album.index', compact('album'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $singer = Singer::all();
        return view('admin.album.add', compact('singer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateAlbum $request)
    {
        //
        $albums = [
            'name' => $request->name,
            'description' => $request->description,
            'singer_id' => $request->singer_id
        ];
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $imageName = $file->getClientOriginalName();
            $file->move(public_path('uploads/img'), $imageName);
            $albums['image_path'] = $imageName;
        }
        $request->merge(['image_path' => $imageName]);
        return Album::create($albums) ? redirect()->route('album.index')->with('success', 'You are add success')
            : redirect()->back()->with('error', 'You are add failed');

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
        $alb = Album::find($id);
        return view('admin.album.edit', compact('alb', 'singer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlbum $request, string $id)
    {
        //
        $album = [
            'name' => $request->name,
            'description' => $request->description,
            'singer_id' => $request->singer_id
        ];

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $imageName = $file->getClientOriginalName();
            $file->move(public_path('uploads/img'), $imageName);
            $album['image_path'] = $imageName;
        }
        return Album::find($id)->update($album)
            ? redirect()->route('album.index')->with('success', 'You are update success')
            : redirect()->route('album.edit', $id)->with('error', 'You are update failed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if (Song::where('albums_id', $id)->get()->count() > 0){
            return redirect()->back()->with('error', 'Album have song not delete');
        }
        $albums = Album::find($id)->delete();
        return redirect()->back();
    }
}
