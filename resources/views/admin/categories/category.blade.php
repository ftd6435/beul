@extends('admin.admin')

@section('title', 'Toutes les catégories')

@section('content')

   <div class="d-flex justify-content-between align-items-center m-3">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Ajouter une catégorie</a>
        {{-- <a href="{{ route('admin.category.corbeille') }}" class="btn btn-primary">Corbeille</a> --}}
   </div>

   <table class="table table-striped">
    <thead>
        <tr>
            <th>N°</th>
            <th>Catégorie</th>
            <th class="text-end">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        @if (Auth::user()->role == "admin")
                            {{-- Dashbin management  --}}
                            @if ($category->trashed())
                                @can('restore', $category)
                                    <form action="{{ route('admin.category.restore', ['id' => $category->id]) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-success" onclick="return confirm('Etes vous sûr de vouloir restoré cette category?')">Restore</button>
                                    </form>
                                @endcan
                                @can('forceDelete', $category)
                                    <form action="{{ route('admin.category.forceDelete', ['id' => $category->id]) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Etes vous sûr de vouloir supprimer definitivement?')">Delete Forever</button>
                                    </form>
                                @endcan

                            @else
                                {{-- Normarl edit and delete --}}
                                @can('create', $category)
                                    <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-primary">Edit</a>
                                @endcan
                                @can('delete', $category)
                                    <form action="{{ route('admin.category.destroy', ['category' => $category]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
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
@endsection