@extends('layout.mainLayout')

@section('title', 'home')

@section('main_content')
    <h1>Welcome to My Home Page</h1>
    <p>Hello {{ $name }} !</p>
@endsection