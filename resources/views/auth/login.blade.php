@extends('admin.admin')

@section('title', 'Log in')

@section('content')

    <h1 class="my-4">Se connecter</h1>

<form action="" method="POST" class="vstack gap-4">
    @csrf 

    @include('shared.input', ['label' => 'Email', 'name' => 'email', 'placeholder' => 'example@gmail.com'])
    @include('shared.input', ['label' => 'Password', 'name' => 'password', 'type' => 'password'])

    <div class="mt-3">
        <button class="btn btn-primary">Login</button>
    </div>
</form>

@endsection