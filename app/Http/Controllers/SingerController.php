<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSinger;
use App\Http\Requests\UpdateSinger;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $singer = Singer::orderBy('created_at','DESC')->search()->paginate(2);
        return view('admin.singer.index',compact('singer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.singer.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateSinger $request)
    {
        $singer = [
            'name'=>$request->name,
            'dob'=>$request->dob,
            'introduction'=>$request->introduction,
        ];
        if($request->hasFile('file')){
            $file = $request->file;
            $imageName = $file->getClientOriginalName();
            $file->move(public_path('uploads/img'),$imageName);
            $singer['image_path'] = $imageName;
        }
        return Singer::create($singer)
            ? redirect()->route('singer.index')->with('success', 'You are add success')
            : redirect()->route('singer.add')->with('error', 'You are add failed');
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
        $sing = Singer::find($id);
        return view('admin.singer.edit',compact('sing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSinger $request, string $id)
    {
        //
        $singers = [
            'name'=>$request->name,
            'dob'=>$request->dob,
            'introduction'=>$request->introduction,
        ];
        if($request->hasFile('file')){
            $file = $request->file;
            $imageName = $file->getClientOriginalName();
            $file->move(public_path('uploads/img'),$imageName);
            $singers['image_path'] = $imageName;
        }
        return Singer::find($id)->update($singers)
            ? redirect()->route('singer.index')->with('success', 'You are update success')
            : redirect()->route('singer.edit', $id)->with('error', 'You are update failed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Song::where('singer_id', $id)->get()->count() > 0){
            return redirect()->back()->with('error', 'Singer have song not delete');
        }
        $singer = Singer::find($id)->delete();
        return redirect()->back();
    }
}
