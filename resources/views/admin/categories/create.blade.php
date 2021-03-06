@extends('layouts.admin')
@section('content')
    <div class="container my-5">
        <a class="btn btn-outline-dark my-5 mx-3" href="{{ action('CategoryadminController@index') }}">BACK</a>

        <h2 class="mb-5">Create Category</h2>
        <form method="POST" action="/admin/categories" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div class="col-6">
                <input type="text" class="form-control" name="type" placeholder="Category Type" required>
            </div>

            <div>
                <button class="btn btn-success my-5" type="submit">Create Category</button>
            </div>
        </form>
    </div>


@endsection
