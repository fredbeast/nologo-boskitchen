<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;
use App\Category;
use App\Kitchen;


class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $recipes = Recipe::orderBy('created_at', 'desc')->take(4)->get();
        $categories = Category::orderBy('created_at', 'desc')->take(8)->get();
        $kitchens = Kitchen::orderBy('created_at', 'desc')->take(8)->get();
        return view('admin.index', compact('recipes', 'categories','kitchens'));
    }
}
