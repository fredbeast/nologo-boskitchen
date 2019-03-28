@extends('layouts.admin')
@section('content')
    <div class="container my-5">
        <a class="btn btn-outline-dark my-5 mx-3" href="{{ action('KitchenadminController@index') }}">BACK</a>

        <h2 class="mb-5">Create Category</h2>
        <form method="POST" action="/admin/kitchens" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div class="row my-3">
                <div class="col-6">
                    <p>Name</p>
                    <input class="form-control" type="text" name="name" placeholder="Category Name">
                </div>
                <div class="col-6">
                    <p>Link</p>
                    <input class="form-control" type="text" name="link" placeholder="Category Link">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-6">
                    <p>Order</p>
                    <input class="form-control" type="text" name="order" placeholder="Category Order">
                </div>
                <div class="col-6">
                    <p>Colour (HEX code, no Hash)</p>
                    <input class="form-control" type="text" name="color" placeholder="Category Color">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <p>Description</p>
                    <textarea class="tiny-editor" name="description"></textarea>
                </div>
            </div>
            <div>
                <button class="btn btn-success my-5" type="submit">Create Kitchen</button>
            </div>
        </form>
    </div>


@endsection
