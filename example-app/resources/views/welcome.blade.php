@extends('layout')

@section('content')

    <div class="container">
        <h1 align="center">My Gallery</h1>
        <div class="row">
            <?php for ($i = 0;
                $i < 8;
                $i++) { ?>
            <div class="col-md-3 gallery-item">
                <div>
                    <img src="/image.png" alt="" class="img-thumbnail">
                </div>
                <a href="/show" type="button" class="my-button btn btn-info">Show</a>
                <a href="/edit" type="button" class="my-button btn btn-warning">Edit</a>
                <a href="#" type="button" class="my-button btn btn-danger">Delete</a>
            </div>
            <?php } ?>
        </div>
    </div>
@endsection
