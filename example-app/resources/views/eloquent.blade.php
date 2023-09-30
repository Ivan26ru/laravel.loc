@extends('layout')

@section('content')
    <h1>Eloquent</h1>
    @php
    use App\Models\Post;
        dd(Post::where('id', 6)->get());
    @endphp
@endsection
