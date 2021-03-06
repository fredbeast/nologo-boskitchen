@extends('layouts.admin')

@section('content')
    <div class="container my-5 pt-3">

        <div class="row mt-3">
            <div class="col-12">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <a href="{{ action('AdminController@index') }}" class="float-left mr-2 pt-1"><i
                            class="fa fa-arrow-left fa-lg"></i></a>
                <h2>All Recipes</h2>
                <hr>

                @foreach ($recipes as $recipe)
                    <li>{{$recipe->title}} <a href="{{ action('RecipeadminController@edit', $recipe -> id)  }}">Edit</a>
                        <a href="{{ action('RecipeadminController@show', $recipe -> id)  }}">View</a></li>
                @endforeach
                <a class="btn btn-primary my-5" href="{{ action('RecipeadminController@create') }}">Create Recipe</a>

            </div>
        </div>

    </div>
@endsection
