<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;


class CategoryadminController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Category::create([
            'type' => request('type')
        ]);

        return redirect('admin/categories')->with('message', 'Category uploaded successfully');
    }

    public function edit(Category $category){
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Category $category){
        $category->update(request('type'));
        return back()->withSuccess('Category updated successfully!');
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/categories')->with('message', 'Category deleted successfully!');
    }
}
