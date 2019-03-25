<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;


class AdminController extends Controller
{
    //

    public function index()
    {
        $recipes = Recipe::orderBy('created_at', 'desc')->take(4)->get();
        return view('admin.index', compact('recipes'));
    }
}
