@extends('layout')

@section('content')
    <div class="container">
        <h1 align="center">My Gallery</h1>
        <div class="row">
            @foreach($imagesInView as $image)
                <div class="col-md-3 gallery-item">
                    <div>
                        <img src="{{$image->image}}" alt="" class="img-thumbnail">
                    </div>
                    <a href="/show/{{$image->id}}" type="button" class="my-button btn btn-info">Show</a>
                    <a href="/edit" type="button" class="my-button btn btn-warning">Edit</a>
                    <a href="#" type="button" class="my-button btn btn-danger">Delete</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
