@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1>Edit</h1>
                <img src="/{{$imageInView->image}}" alt="" class="img-thumbnail">
                <form action="/update/{{$imageInView->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-control">
                        <input type="file" name="image" id="" >
                    </div>
                    <input type="submit" value="Edit" class="btn btn-warning">
                </form>
            </div>
        </div>
    </div>
@endsection
