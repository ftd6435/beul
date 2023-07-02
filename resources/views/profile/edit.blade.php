@extends('admin.admin');

@section('title', 'Edit profile user')

@section('content')

    <h2>@yield('title')</h2>

    <div class="row">
        <div class="col-lg-8">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="row mb-2">
                    <div class="col-md-4">
                        <img src="{{ Auth::user()->getUserImage() }}" class="user-profile" alt="">
                    </div>
                    <div class="col-md-8">
                        @include('shared.input', ['type' => 'file', 'label' => 'Profile', 'name' => 'image'])
                    </div>
                </div>
                @include('shared.input', ['label' => 'Nom', 'name' => 'name', 'value' => Auth::user()->name])
                @include('shared.input', ['label' => 'Email', 'type' => 'email', 'name' => 'email', 'value' => Auth::user()->email])
                
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Edit user</button>
                </div>
            </form>
        </div>

        <div class="col-lg-4 p-3">
            <h3 class="mb-4">Modifier votre mot de pass</h3>
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                @method('PUT')

                @include('shared.input', ['label' => 'Anciens Password', 'type' => 'password', 'name' => 'current_password'])
                @include('shared.input', ['label' => 'Nouveau Password', 'type' => 'password', 'name' => 'password'])
                @include('shared.input', ['label' => 'Confirm Password', 'type' => 'password', 'name' => 'password_confirmation'])
                   
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Edit Password</button>
                </div>
            </form>
        </div>
    </div>

@endsection

