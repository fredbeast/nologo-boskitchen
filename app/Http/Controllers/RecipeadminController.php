<?php

namespace App\Http\Controllers;

use App\Recipe;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RecipeadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('admin.recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recipes.create');

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
        $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
        if ($request->file('image')) {
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $filePath = 'images/' . $name;
            $imageUrl = $url . 'images/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
        }
        else {
            return redirect()->back()->with('message', 'Image upload failed');
        }

        Recipe::create([
            'title' => request('title'),
            'title_sm' => request('title_sm'),
            'post' => request('post'),
            'prep' => request('prep'),
            'cook' => request('cook'),
            'ingredients' => request('ingredients'),
            'instructions' => request('instructions'),
            'image' => $imageUrl
        ]);

        return redirect('admin/recipes')->with('message', 'Recipe uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view('admin.recipes.show', compact('recipe'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('admin.recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Recipe $recipe)
    {
        $old = Recipe::find(request('id'));
        if(!empty(request('image'))) {
            $new = request('image');
            $newUrl = $this->awsUpdate($old, $new);
            $recipe->update(['image' => $newUrl]);
        }
        $recipe->update(request(['title', 'post', 'cook', 'prep', 'cook', 'ingredients', 'instructions']));
        return back()->withSuccess('Everything updated successfully!');
    }

    private function awsUpdate($old, $new)
    {
        $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
        $name = time() . $new->getClientOriginalName();
        $filePath = 'images/' . $name;
        $imageUrl = $url . 'images/' . $name;
        $oldImageSplit = explode('/', $old->image);
        $oldImageS3Id = end($oldImageSplit);
        Storage::disk('s3')->put($filePath, file_get_contents($new));
        Storage::disk('s3')->delete('images/' . $oldImageS3Id);
        return $imageUrl;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $imageUrl = explode('/', $recipe->image);
        $s3Id = end($imageUrl);
        Storage::disk('s3')->delete('images/' . $s3Id);
        $recipe->delete();
        return redirect('admin/posts')->with('message', 'Recipe deleted successfully!');
    }
}