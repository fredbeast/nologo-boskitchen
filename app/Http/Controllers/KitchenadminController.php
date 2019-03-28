<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kitchen;

class KitchenadminController extends Controller
{
    public function index()
    {
        $kitchens = Kitchen::all();
        return view('admin.kitchens.index', compact('kitchens'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kitchens.create');
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
        Kitchen::create([
            'name' => request('name'),
            'description' => request('description'),
            'link' => request('link'),
            'order' => request('order'),
            'color' => request('color')
        ]);

        return redirect('admin/kitchens')->with('message', 'Kitchen uploaded successfully');
    }

    public function edit(Kitchen $kitchen){
        return view('admin.kitchens.edit', compact('kitchen'));
    }

    public function update(Kitchen $kitchen){
        $kitchen->update(request(['name','description', 'link', 'order', 'color']));
        return back()->withSuccess('Kitchen updated successfully!');
    }

    public function destroy($id){
        $kitchen = Kitchen::find($id);
        $kitchen->delete();
        return redirect('admin/kitchens')->with('message', 'Kitchen deleted successfully!');
    }
}
