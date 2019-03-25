@extends('layouts.admin')

@section('content')
    <div class="container pt-3 my-5">
        <a class="btn btn-outline-dark my-5 mx-3" href="{{  action('RecipeadminController@edit', $recipe -> id) }}">EDIT</a>
        <a class="btn btn-outline-dark my-5 mx-3" href="{{ action('RecipeadminController@index') }}">BACK</a>
        <img class="d-block mx-auto w-25" src="{{ $recipe -> image }}">
        <div class="content-wrapper mb-5">
        <p>TITLE</p>
        <h2>{{$recipe->title}}</h2>
        <p>POST</p>
        {!! $recipe->post  !!}
        </div>
    </div>
@endsection
