@extends('layout')

@section('content')
    <h1>Posts count {{count($posts)}}</h1>
    <table>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
            </tr>
        @endforeach
    </table>
{{--{{$posts->links()}}--}}
{{--    {{$posts->links('pagination::bootstrap-5')}}--}}
@endsection
