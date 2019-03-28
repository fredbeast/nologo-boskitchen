<?php

namespace App\Http\Controllers;

use App\Category;
use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(Category::all()->toJson(), Response::HTTP_OK);

    }

    /**
     * Display a filtered listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        //
        $type = $request -> type;
        return response(Recipe::where('type', '=', $type)->get()->toArray(), Response::HTTP_OK);
    }

}
