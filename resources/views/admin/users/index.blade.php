@extends('admin.admin')

@section('title', 'Liste des utilisateur')

@section('content')

<h1>@yield('title')</h1>

<div class="row">
    <div class="col-lg-12">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Profil</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th class="text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td><img src="{{ $user->getUserImage() }}" class="profile-react" alt="Profile"></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <div class="d-flex gap-2 w-100 justify-content-end">
                                @if ($user->trashed() && Auth::user()->role == 'Admin')
                                    @can('restore', $user)
                                        <form action="{{ route('admin.user.restore', ['id' => $user->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary" onclick="return confirm('Etes vous sûr de vouloir restorer ce user ?')">Restore</button>
                                        </form>
                                    @endcan
                                    @can('forceDelete', $user)
                                        <form action="{{ route('admin.user.forceDelete', ['id' => $user->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Etes vous sûr de vouloir supprimer definitivement ce user ?')">Delete Forever</button>
                                        </form>
                                    @endcan
                                @endif
                                        
                                @if (!$user->trashed())
                                    @if (Auth::user()->role == 'Admin')
                                        @can('update', $user)
                                            <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-primary">Edit</a>
                                        @endcan
                                        @can('delete', $user)
                                            <form action="{{ route('admin.user.destroy', ['user' => $user]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Etes vous sûr de vouloir mettre ce user dans la corbeille?')">Delete</button>
                                            </form>
                                        @endcan
                                    @endif
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection