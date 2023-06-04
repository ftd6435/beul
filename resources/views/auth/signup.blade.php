@extends('admin.admin')

@section('title', $user->id ? 'Modifier un utilisateur' : 'Inscription')

@section('content')

    <h1>{{ $user->id ?  'Modifier un utilisateur' : 'Inscription' }}</h1>

    <form action="{{ route($user->id ? 'auth.update' : 'auth.store', $user) }}" class="vstack gap-3" method="POST" enctype="multipart/form-data">
        
        @csrf
        @method($user->id ? 'PATCH' : 'POST')

        <div class="row">

            @include('shared.input', ['class' => 'col', 'label' => 'Fullname', 'name' => 'name', 'placeholder' => 'Your Name', 'value' => $user->name])
            @include('shared.input', ['class' => 'col', 'label' => 'Username', 'name' => 'username', 'placeholder' => 'Your Username', 'value' => $user->username])
            
        </div>
        <div class="row">   
            @include('shared.input', ['class' => 'col', 'label' => 'Email', 'name' => 'email', 'placeholder' => 'example@gmail.com', 'value' => $user->email])
            @include('shared.input', ['class' => 'col', 'label' => 'Role', 'name' => 'role', 'placeholder' => 'User role', 'value' => $user->role])
        </div>

        @include('shared.input', ['label' => 'Password', 'name' => 'password', 'type' => 'password'])

        <div class="mt-3">
            <button class="btn btn-primary">
                @if ($user->id)
                    Edit
                @else
                    Create
                @endif
            </button>
        </div>

    </form>

@endsection