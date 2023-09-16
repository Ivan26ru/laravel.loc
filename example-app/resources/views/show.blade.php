@extends('layout')

@section('content')
{{--    {{dd($imageInView)}}--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <img src="/{{$imageInView}}" alt="" class="img-thumbnail gallery-image">
                </div>
            </div>
        </div>
    </div>
@endsection
