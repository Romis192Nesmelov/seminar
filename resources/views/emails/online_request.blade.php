@extends('layouts.mail')

@section('content')
    <h2>Сообщение с сайта {{ env('APP_NAME') }}</h2>
    <h3>Пользователь с E-mail: {{ $email }}<br>и телефоном {{ $phone }}</h3>
    <h1>Просит связаться с ним!</h1>
@endsection
