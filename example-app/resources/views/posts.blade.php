@extends('layout')

@section('content')
    <h1>Posts</h1>
    <ol>
        @foreach($posts as $post)
            <li>
                <h3><u>{{$post->id}}</u> - {{$post->title}}</h3>
                <p>
                    {{$post->content}}
                </p>
            </li>
        @endforeach
    </ol>
{{--{{$posts->links()}}--}}
{{--    {{$posts->links('pagination::bootstrap-5')}}--}}
@endsection
