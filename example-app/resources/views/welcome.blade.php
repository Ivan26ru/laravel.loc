@extends('layout')

@section('content')

    <div class="container">
        <h1 align="center">My Gallery</h1>
        <div class="row">
            <?php for ($i = 0;
                $i < 4;
                $i++) { ?>
            <div class="col-md-3">
                <div>
                    <img src="/image.jpg" alt="" class="img-thumbnail">
                </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolorem ipsum quas! Dolores illum inventore quis sit! Fuga, quam velit.
            </div>
            <?php } ?>
        </div>
    </div>
@endsection
