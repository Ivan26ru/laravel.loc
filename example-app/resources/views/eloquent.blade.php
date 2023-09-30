@extends('layout')

@section('content')
    <h1>Eloquent</h1>
    @php
    use App\Models\Posts;
        dd(Posts::all())
    @endphp
@endsection
