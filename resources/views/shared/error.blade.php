@extends('template')

@section('title', 'Error url')

@section('content')

    <div class="container">
        <h1>@yield('title')</h1>
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    </div>

@endsection