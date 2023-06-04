@extends('layout')

@section('content')
    <style>
        button.my-button {
            width: 100%;
            margin-top: 5px;
        }

        .gallery-item{
            margin: 10px 0;
        }
    </style>
    <div class="container">
        <h1 align="center">My Gallery</h1>
        <div class="row">
            <?php for ($i = 0;
                $i < 8;
                $i++) { ?>
            <div class="col-md-3 gallery-item">
                <div>
                    <img src="/image.jpg" alt="" class="img-thumbnail">
                </div>
                <button type="button" class="my-button btn btn-info">Info</button>
                <button type="button" class="my-button btn btn-warning">Warning</button>
                <button type="button" class="my-button btn btn-danger">Danger</button>
            </div>
            <?php } ?>
        </div>
    </div>
@endsection
