@extends('layouts.admin')
@section('content')
    <div class="container my-5">
        <a class="btn btn-outline-dark my-5 mx-3" href="{{ action('RecipeadminController@index') }}">BACK</a>

        <h2 class="mb-5">Create Recipe</h2>
        <form method="POST" action="/admin/recipes" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div>
                <input type="text" name="title" placeholder="Recipe Title">
            </div>
            <div>
                <input type="text" name="title_sm" placeholder="Recipe Title (Small)">
            </div>
            <div>
                <input type="text" name="cook" placeholder="Recipe Cook Time">
            </div>
            <div>
                <input type="text" name="prep" placeholder="Recipe Prep Time">
            </div>
            <div>
                <textarea class="tiny-editor" name="post" placeholder="Recipe Post"></textarea>
            </div>
            <div>
                <input type="file" name="image">
            </div>
            <div>
                <button class="btn btn-success my-5" type="submit">Create Recipe</button>
            </div>
        </form>
    </div>


@endsection
