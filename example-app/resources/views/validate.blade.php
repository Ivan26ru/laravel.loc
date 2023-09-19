@extends('layout')

@section('content')
    <h1>Валидация</h1>
    {{$errors->first('title')}}
    <hr>
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <form action="/validate/check" method="post">
        <input type="text" name="title" value="{{ old('title') }}">
        <input type="text" name="desc"> <br>
        {{csrf_field()}}
        <button type="submit">Submit</button>
    </form>
@endsection

