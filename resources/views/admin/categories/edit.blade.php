@extends('layouts.admin')

@section('content')
    <div id="editor" class="container my-5">
        <a class="btn btn-dark my-5" href="{{ action('CategoryadminController@index') }}">BACK</a>

        <h1>Edit Category</h1>
        <form method="POST" action="/admin/categories/{{ $category->id }}" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="row my-4">
                <div class="col-12">
                    <input type="hidden" name="id" value="{{ $category->id }}">
                    <p>Type</p>
                    <input class="form-control" type="text" name="type" value="{{ $category->type  }}"
                           placeholder="Category Type">
                    <button class="btn btn-success mt-5" type="submit">Save</button>
                </div>
            </div>
        </form>
        <form method="POST" action="/admin/categories/{{$category -> id}}">
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
