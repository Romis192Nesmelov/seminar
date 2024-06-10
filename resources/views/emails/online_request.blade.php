@extends('layouts.mail')

@section('content')
    <h2>Сообщение с сайта {{ env('APP_NAME') }}</h2>
    <h3>Пользователь с
        @if (isset($email)) E-mail: {{ $email }}@endif
        @if (isset($email) && isset($phone))<br> и@endif
        @if (isset($phone)) телефоном {{ $phone }}@endif
    </h3>
    <h1>Просит связаться с ним!</h1>
@endsection
