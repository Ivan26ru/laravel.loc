@extends('layout')

@section('content')
    <h1>Шаблон страницы</h1>
@php
echo fake()->slug(2)

 @endphp
    <h2>ID = {{$id}}</h2>

@endsection
