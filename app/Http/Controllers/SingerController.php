<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSinger;
use App\Http\Requests\UpdateSinger;
use App\Models\singer;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $singer = singer::orderBy('created_at','DESC')->paginate(2);
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
        //
        if($request->hasFile('file')){
            $file = $request->file;
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/img'),$fileName);
        }else{
            $fileName = '';
        }
        $request->merge(['image_path'=>$fileName]);
        $singers = singer::create($request->all());
        return redirect()->route('singer.index');
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
        $sing = singer::find($id);
        return view('admin.singer.edit',compact('sing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSinger $request, string $id)
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
        $sing = singer::find($id)->update($request->all());
        return redirect()->route('singer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $singer = singer::find($id)->delete();
        return redirect()->back();
    }
}
