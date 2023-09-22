@extends('layout')

@section('content')
    <h1>Необходимо авторизоваться</h1>
    <form action="#">
        <label for="name">Имя<input type="text" name="name" id=""></label>
        <br>
        <br>
        <label for="password">Пароль<input type="password" name="password" id=""></label>
        <br>
        <br>
        <input type="submit" value="submit">
    </form>
@endsection
