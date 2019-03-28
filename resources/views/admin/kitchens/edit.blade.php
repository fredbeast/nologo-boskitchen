@extends('layouts.admin')

@section('content')
    <div id="editor" class="container my-5">
        <a class="btn btn-dark my-5" href="{{ action('KitchenadminController@index') }}">BACK</a>

        <h1>Edit Kitchen</h1>
        <form method="POST" action="/admin/kitchens/{{ $kitchen->id }}" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="row my-3">
                <input type="hidden" name="id" value="{{ $kitchen->id }}">
                <div class="col-6">
                    <p>Name</p>
                    <input class="form-control" type="text" name="name" placeholder="Kitchen Name"
                           value="{{ $kitchen->name }}">
                </div>
                <div class="col-6">
                    <p>Link</p>
                    <input class="form-control" type="text" name="link" placeholder="Kitchen Link"
                           value="{{ $kitchen->link }}">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-6">
                    <p>Order</p>
                    <input class="form-control" type="text" name="order" placeholder="Kitchen Order"
                           value="{{ $kitchen->order }}">
                </div>
                <div class="col-6">
                    <p>Colour (HEX code, no Hash)</p>
                    <input class="form-control" type="text" name="color" placeholder="Kitchen Color"
                           value="{{ $kitchen->color }}">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <p>Description</p>
                    <textarea class="tiny-editor" name="description">  {{ $kitchen->description }}</textarea>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <button class="btn btn-success mt-5" type="submit">Save</button>
                </div>
            </div>
        </form>
        <form method="POST" action="/admin/kitchens/{{$kitchen -> id}}">
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
