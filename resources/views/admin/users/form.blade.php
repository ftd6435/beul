@extends('admin.admin')

@section('title', 'Editer un user')

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route('admin.user.update', $user) }}" class="vstack gap-3" method="POST" enctype="multipart/form-data">
        
        @csrf
        @method('PATCH')

        <div class="row">
            <h4><span class="primary-color me-3">ID:</span> {{ $user->id }}</h4>
            <h4><span class="primary-color me-3">Username:</span> {{ $user->name }}</h4>
            <h4><span class="primary-color me-3">Email:</span> {{ $user->email }}</h4>
            <h4><span class="primary-color me-3">Default role:</span> {{ $user->role }}</h4>
        </div>

        <div class="row">
            @auth
                @include('shared.selectRole', ['class' => 'col', 'type' => 'role', 'label' => 'Role', 'name' => 'role', 'value' => $user->role])
            @endauth
        </div>

        <div class="mt-3">
            <button class="btn btn-primary">
                Edit user
            </button>
        </div>

    </form>

@endsection
