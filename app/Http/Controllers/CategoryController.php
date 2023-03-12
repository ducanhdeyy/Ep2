<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategory;
use App\Http\Requests\UpdateCategory;
use App\Models\Category;
use App\Models\Song;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $category =Category::orderBy('created_at','DESC')->search()->paginate(2);
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
    public function store(CreateCategory $request)
    {
        //
        $categories = [
            'name'=>$request->name,
            'description'=>$request->description
        ];
        return Category::create($categories) ? redirect()->route('category.index')->with('success', 'You are add success')
            : redirect()->route('category.add')->with('error', 'You are add failed');
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
        $cate = Category::find($id);
        return view('admin.category.edit',compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategory $request, string $id)
    {
        //
        return Category::find($id)->update($request->all())
            ? redirect()->route('category.index')->with('success', 'You are update success')
            : redirect()->route('category.edit', $id)->with('error', 'You are update failed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if (Song::where('category_id', $id)->get()->count() > 0){
            return redirect()->back()->with('error', 'Category have song not delete');
        }
        $category = Category::find($id)->delete();
        return redirect()->back();
    }
}
