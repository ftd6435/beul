@extends('admin.admin');

@section('title', 'User information')

@section('content')

    <h2>@yield('title')</h2>

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-4 mb-2"><img src="{{ Auth::user()->getUserImage() }}" class="user-profile" alt=""></div>
                <div class="col-md-8 mb-2">
                    <h5><span class="primary-color me-3">Username: </span> {{ Auth::user()->name }}</h5>
                    <h5><span class="primary-color me-3">Email: </span> {{ Auth::user()->email }}</h5>
                    <h5><span class="primary-color me-3">Role: </span> {{ Auth::user()->role }}</h5>
                </div>

                <div class="col-md-12 my-3">
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary me-4">Edit user</a>
                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#destroyUserModal" href="#">Delete</a>
                </div>
            </div>
        </div>
    </div>

@endsection