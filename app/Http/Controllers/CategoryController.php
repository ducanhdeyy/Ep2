<?php

namespace App\Http\Controllers;

use App\Http\Requests\createCategory;
use App\Http\Requests\updateCategory;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $category = category::orderBy('created_at','DESC')->paginate(2);
        return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createCategory $request)
    {
        //
        $categories = category::create($request->all());
        return redirect()->route('category.index');
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
        $cate = category::find($id);
        return view('admin.category.edit',compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateCategory $request, string $id)
    {
        //
        $cate = category::find($id)->update($request->all());
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = category::find($id)->delete();
        return redirect()->back();
    }
}
