@extends('layouts.admin')

@section('content')
    <div class="container my-5 pt-3">
        <h2>Recipe HQ</h2>
        <p>Current Recipe</p>
        @foreach ($recipes as $recipe)
            <li>{{$recipe->title}} <a href="{{ action('RecipeadminController@edit', $recipe -> id)  }}">Edit</a> <a href="{{ action('RecipeadminController@show', $recipe -> id)  }}">View</a> </li>
        @endforeach
        <a class="btn btn-primary my-5" href="{{ action('RecipeadminController@create') }}">Create Post</a>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>
@endsection
