@extends('layouts.admin')

@section('content')
    <div id="editor" class="container my-5">
        <a class="btn btn-dark my-5" href="{{ action('RecipeadminController@index') }}">BACK</a>

        <h1>Edit Recipe</h1>
        <form method="POST" action="/admin/recipes/{{ $recipe->id }}" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="row my-4">
                <div class="col-md-6">
                    <p>Title (Large)</p>
                    <input class="form-control" type="text" name="title" value="{{ $recipe->title  }}"
                           placeholder="Recipe Title">
                    <input type="hidden" name="id" value="{{ $recipe->id }}">
                </div>
                <div class="col-md-6">
                    <p>Title (Small)</p>
                    <input class="form-control" type="text" name="title_sm" value="{{ $recipe->title_sm  }}"
                           placeholder="Recipe Title Small">
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <p>Cook Time</p>
                            <input class="form-control" type="text" name="cook" value="{{ $recipe->cook  }}"
                                   placeholder="Recipe Cook Time">
                        </div>
                        <div class="col-6">
                            <p>Prep Time</p>
                            <input class="form-control" type="text" name="prep" value="{{ $recipe->prep  }}"
                                   placeholder="Recipe Prep Time">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <p>Recipe Type</p>
                        <select class="form-control" name="type">
                            <option value="">Select category....</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->type }}" {{ ( $category->type ==  $recipe->type) ? 'selected' : '' }}> {{ $category->type }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-12">
                    <p>Post</p>
                    <textarea class="tiny-editor" name="post">{{ $recipe -> post }}</textarea>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-6">
                    <textarea class="tiny-editor" name="instructions">{{ $recipe -> instructions }}</textarea>
                </div>
                <div class="col-6">
                    <textarea class="tiny-editor" name="ingredients">{{ $recipe -> ingredients }}</textarea>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-6">
                    New image
                    <br>
                    <input class="btn btn-primary" type="file" name="image">
                </div>
                <div class="col-6">
                    <p>Current image</p>
                    <img src="{{ $recipe->image }}" class="w-50">
                </div>
            </div>
            <div>
                <button class="btn btn-success mt-5" type="submit">Save</button>
            </div>
        </form>
        <form method="POST" action="/admin/recipes/{{$recipe -> id}}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <div class="form-group">
                <button type="submit" class="btn btn-danger mt-5">DELETE</button>
            </div>
        </form>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

    </div>
@endsection
