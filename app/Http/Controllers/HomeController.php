<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recipes = Recipe::orderBy('created_at', 'desc')->take(4)->get();
        $categories = Category::orderBy('created_at', 'desc')->take(8)->get();
        return view('admin.index', compact('recipes', 'categories'));
    }
}
