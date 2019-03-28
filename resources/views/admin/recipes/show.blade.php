@extends('layouts.admin')

@section('content')
    <div class="container pt-3 my-5">
        <div class="row">
        <div class="col-12">
            <a class="btn btn-outline-dark my-5" href="{{ action('RecipeadminController@index') }}">BACK</a>
            <a class="btn btn-outline-primary my-5 mx-3" href="{{  action('RecipeadminController@edit', $recipe -> id) }}">EDIT</a>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <img class="d-block mx-auto w-100" src="{{ $recipe -> image }}">
        </div>
            <div class="col-md-6">
                <p>TITLE (small)</p>
                <h2>{{$recipe->title_sm}}</h2>
                <hr>
                <p>TITLE</p>
                <h2>{{$recipe->title}}</h2>
                <hr>
                <p>POST</p>
                {!! $recipe->post  !!}
                <hr>
                <p>COOK Time - {{$recipe->cook  }}   |   PREP Time - {{$recipe->prep  }}</p>
                <hr>
                <p>INGREDIENTS</p>
                {!! $recipe->ingredients  !!}
                <hr>
                <p>INSTRUCTIONS</p>
                {!! $recipe->instructions  !!}
                <hr>
                <p>Type</p>
                <h2>{{$recipe->type}}</h2>
            </div>
        </div>
    </div>
@endsection
