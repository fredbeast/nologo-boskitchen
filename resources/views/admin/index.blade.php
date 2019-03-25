@extends('layouts.admin')

@section('content')
    <div class="container my-5 pt-3">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="d-inline-block">Recipes</h2>
                <a class="float-right btn btn-success " href="admin/recipes">show all</a>
            </div>
        </div>
        <div class="row">
            @foreach ($recipes as $recipe)
                <div class="col-12 col-sm-3">
                    <div class="card rounded card-blog card-blog-sm shadow-lg mt-2 bg-black text-white">
                        <div class="row ">
                            <div class="col-12">
                                <div class="card-block p-3">
                                    <p class="card-subtitle">{{ $recipe->subtitle }}</p>
                                    <a href="{{ action('RecipeadminController@show', $recipe -> id)  }}"><h2
                                                class="card-title">{{ $recipe->title }}</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
