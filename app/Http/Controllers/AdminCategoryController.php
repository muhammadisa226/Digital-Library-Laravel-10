<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.categories.index',[
            "title" => 'Book Categories',
            "categories" => Category::all()->sortBy('name')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.categories.create',[
            "title" => 'Book Categories',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required"
        ]);

        Category::create($validatedData);

        return redirect(route('categories.index'))->with('success', 'Category has ben added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.admin.categories.edit',[
            "title" => 'My Books',
            "category" => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            "name" => "required",
        ]);
        Category::where('id', $category->id)->update($validatedData);
        return redirect(route('categories.index'))->with('success', 'Category has ben updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect(route('categories.index'))->with('success', 'Category has ben Deleted');
    }
}
