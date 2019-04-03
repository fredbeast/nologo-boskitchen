@extends('layouts.admin')
@section('content')
    <div class="container my-5">
        <a class="btn btn-outline-dark my-5 mx-3" href="{{ action('RecipeadminController@index') }}">BACK</a>

        <h2 class="mb-5">Create Recipe</h2>
        <form method="POST" action="/admin/recipes" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="row my-4">
                <div class="col-md-6">
                    <p>Title (Large)</p>
                    <input class="form-control" type="text" name="title" placeholder="Recipe Title" required>
                    <input type="hidden" name="id">
                </div>
                <div class="col-md-6">
                    <p>Title (Small)</p>
                    <input class="form-control" type="text" name="title_sm" placeholder="Recipe Title Small" required>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <p>Cook Time</p>
                            <input class="form-control" type="text" name="cook" placeholder="Recipe Cook Time">
                        </div>
                        <div class="col-6">
                            <p>Prep Time</p>
                            <input class="form-control" type="text" name="prep" placeholder="Recipe Prep Time">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <p>Recipe Type</p>
                        <select class="form-control" name="type">
                            <option value="">Select category....</option>
                            @foreach ($categories as $category)
                                <option> {{ $category->type }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-12">
                    <p>Post</p>
                    <textarea class="tiny-editor" name="post"></textarea>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-6">
                    <p>Ingredients</p>
                    <textarea class="tiny-editor" name="ingredients"></textarea>
                </div>
                <div class="col-6">
                    <p>Instructions</p>
                    <textarea class="tiny-editor" name="instructions"></textarea>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-6">
                    New image
                    <br>
                    <input class="btn btn-primary" type="file" name="image" required>
                </div>
            </div>
            <div>
                <button class="btn btn-success my-5" type="submit">Create Recipe</button>
            </div>
        </form>
    </div>


@endsection
