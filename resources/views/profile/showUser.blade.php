@extends('admin.admin');

@section('title', 'User information')

@section('content')

    <h1>@yield('title')</h1>

    <h2>Name: {{ Auth::user()->name }}</h2>

@endsection