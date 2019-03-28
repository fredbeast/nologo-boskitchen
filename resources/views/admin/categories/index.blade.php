@extends('layouts.admin')

@section('content')
    <div class="container my-5 pt-3">

        <div class="row mt-5">
            <div class="col-12">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <a href="{{ action('AdminController@index') }}" class="float-left mr-2 pt-1"><i
                            class="fa fa-arrow-left fa-lg"></i></a>
                <h2>All Categories</h2>
                <hr>
                <ul class="list-group mt-4">
                    @foreach ($categories as $category)
                        <li class="list-group-item">{{$category -> type}} <a
                                    href="{{ action('CategoryadminController@edit', $category -> id)  }}">Edit</a>
                          </li>
                    @endforeach
                </ul>

                <a class="btn btn-primary my-5" href="{{ action('CategoryadminController@create') }}">Create Category</a>

            </div>
        </div>

    </div>
@endsection
