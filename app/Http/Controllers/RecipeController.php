<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(Recipe::all()->jsonSerialize(), Response::HTTP_OK);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $recipe = Recipe::find($id);
        return response()->json($recipe);

    }
}
