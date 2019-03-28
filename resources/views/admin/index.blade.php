@extends('layouts.admin')

@section('content')
    <div class="container my-5 pt-3">
        <div class="row">
            <div class="col-12 col-sm-6 my-3">
                <h2 class="d-inline-block">Recipes</h2>
                <a class="float-right btn btn-success " href="admin/recipes">show all</a>
                <hr>
                @foreach ($recipes as $recipe)
                    <div class="row">
                        <div class="col-12">

                            <div class="card rounded card-blog card-blog-sm mt-2 bg-black text-white">
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
                    </div>
                @endforeach
            </div>
            <div class="col-12 col-sm-6 my-3">
                <h2 class="d-inline-block">Categories</h2>
                <a class="float-right btn btn-success " href="admin/categories">show all</a>
                <hr>
                <ul class="list-group mt-4">
                    @foreach ($categories as $category)
                        <li class="list-group-item">{{$category -> type}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-3">
                <h2 class="d-inline-block">My Kitchen</h2>
                <a class="float-right btn btn-success " href="admin/kitchens">show all</a>
                <hr>
                <ul class="list-group mt-4">
                    @foreach ($kitchens as $kitchen)
                        <li class="list-group-item">{{$kitchen -> name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@endsection
