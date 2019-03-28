@extends('layouts.admin')

@section('content')
    <div class="container my-5 pt-3">

        <div class="row mt-3">
            <div class="col-12">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <a href="{{ action('AdminController@index') }}" class="float-left mr-2 pt-1"><i
                            class="fa fa-arrow-left fa-lg"></i></a>
                <h2>All Kitchen Items</h2>
                <hr>
                <ul class="list-group mt-4">
                    @foreach ($kitchens as $kitchen)
                        <li class="list-group-item">{{$kitchen -> name}} <a
                                    href="{{ action('KitchenadminController@edit', $kitchen -> id)  }}">Edit</a>
                          </li>
                    @endforeach
                </ul>

                <a class="btn btn-primary my-5" href="{{ action('KitchenadminController@create') }}">Create Kitchen</a>

            </div>
        </div>

    </div>
@endsection
